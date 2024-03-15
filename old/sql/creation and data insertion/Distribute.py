import random
import math

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY_SERIAL_CODES.txt", "r") as a:
    for count, line in enumerate(a):
        pass
l1 = count + 1

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTOR.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l2 = count + 1

a = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY_SERIAL_CODES.txt", "r")
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTE INSERT.txt", "w")
a1 = open( "C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTOR.txt", 'r')

b.write("#If you recreated this, remember to remove the last ',' in the file" + "\n" +
        "INSERT INTO DISTRIBUTE"
        "(DISTRIBUTOR_NAME, COMPANY_NAME, SERIAL_CODE, DAYS_UNTIL_DELIVERY)"
        "VALUES " + "\n")

Small = min((l1, l2))
pollaplotita = math.floor(max(l1, l2) / Small)

for i in range(0, Small):
    col1 = a1.readline().replace('\n', '')
    for j in range(0, pollaplotita):
        # d_col2 = a2.readline().replace('\n', '')
        # DISTRIBUTOR_NAME
        col2 = a.readline().replace('\n', '')  # COMPANY_NAME and SERIAL_CODE
        col3 = str(random.randint(1, 30))
        b.write("( '" + col1 + "', " + col2 + ", '" + col3 + "' ),\n")
b.write(';' + "\n")

a.close()
a1.close()
b.close()
