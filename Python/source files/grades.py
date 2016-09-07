# Average of grades

##grades = [22, 45, 55, 85, 93, 100, 100, 100]
##
##total = 0
##for n in grades:
##    total += n
##    print( total )
##
##length = len(grades)
##
##avg = total / length
##
##print( avg )


def main():
    the_grades = collect_grades()

    avg = calc_grades_average( the_grades )

    grade = calc_letter_grade( avg )

    print("The average is: " + str(format(avg)) + " and the letter grade is: " + grade)


def collect_grades():

    grades = []

    done = False
    while not done :
        grade = float(input("Please enter a grade, enter -1 if you are done: "))
        if grade == -1:
            done = True
        else:
            grades.append( grade )

    return grades


def calc_grades_average( grades ):

    total = 0
    
    for n in grades:
        total += n
    
    return total / len( grades )

def calc_letter_grade( avg ):
    
    letter_grade = 'A'
    
    if avg < 60:
        letter_grade = 'F'
    elif avg >= 60 and avg < 70:
        letter_grade = 'D'
    elif avg >= 70 and avg < 80:
        letter_grade = 'C'
    elif avg >= 80 and avg < 90:
        letter_grade = 'B'
    else:
        letter_grade = 'A'
    return letter_grade

main()


