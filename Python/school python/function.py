def calculate_tax_discount_rates( salary):
    tax_rate = 0.00
    discount_rate = 0.00

    if salary > 0 and salary <= 40000:
        tax_rate = .15
        #print(salary * tax_rate)
    elif salary > 40000 and salary <= 90000:
        tax_rate = .18
        #print(salary * tax_rate)
    elif salary > 90000 and salary <= 150000:
        tax_rate = .20
        discount_rate = .03
        #tax_amount = (salary * tax_rate)
        #discount = tax_amount * discount_rate
        #total = tax_amount - discount
        #print(total)
    else:
        tax_rate = .25
        #print(tax_rate * salary)

    return tax_rate, discount_rate



def calculate_tax_owed(tax, salary, discount):
    initial_tax_amt = salary * tax
    discount_amt = (salary * tax) * discount
    amt_tax_owed = inital_tax_amt - discount_amt
    return amt_tax_owed


salary = float(input("What was your salary? "))

tax_rate, discount_rate = calculate_tax_discount_rates(salary)

total = calculate_tax_owed( tax_rate, salary, discount_rate)
print("Amount of tax owed: ", total)

    #tax_amount = salary * tax_rate
    #discount = tax_amount * discount_rate
    #total = tax_amount - discount

#print(total)
