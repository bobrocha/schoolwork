def main():
    collect_grades()

def collect_grades():
    grades = []

    grade = 0

    while grade != -1:
        grade = int( input("Please enter a grade or -1 if you are done: ") )
        grades.append( grade )
        print(grades)

        
        

main()
