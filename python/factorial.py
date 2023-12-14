a=int(input("enter a number:"))
b=a
fact=1
while(a>0):
	fact=fact*a
	a-=1
print("factorial of",b, "is" ,fact)