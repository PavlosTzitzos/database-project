import random

a = open("C:/Users/user/Documents/python/drugs/add_approval.txt","r");

b = open("C:/Users/user/Documents/python/drugs/drugs_insert.txt","w");

for i in range(500):
    line = a.readline().replace('\n', '');
    d_type = 'NULL';
    my_random_float = random.random()
    if my_random_float > .5:
        my_rand_int = 1
    else:
        my_rand_int = 0
    approval = my_rand_int;
    index = line.find(d_type+" , ");
    index = index + 7;
    count_l = 0;
    count_r = 0;
    right_part = "";
    left_part = "";
    for i in range(len(line)):
        if (i < index):
            left_part = line[0:i];
            count_l = count_l +1;
        elif (i > index) :
            right_part = line[index::];
            count_r = count_r +1;
    b.write(left_part+str(approval)+","+right_part+"\n");

a.close();
b.close();