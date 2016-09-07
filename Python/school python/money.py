tax_rate = 0.00
discount_rate = 0.00

salary = float(input("What was last years salary "))

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



tax_amount = salary * tax_rate
discount = tax_amount * discount_rate
total = tax_amount - discount

print(total)
