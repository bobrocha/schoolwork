def main():
    LETTERS = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']


    #get file name from user
    file_name = input('Enter file name to decrypt: ')

    # get keyword/password from user
    keyword = input('Enter valid keyword: ')

    def checkKeyword(keyword):
        # open mapping file
        mapping_file = open('map.txt', 'r')

        # read file and get keyword
        key = mapping_file.read()

        #close file
        mapping_file.close()

        # initiate counter
        count = 0

        # check for valid keyword
        while keyword != key:
            count += 1
            keyword = input('Enter valid keyword: ')
            if count == 2:
                print("You have tried 3 times to enter the keyword!")
                print("Exiting program")
                exit()
            
        #decrypt
        decrypt(file_name)


        

    def decrypt(file_name):
        # open text file for reading
        #file = open(file_name, 'r')
        file = open(file_name, 'r')

        # read file as string
        file_contents = file.read()

        # close file
        file.close()

        # remove all white space from string
        file_contents = file_contents.replace(' ', '')

        # convert all characters to upper case
        file_contents = file_contents.upper()

        # get length of alphabet to
        # deal with out of range problem
        length = len(LETTERS)

        # list to hold shifted values from loop
        decrypted = []

        for char in file_contents:
            # get the numerical position of the characters
            # to do the addition (shift)
            char_index = LETTERS.index(char)

            # shift the letter by 5
            # use modulos operator to handle
            # out of range/word wrapping
            shifted_char_index = (char_index - 5) % length

            # append/add it to the list above
            decrypted.append(LETTERS[shifted_char_index])


        decrypted = ''.join(decrypted)

        # write decryted message to file
        decrypt_file = open('decrypted_file.txt', 'w')
        decrypt_file.write(decrypted)
        decrypt_file.close()
        

        
    checkKeyword(keyword)
main()
