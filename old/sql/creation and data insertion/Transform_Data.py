with open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/ssn_s.txt", "r") as a:
    for count, line in enumerate(a):
        pass
l1 = count+1

a = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/ssn_s.txt", "r")
b = open("C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY_SERIAL_CODES.txt", 'w')

Company = "nothing"
def  search_str(file_path, word):
    with open(file_path, 'r') as file:
        # read all content of a file
        content = file.read()
        # check if string present in a file
        if word in content:
            return True
        else:
            return False


for i in range(0, l1):
    col1 = a.readline().replace('\n', '')
    check = search_str(r"C:/Users/thoma/OneDrive/Documents/Sxoli/Data_Bases/code_for_data_creation/COMPANY.txt", col1)
    if(check == True):
        Company = col1.strip()
    else :
        b.write("'" + Company + "', '" + col1 + "'\n")
a.close()
b.close()
