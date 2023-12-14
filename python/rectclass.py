class rectangle:
    def __init__(self,length,breadth):
        self.length=length
        self.breadth=breadth
        
    def area(self):
        return self.breadth*self.breadth
    
    def perimeter(self):
        return 2 * (self.length + self.breadth)
            
    def compare_area(self,other_rectangle):
        area1=self.area()
        area2=other_rectangle.area()
        
        if  area1>area2:
            return "rectangle1 is larger"
        if area1<area2:
            return "reactangle2 is larger"

rectangle1=rectangle(5,6)
rectangle2=rectangle(3,9)

print("area of rectangle1 ",rectangle1.area())
print("perimeter of rectangle1 ",rectangle1.perimeter())

print("area of rectangle2 ",rectangle2.area())
print("perimeter of rectangle2 ",rectangle2.perimeter())


            
comparison_result=rectangle1.compare_area(rectangle2)
print(comparison_result) 
            
        
