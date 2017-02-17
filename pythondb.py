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

x.execute("""INSERT INTO trip_trueworld VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)""",(1,1,1,1,1,1,time.strftime('%Y-%m-%d %H:%M:%S', a),time.strftime('%Y-%m-%d %H:%M:%S', a),1,1,1,1,1,1,1,1,1,1))
conn.commit()
conn.close()

for row in x.fetchall():
    print row[0]