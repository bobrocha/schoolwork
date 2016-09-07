num_days = 5

def main():
    # create a list to hold the sales
    # for each day
    sales = [0] * num_days

    # create the index
    index = 0

    print("Enter the sales for each day.")

    # Get the sales data for each day.
    while index < num_days:
        print("Day #", index + 1, ":", sep="", end="")
        sales[index] = float(input())
        index += 1

    # display the values entered
    print("Here are the values you entered:")
    for value in sales:
        print(value)

main()
