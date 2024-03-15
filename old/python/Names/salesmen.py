import random

a = open("C:/Users/user/Documents/GitHub/Database-Project/python/Names/Salesmen.txt","r");

b = open("C:/Users/user/Documents/GitHub/Database-Project/python/Names/Salesmen_insert.txt","w");

#c = ['Bayer','GSK','Novartis','Sanofi','AstraZeneca','Roche','Novo Nordisk','Johnson n Johnson'];

sc1 = [202302558,202350691,202380166,202394530];#Bayer
sc2 = [202356165,202358408,202356589,202326810];#GSK
sc3 = [202376333,202360375,202362360,202365841];#Novartis
sc4 = [202380276,202395296,202324041,202396990];#Sanofi
sc5 = [202359493,202384850,202332549,202369742];#AstraZeneca
sc6 = [202389197,202316632,202370499,202319210];#Roche
sc7 = [202392928,202338322,202390850,202379496];#Novo Nordisk
sc8 = [202354645,202398077,202345985,202323137];#JnJ

for i in range(1,15):
        c = 'Johnson n Johnson';
        if(i < 4):
            sc = sc8[0];
        elif (i>= 4 & i< 8 ):
            sc = sc8[1];
        elif (i>= 8 & i< 12 ):
            sc = sc8[2];
        elif (i>=12  ):
            sc = sc8[3];
        s_ssn = 201800000 + random.randint(9999,99999);
        s_exp = random.randint(0,10);
        s_sal = random.randint(1200,2500);
        value = "VALUES( '"+a.readline().replace('\n','')+"' , "+str(s_ssn)+" , '"+c+"' , "+str(sc)+" , "+str(s_exp)+" , "+str(s_sal)+" )\n";
        b.write(value);
    #
    #
    #

#
