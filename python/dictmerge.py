def Merge(dict1, dict2):
	return(dict2.update(dict1))

dict1={1:"apple",3:"orange"}
dict2={"red":"blue"}

print(Merge(dict1,dict2))
print(dict2)