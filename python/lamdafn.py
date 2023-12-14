area=lambda l,b : l*b
#print('lambda function area of rectangle:',area(7,4))
l=int(input("enter length of rect : "))
b=int(input("enter breadth of rect : "))
print("area of rectangle is: ",area(l,b))

area2=lambda a: a*a
#print('area of square is:',area2(3))
a=int(input("enter the side of squre :"))
print("area of squre is : ",area2(a))


area3=lambda b,h: 1/2*(b*h)
#print('area of triangle is:',area3(2,4))
b=int(input("enter the base of triangle: "))
h=int(input("enter the height of triangle: "))
print("area of triangle is: ",area3(b,h))




