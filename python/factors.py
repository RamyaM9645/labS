a=int(input("enter a number:"))
temp=a
list=[]
for i in range(1,a+1):
	if(a%i ==0):
		list.append(i)
print("the factors of" , a , "are: ",list)