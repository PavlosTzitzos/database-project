import random
import math
#insert data στο PRESCRIPTION

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l1 = count+1

a1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", "r")
a2 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SERIAL_CODES.txt", 'r')
a3 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/PAT_SSN's.txt", 'r')
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/PRESCRIPTION_INSERT.txt", "w")


b.write("#If you recreated this, remember to remove the last ',' in the file" + "\n" +
        "INSERT INTO PRESCRIPTION"
        "(COMPANY_NAME, SERIAL_CODE, PATIENT_SSN, DISEASE_CODE, DATE_OF_PRESCRIPTION)"
        "VALUES " + "\n")


for i in range(0, l1):
    col1 = a1.readline().replace('\n', '')
    for j in range(1, random.randint(1, 5)):
        DD = random.randint(1, 30)
        MM = random.randint(1, 12)
        YY = random.randint(1990, 2022)
        for k in range(1, random.randint(1, 5)):
            col3 = a3.readline().replace('\n', '')
            for h in range(1, random.randint(1, 5)):
                col2 = a2.readline().replace('\n', '')
                b.write("( '" + col1 + "', '" + col2 + "', '" + col3 + "', " + str("NULL") + ", '" + str(YY) + "/" + str(MM) + "/" + str(DD) + "' )," +"\n")

b.write(';' + "\n")
a1.close()
a2.close()
a3.close()
b.close()

