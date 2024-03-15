
a = open("C:/Users/user/Documents/GitHub/Database-Project/python/Sql_commands/sql_no_question_mark.txt","r");

b = open("C:/Users/user/Documents/GitHub/Database-Project/python/Sql_commands/sql_insert_final.txt","w");

for i in range(0,500):
    line = a.readline().replace('\n','');
    b.write(line + "\nINSERT INTO DRUG\n");

