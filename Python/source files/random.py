import random
random_num = random.randint(1,10)

guess = int(input("Please enter a number between 1 and 10. "))

if random_num == guess:
    print("Congrats!")
elif guess > random_num:
    print("Your number is too high.")
else:
    print("Sorry, wrong answer.")


