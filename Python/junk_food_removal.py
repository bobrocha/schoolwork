# this program replaces unhealthy food with healthy food

# list of unhealthy food
food = ['burgers', 'hotdogs', 'pizza']

# print the unhealthy food to show available options
print("Here is the list of unhealthy food: ", food)

# user enters what item he wants removed from the list
unhealthy_item = input("Which item do you want to replace?:")

# search the list for the entered item
# and get the index of the unhealthy item for later replacement
# note: if the entered item does not exist
# the program will show an error, this should
# be handled with "exceptions" chapter 7
unhealthy_item_index = food.index(unhealthy_item)

# get the new item that will replace the unhealthy item
healthy_item = input("Enter a healthy food that will replace the unhealthy one:")

# replace the unhealthy with the healthy
food[unhealthy_item_index] = healthy_item

# show new modified list of food
print("Here is the updated list: ", food)




