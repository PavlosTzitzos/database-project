import random
import math
#insert data στο BUY

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l1 = count+1

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTOR.txt", "r") as a2:
    for count, line in enumerate(a2):
        pass
l2 = count + 1

a1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", "r")
a2 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTOR.txt", "r")
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/BUY INSERT.txt", "w")


b.write("#If you recreated this, remember to remove the last ',' in the file" + "\n" +
        "INSERT INTO BUY"
        "(COMPANY_NAME, DISTRIBUTOR_NAME)"
        "VALUES " + "\n")

Small = min((l1, l2))
pollaplotita = math.floor(max(l1, l2) / Small)

for i in range(0, Small):
    d_col1 = a1.readline().replace('\n', '')
    for j in range(0, pollaplotita):
        d_col2 = a2.readline().replace('\n', '')
        b.write("( '" + d_col1 + "', '" + d_col2 + "' ),\n")
b.write(';' + "\n")

a1.close()
a2.close()
b.close()

