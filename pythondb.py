import MySQLdb
import time
a = time.strptime('24-1-2016', "%d-%m-%Y")
conn = MySQLdb.connect(host= "localhost",
                  user="dwatravel",
                  passwd="ni00065996",
                  db="trueworld_DB")
x = conn.cursor()

query = "INSERT INTO trip_trueworld " \
            "VALUES(%s,%s,%s,%s,%s,%d,%s,%s,%d,%d,%d,%d,%d,%d,%d,%d,%d,%s)"
args = ("test","test","test","test","test",1,"20-1-2016","24-1-2016",1,1,1,1,1,1,1,1,1,"test")

x.execute ("UPDATE trip_trueworld SET seat_available=%s WHERE booking_key=%s",(1232,'1gnb1901'))

conn.commit()
conn.close()
