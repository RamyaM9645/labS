l1=[]
l2=[]

def longest(words):
	l2=[]
	for word in words:
		l2.append((len(word),word))
	l2.sort()
	print("longest word :",l2[-1][1],"\n length:",len(l2[-1][1]))
n=int(input("enter the size of li:"))
print("enter the element of l1:")
for i in range(0,n):
	l1.append(input())
longest(l1)