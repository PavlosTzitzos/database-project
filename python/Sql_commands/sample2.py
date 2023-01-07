import random
names = open("C:/Users/user/Documents/python/Sql_commands/Salesmen.txt", "r");

p = open("C:/Users/user/Documents/python/Sql_commands/salesmen_inserts.txt", "w");

for i in range(10,20,1):
    a = 201980170 + i;
    n = random.randint(1500,2500);
    years_of_exp = random.randint(0,25);
    p.write( "\nINSERT INTO SALESMAN\n"+"VALUE("+names.readline().replace('\n','')+","+str(a)+",pfizer"+",NULL,"+str(years_of_exp)+","+str(n)+")"+"\n");
    #if(i == "Doctors:"):
    #    break;

