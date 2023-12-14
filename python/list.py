list1=[]
list2=[]

n=int(input("enter the size of list1: "))
m=int(input("enter the size of list2: "))

print("Enter ele of l1:")
for i in range(0,n):
    list1.append(int(input()))

print("Enter ele of l2:")
for i in range(0,m):
    list2.append(int(input()))

if len(list1) == len(list2):
    print("list are of same length")
else:
    print("list are of different length")

if sum(list1)==sum(list2):
    print("sum is same")
else:
    print("sum is different")

for x in list1:
    if x in list2:
                    print("value occur in both")
                    exit()
    else:
                    print("value doesnot occur in both")
                    exit()
    