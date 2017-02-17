# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

import requests
from bs4 import BeautifulSoup
import re

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




for i in xrange(0,len(trip_bookingID)):
	print("Program Name : "+trip_programName[i])
	print("From " + trip_period[i][0] + " To " + trip_period[i][1])
	print("Period : " + trip_programDN[i])
	if trip_HasDC[i]:
		print("Price : " + trip_price[i][0] + " Discounted Price : " + trip_price[i][1])
	else:
		print("Price : " + trip_price[i])
	print("Available Seat : " + trip_seatAvailable[i])
	print("\n\n")
tour_desNum = "0"

for tag in soup.findAll('p'):
    if "onclick" in str(tag):
        regRet = re.search("\d+",str(tag))
        tour_desNum = regRet.group()
print tour_desNum

result = s.get("http://www.trueworldagency.com/viewer/program_tour.asp?seq="+tour_desNum).text
tourDes = BeautifulSoup(result, "lxml")
def assist(unicode_string):
    utf8 = unicode_string.encode('utf-8')
    read = utf8.decode('string_escape')

    return read   ## UTF-8 encoded string
#print tourDes
for tag in tourDes.findAll('p'):
    if "program" in str(tag):
        print tag.text
import io
encoding = 'utf-8'
for tag in tourDes.findAll('tr'):
    if "scope=\"row\"" in str(tag):
        testsave = assist(tag.text)
        with io.open("myfile.txt", 'w', encoding=encoding) as f:
        	f.write(unicode(testsave,'utf-8')