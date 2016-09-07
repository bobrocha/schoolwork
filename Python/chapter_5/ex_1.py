# By: Francisco Roberto Rocha
# student id: 2298769
def main():
    get_rating()

def get_rating():
    keep_going = "y"
    rating = 0
    reviewers = 0
    while keep_going == "y" or keep_going == "Y":
        rating += isValidRating()
        reviewers += 1
        keep_going = input("Enter y to continue rating or anything else to stop: ")
    average = calc_average_rating( rating, reviewers )
    print( "The average movie rating is:", average )
    

def isValidRating():
    rating = int( input("Enter a number between 0 - 4 for the rating: ") )
    while rating < 0 or rating > 4:
        print("Out of range.")
        rating = int( input("Enter a number between 0 - 4 for the rating: ") )
    return rating

def calc_average_rating(rating, reviewers):
    avg = format( rating / reviewers, ',.2f' )
    return avg


main()
