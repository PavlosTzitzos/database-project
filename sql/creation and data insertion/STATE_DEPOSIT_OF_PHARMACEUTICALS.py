import random
import numpy
import math
#insert data στο SDOP

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/STATE_DEPOSIT_OF_PHARMACEUTICALS/ADDRESSES.txt", "r") as a2:
    for count, line in enumerate(a2):
        pass
l1 = count+1

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/STATE_DEPOSIT_OF_PHARMACEUTICALS/Cities.txt", "r") as a1:
    for count, line in enumerate(a1):
        pass
l2 = count + 1
a2 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/STATE_DEPOSIT_OF_PHARMACEUTICALS/ADDRESSES.txt", "r")
a1 = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/STATE_DEPOSIT_OF_PHARMACEUTICALS/Cities.txt", "r")
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/STATE_DEPOSIT_OF_PHARMACEUTICALS/SDOP_INSERT.txt", "w")
store = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/City_Addr.txt", "w")


Small = min(l1, l2)
Big   = max(l1, l2)
pollaplotita = math.floor(Big / Small)

b.write("#If you recreated this, remember to remove the last ',' in the file" + "\n" +
        "INSERT INTO STATE_DEPOSIT_OF_PHARMACEUTICALS"
        "(CITY, SDOP_RANGE, SDOP_CAPACITY, ADDRESS, SDOP_DELIVERY_TIME)"
        "VALUES " + "\n")


A = [[0 for col in range(2)] for row in range(Big)]
counter = 0
for i in range(0, Small):
    d_col1 = a1.readline().replace('\n', '')
    for j in range(0, pollaplotita):
        counter = counter +1
        d_col2 = a2.readline().replace('\n', '')
        Range = random.randint(0, 80)
        cap = random.randint(100, 100000)
        del_time = random.randint(1, 14)
        str_number = random.randint(1, 150)
        addr = d_col2 + str(str_number)
        A[counter] = [d_col1, addr]
        b.write("( '" + d_col1 + "', '" + str(Range) + "', '" + str(cap) + "', '" + addr + "', '" + str(del_time) + "' )," +"\n")
b.write(';' + "\n")
for i in range (0,Big):
    store.write(str(A[i]) + "\n")

a1.close()
a2.close()
b.close()
store.close()

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/City_Addr.txt", 'r') as fin:
    data = fin.read().splitlines(True)

with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/City_Addr.txt", 'w') as fout:
    fout.writelines(data[1:])
