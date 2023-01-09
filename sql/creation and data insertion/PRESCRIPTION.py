import random
import math
#insert data στο PRESCRIPTION

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l1 = count+1
a1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", "r")
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/PRESCRIPTION_INSERT.txt", "w")

b.write("#If you recreated this, remember to remove the last ',' in the file" + "\n" +
        "INSERT INTO SPRESCRIPTION"
        "(COMPANY_NAME, SERIAL_CODE, PATIENT_SSN, DISEASE_CODE, DATE_OF_PRESCRIPTION)"
        "VALUES( " + "\n")


for i in range(0, l1):
    d_col1 = a1.readline().replace('\n', ' ')
    for h in range(1, random.randint(1, 4)):
        DD = random.randint(1, 30)
        MM = random.randint(1, 12)
        YY = random.randint(1990, 2022)
        b.write("( '" + d_col1 + "', '" + str("NULL") + "', '" + str("NULL") + "', '" + str("NULL") + "', '"  + str(DD) + "'/'" + str(MM) + "'/'" + str(YY)+ "' )," +"\n")

b.write(');' + "\n")
a1.close()
b.close()

