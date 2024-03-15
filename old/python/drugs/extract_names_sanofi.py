


a = open("C:/Users/user/Documents/python/drugs/sanofi_drugs_1.txt","r");

b = open("C:/Users/user/Documents/python/drugs/sanofi_drugs.txt","w");
for i in range(223):
    line = a.readline();
    if("Drug class:" in line):
        b.write(a.readline());





