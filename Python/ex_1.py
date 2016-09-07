# This list attempts to emulate a database
# of records, columns and rows of books
# in a library. Entries [0] is the isbn,
# [1] book title, and [3] avialability

books = [[879465213, "Snow White", "available"],
        [321456987, "Cinderella", "not-available"],
         [852741963, "Fantasia", "available"],
         [963852741, "Dumbo", "not-available"]]

ROWS = 4
COLUMNS = 3
ISBN_SEARCH = -1
TITLE_SEARCH = 2
QUIT = 3

def getNumber(high, low):
    card_number = 0
    while card_number > high or card_number < low:
        card_number = int(input("Please enter a valid library card number: "))
    return card_number

def getCharacter():
    char = input("Please enter an option: ")
    return char


def lookUpISBN(title):
    for row in range(ROWS):
        for column in range(COLUMNS):
            if title in books[row]:
                return books[row][0]
    return 0

def lookUpTitle(isbn):
    for row in range(ROWS):
        for column in range(COLUMNS):
            if int(isbn) in books[row]:
                return books[row][1]
    return "none"




def isBookAvailable(isbn):
    for row in range(ROWS):
        for column in range(COLUMNS):
            if int(isbn) in books[row]:
                if books[row][2] == "available":
                    return "Y"
                else:
                    return "N"



def get_library_card():
    return getNumber(9999, 1000)

#library_card = get_library_card()


def display_options():
    print("      OPTIONS")
    print("-1)Search by ISBN")
    print(" 2)Search by Title")
    print(" 3)Quit")

def confirm_title(title):
    print("Is '", title, "' correct?", sep='')
    confirmation = input("Y = yes N = no: ")
    return confirmation

def search_by_isbn(isbn):
    while isbn == "none":
        # get isbn
        isbn = int(input("Enter ISBN: "))
        # lookup title by isbn
        title = lookUpTitle(isbn)
        if title == "none":
            print("Invalid isbn, please try again!")
            isbn = "none"
        else:
            # confirm title
            confirmation = confirm_title(title)
            if confirmation == "Y" or confirmation == "y":
                #check availability
                if isBookAvailable(isbn) == "Y":
                    print("'", title, "'", " is available", sep='')
                else:
                    print("'", title, "'", "is not available", sep='')
            else:
                isbn = "none"

def search_by_title(title):
    while title == 0:
        #get title
        title = input("Enter title: ")
        #lookup isbn by title
        isbn = int(lookUpISBN(title))
        if isbn == 0:
            print("Book not found, please try again!")
            title = 0
        else:
            #check availability
            if isBookAvailable(isbn) == "Y":
                print("'", title, "'", "is available", sep='')
            else:
                print("'", title, "'", "is not available", sep='')
    
def search():
    option = 0
    while option != QUIT:
        display_options()
        option = int(getCharacter())
        if option == ISBN_SEARCH:
            search_by_isbn("none")
        elif option == TITLE_SEARCH:
            search_by_title(0)
        elif option == QUIT:
            print("Goodbye!")
        else:
            print("Invalid option")


def main():
    library_card = get_library_card()
    search()
    

main()

            




