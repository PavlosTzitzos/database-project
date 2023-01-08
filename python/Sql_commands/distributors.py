import random 

a = open("C:/Users/user/Documents/python/Sql_commands/distributors.txt","r");

b = open("C:/Users/user/Documents/python/Sql_commands/distributors_insert.txt","w");


for i in range(0,110):
    d_points = random.randint(200,600);
    d_name = a.readline().replace('\n', '');
    d_C = random.randint(40,65);
    d_time = random.randint(1,31);
    d_range = random.randint(10,50);
    b.write("VALUES( '"+d_name+"' , "+str(d_points)+" , "+str(d_C)+" , "+str(d_time)+" , "+str(d_range)+" )\n" );

a.close();
b.close();
