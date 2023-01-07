
a = open("C:/Users/user/Documents/python/drugs/roche_1.txt","r");

b = open("C:/Users/user/Documents/python/drugs/roche_drugs.txt","w");
for i in range(402):
    line = a.readline();
    if("SmPC" in line):
        temp = a.readline();
        temp2 = a.readline();
        if ("Risk Materials" in temp2):
            b.write(a.readline());
        else:
            b.write(temp2);
