
import random

a = open("C:/Users/user/Documents/python/Sql_commands/Doctors.txt","r");

b = open("C:/Users/user/Documents/python/Sql_commands/Doctors_insert.txt","w");

c = open("C:/Users/user/Documents/python/Sql_commands/doctor_specialties_2.txt","r");

for i in range(110):
    n = 201980170 - i;
    d_name = a.readline().replace('\n', '');
    spec = c.readline().replace('\n','');
    age = random.randint(40,65);
    experience = random.randint(0,50);
    b.write("VALUE( "+str(n)+" , "+d_name+" , "+str(age)+" , "+str(experience)+" , "+spec+" )\n" );

a.close();
b.close();
