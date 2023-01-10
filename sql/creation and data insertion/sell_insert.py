import random
import math
#insert data στο BUY

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/City_Addr.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l1 = count+1


with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTOR.txt", "r") as a2:
    for count, line in enumerate(a2):
        pass
l2 = count + 1
a1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/City_Addr.txt", "r")
a2 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/DISTRIBUTOR.txt", "r")
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/SELL INSERT.txt", "w")


Small = min((l1, l2))
pollaplotita = math.floor(max(l1, l2) / Small)


b.write("#If you recreated this, remember to remove the last ',' in the file" + "\n" +
        "INSERT INTO SELL"
        "(CITY, ADDRESS, DISTRIBUTOR_NAME)"
        "VALUES " + "\n")

for i in range(0, Small):
    d_col2 = a2.readline().replace('\n', '')
    for j in range(0, pollaplotita):
        d_col1 = a1.readline().replace('\n', '')
        d_col1 = d_col1.replace('[', '')
        d_col1 = d_col1.replace(']', '')
        b.write("( " + d_col1 + ", '" + d_col2 + "' )," + "\n")
b.write(';' + "\n")

a1.close()
a2.close()
b.close()

