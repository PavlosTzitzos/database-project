import string
import math
with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SERIAL_CODES_SQL.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l1 = count + 1

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SALESMAN SSN.txt", "r") as a2:
    for count, line in enumerate(a2):
        pass
l2 = count+1

a1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SERIAL_CODES_SQL.txt", "r")
a2 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SALESMAN SSN_SQL.txt", "r")

b1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DOC_SSN's.txt", "r+")
b2 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/PAT_SSN's.txt", "r+")
b3 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SERIAL_CODES.txt", "w")
b4 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SALESMAN SSN.txt", "w")

for i in range(201980062, 201980170):
    b1.write(str(i) + '\n')

for j in range(201979841, 201980060):
    b2.write(str(j) + '\n')


for i in range(0, l1):
    col1 = a1.readline().replace('\n', '')
    col1 = col1.replace('|', '')
    b3.write(col1.strip() + '\n')

for j in range(0, l2):
    col2 = a2.readline().replace('\n', '')
    col2 = col2.replace('|', '')
    b4.write(col2.strip() + '\n')

a1.close()
a2.close()
b1.close()
b2.close()
b3.close()
b4.close()
