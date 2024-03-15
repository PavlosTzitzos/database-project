import random

a = open("C:/Users/user/Documents/python/Names/Patients.txt","r");

b = open("C:/Users/user/Documents/python/Names/Patients_insert.txt","w");

# import module
import random as r
  
ph_no = []
  
# the first number should be in the range of 6 to 9
ph_no.append(r.randint(6, 9))
  
# the for loop is used to append the other 9 numbers.
# the other 9 numbers can be in the range of 0 to 9.
for i in range(1, 10):
    ph_no.append(r.randint(0, 9))
  
# printing the number
#for i in ph_no:
#    print(i, end="")


for i in range(221):
    p_ssn = 201980060 - i;
    p_name = a.readline().replace('\n', '');
    p_age = random.randint(10,100);
    if (i < 111):
        p_gender = 1;
    else:
        p_gender = 0;
    ph_no = [];
    ph_no.append(r.randint(6, 9))
    for i in range(1, 10):
        ph_no.append(r.randint(0, 9));
    p_phnum = int("".join(map(str, ph_no)));
    b.write("VALUES( "+str(p_ssn)+" , '"+p_name+"' , "+str(p_age)+" , "+str(p_gender)+" , "+str(p_phnum)+" )\n" );

a.close();
b.close();
