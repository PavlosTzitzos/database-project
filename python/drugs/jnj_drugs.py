import random

a = open("C:/Users/user/Documents/python/drugs/JnJ_drugs.txt","r");

b = open("C:/Users/user/Documents/python/drugs/JnJ_insert.txt","w");

for i in range(68):
    sc = random.randint(202300000,202399999);
    c_name = 'Johnson n Johnson';
    d_name = a.readline().replace('\n', '');
    d_type = 'NULL';
    approval = random.randint(0,1);
    price = random.randint(10,1000);
    b.write("VALUES( "+str(sc)+" , '"+c_name+"' , '"+d_name+"' , "+d_type+" , "+str(approval)+str(price)+" )\n" );

a.close();
b.close();
