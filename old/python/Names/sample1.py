
# Online Python - IDE, Editor, Compiler, Interpreter
import random
#MN = [1,2,3,4,5]
MN = open("C:/Users/user/Documents/python/Names/MenNames.txt", "r");
#WN = [6,7,8,9,10]#
WN = open("C:/Users/user/Documents/python/Names/WomenNames.txt", "r");
#LN = [11,12,13,14,15]
LN = open("C:/Users/user/Documents/python/Names/v2.txt", "r");

#P = [16,17,18,19,20]
D1 = open("C:/Users/user/Documents/python/Names/Salesmen.txt",'w', encoding="utf-8");
#D = open("C:\Users\user\Desktop\Doctors.txt", 'w', encoding="utf-8");
#S = open("C:\Users\user\Desktop\Salesmen.txt", 'w', encoding="utf-8");
#l = len(MN);
for i in range(110):
    #n = random.randint(0,4);
    n = random.randint(500,1000);
    #man_name = MN[i];
    man_name = MN.readline().replace('\n','');
    #woman_name = WN[i];
    woman_name = WN.readline().replace('\n','');
    #last_name = LN[n];
    last_name = LN.readline().replace('\n','');
    #P[i] = man_name + last_name;
    D1.write(woman_name + " " + last_name + "\n");
# end for
MN.close();
WN.close();
LN.close();
