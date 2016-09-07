def main():

    evens = []


    nums = collect_numbers()

    for n in nums:
        if is_even( n ):
            evens.append( n )
    print( evens )

def collect_numbers():

    numbers = []

    done = False

    while not done:
        num = int( input("Enter in a number, enter -1 if done: ") )
        if num == -1:
            done = True
        else:
            numbers.append( num )

    return numbers

def is_even( number ):
    return ( number % 2 ) == 0
    #loop

#def display_numbers():

    

main()
