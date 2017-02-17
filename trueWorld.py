# -*- coding: utf-8 -*-
import requests
from bs4 import BeautifulSoup
import re
import time
import MySQLdb

conn = MySQLdb.connect(host= "localhost",
                  user="dwatravel",
                  passwd="ni00065996",
                  db="trueworld_DB")
x = conn.cursor()
s = requests.Session()
login_url = "http://www.trueworldagency.com/member/login_ok.asp"
login_data = {'upw': '07092519', 'uid': '07092519'}
s.post(login_url, login_data)


trip_bookingID = []
trip_period = []
trip_programDN = []
trip_programName = []
trip_HasDC = []
trip_price = []
trip_seatAvailable = []
result = s.get("http://www.trueworldagency.com/index.asp?area=1#gnb").text
soup = BeautifulSoup(result, "lxml")

for tag in soup.findAll('tr'):
	if "chk" in str(tag):
		allTd = list(tag.find_all('td'))
		
		#Get booking ID
		regRet = re.search("(?<=\()(.*)(?=\))",str(allTd[0])) 	
		bookingItem = regRet.group().split(',')
		bookingItem[1] = bookingItem[1].replace(" ","")
		bookingItem[2] = bookingItem[2].replace("\'","")
		bookingItem[2] = bookingItem[2].replace(" ","")
		trip_bookingID.append(bookingItem)

		#Get Trip period
		periodItem = []
		val = str(allTd[1]).split(" ")
		regRet = re.search("\d{2}\/\w+\/\d{4}",val[0])
		periodItem.append(regRet.group())
		regRet = re.search("\d{2}\/\w+\/\d{4}",val[2])
		periodItem.append(regRet.group())
		trip_period.append(periodItem)

		#Get Trip Code
		trip_programDN.append(str(allTd[2]).replace("<td>","").replace("</td>",""))

		#Get Trip Name
		regRet = re.search("(?<=\>)(.*)(?=\<)",str(allTd[3])) 	
		nameItem = regRet.group()
		trip_programName.append(nameItem)

		#Get price
		if "</span>" in str(allTd[4]):
			priceItem = []
			val = str(allTd[4]).split("</span>")
			regRet = re.search("\d+,\d+",val[0])
			priceItem.append(regRet.group())
			regRet = re.search("\d+,\d+",val[1])
			priceItem.append(regRet.group())
			trip_price.append(priceItem)
			trip_HasDC.append(True)
		else:
			regRet = re.search("\d+,\d+",str(allTd[4]))
			trip_price.append(regRet.group())
			trip_HasDC.append(False)

		#Get Available seat
		trip_seatAvailable.append(re.search("\d+",str(allTd[5])).group())

	#Get Flight code
	'''
	if "Agency com." in str(tag):
		print(tag)
	'''
'''
for i in range(0,len(trip_bookingID)):
	print("Program Name : "+ str(trip_programName[i]))
	print("Booking ID :"+ str(trip_bookingID[i][0]) + ": :" + str(trip_bookingID[i][1]) + ": :" + str(trip_bookingID[i][2]))
	print("From " + trip_period[i][0] + " To " + trip_period[i][1])
	print("Period : " + trip_programDN[i])
	if trip_HasDC[i]:
		print("Price : " + trip_price[i][0] + " Discounted Price : " + trip_price[i][1])
	else:
		print("Price : " + trip_price[i])
	print("Available Seat : " + trip_seatAvailable[i])
	print("\n\n")
'''
tour_desNum = "0"

for tag in soup.findAll('p'):
    if "onclick" in str(tag):
        regRet = re.search("\d+",str(tag))
        tour_desNum = regRet.group()
print(tour_desNum)

result = s.get("http://www.trueworldagency.com/viewer/program_tour.asp?seq="+tour_desNum).text
tourDes = BeautifulSoup(result, "lxml")

for tag in tourDes.findAll('p'):
    if "program" in str(tag):
        print (str(tag.text))


x.execute("SELECT * FROM trip_trueworld")
queryRet = x.fetchall()

for i in range(0,len(trip_bookingID)):
	booking_key = str(trip_bookingID[i][0]) +  "gnb" + str(trip_bookingID[i][1])
	trip_desc = str(trip_bookingID[i][0]) +  "gnb"
	existed = 0
	foundMatchedSeat = 0
	for row in queryRet:
		if booking_key == row[0]:
			existed = 1
			foundMatchedSeat = row[5]

	if existed == 1:
		#UPDATE seat
		print(foundMatchedSeat + " "+ trip_seatAvailable[i])
		if foundMatchedSeat != trip_seatAvailable[i]:
			x.execute ("UPDATE trip_trueworld SET seat_available=%s WHERE booking_key=%s",\
		 	(trip_seatAvailable[i], booking_key))
		 	#x.execute ("UPDATE trip_trueworld SET seat_available=%s WHERE booking_key=%s",(1232,'1gnb1900'))
			print(trip_seatAvailable[i]+" Successfully update row : "+booking_key)
		else:
			print(trip_seatAvailable[i]+" Everything is up-to-date : "+booking_key )
		conn.commit()
		time.sleep(0.1)
	else:
		#INSERT row
		dep = time.strptime(trip_period[i][0], "%d/%b/%Y")
		ret = time.strptime(trip_period[i][0], "%d/%b/%Y")
		if trip_HasDC[i]:
			x.execute("""INSERT INTO trip_trueworld VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)""",\
			(booking_key,str(trip_bookingID[i][0]),str(trip_bookingID[i][1]),str(trip_bookingID[i][2]),"gnb",trip_seatAvailable[i], \
			time.strftime('%Y-%m-%d %H:%M:%S', dep),time.strftime('%Y-%m-%d %H:%M:%S', ret),trip_price[i][0].replace(",",""),trip_price[i][1].replace(",",""),trip_price[i][0].replace(",",""),trip_price[i][1].replace(",",""), \
			4900,8900,6900,900,300,trip_desc))
		else:
			x.execute("""INSERT INTO trip_trueworld VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)""",\
			(booking_key,str(trip_bookingID[i][0]),str(trip_bookingID[i][1]),str(trip_bookingID[i][2]),"gnb",trip_seatAvailable[i], \
			time.strftime('%Y-%m-%d %H:%M:%S', dep),time.strftime('%Y-%m-%d %H:%M:%S', ret),trip_price[i].replace(",",""),trip_price[i].replace(",",""),trip_price[i].replace(",",""),trip_price[i].replace(",",""), \
			4900,8900,6900,900,300,trip_desc))
		conn.commit()
		time.sleep(0.1)
conn.close()
		