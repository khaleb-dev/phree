#-------Caleb Uche's Study file-------- 
#------Friday, 8 March, 2019 at CT Academy---------
#********self-taught*******

#this will print a string call inside the print() method.
print('Python, here I come!');

#this is a number.
total = 1+1;
print(total);

#this is a number which spans multiple lines using the backward slash.
calculate = 10-\
            5;
print (calculate);

#this is a string. python string goes inside quotes be it numbers or letters.
did_you_know = "Caleb is a programmer";
print(did_you_know);

#this is also a string.
h = "15+50";
print(h);

#this prints the variables into a string
#NOTE: the values of the variables must be in quotes before the can
#be treated as strings, else they will be treated as integers which will
#result in errors. This was a challenge to me.
first = "C";
second = "T";
third = "Academy";
print(first,second,third); #here printed variables are seperated.
#example two
first = "C";
second = "T";
third = "Academy";
allabove = first+second+third;
print(allabove); #here all are joined together.
#example three
first = "C";
second = "T";
third = "Academy";
allabove = first+second;
print(allabove,third); #this has being ;properly seperated
#Again, remember that strins go in quotes.

#this will print a string and a varible together.
plus = 15+5;
print('15 + 5 =',plus);

#This will give the error below because python does not support integers and strigs
#to be added that way like in JS. rather, make the integer a string.
#x = 10;
#y = 'a';    # I commented this example because python will stop compiling when it finds an error.
#z = x+y;
#print(z); #TypeError: unsupported operand type(s) for +: 'int' and 'str'
#this is better!
x = '10';
y = 'a';
z = x+y;
print(z);
