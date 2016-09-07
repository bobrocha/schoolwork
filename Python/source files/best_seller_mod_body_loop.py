#INPUT

#1 candy name
#2 price per pound
#3 numbers sold



#PROCESS

#1 determine if is best seller
#2 if candy is best seller (2000 pounds per month)

#OUTPUT
#display item data

redo = False


    
def main():
    isValid = False
    while not isValid:
        candy = input("Please enter candy. Either Hersheys, Snickers or MilkyWay\n")
        if not isValidInput(candy):
            print("Sorry, Invalid Input")
            #exit(0)
        else:
            isValid = True


    price_per_pund = float(input("Enter price per pound"))
    amt_sold = float(input("Enter amt Sold"))
                        
     
    if isBestSeller(amt_sold):
        print('This is a best Seller')
    else:
        print('Not a best seller, try harder')
            

def isValidInput(candySelection):

            
    if candySelection == 'Hersheys' or candySelection == 'Snickers' or candySelection == 'MilkyWay':
        return True
    else:
        return False
        
def isBestSeller(amtSold):
    return amtSold > 2000
       

main()

while not redo:
    choice = input("Please enter y or n to continue")
    if choice == "y":
        main()
    elif choice == "n":
        exit(0)
    
