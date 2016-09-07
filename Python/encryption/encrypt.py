def main():
    LETTERS = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']


    # get file name from user
    file_name = input('Enter file name to encrypt: ')

    # get keyword
    keyword = input('Enter keyword: ')


    def encrypt(file_name):

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
        encrypted = []

        for char in file_contents:
            # get the numerical position of the characters
            # to do the addition (shift)
            char_index = LETTERS.index(char)

            # shift the letter by 5
            # use modulos operator to handle
            # out of range/word wrapping
            shifted_char_index = (char_index + 5) % length

            # append/add it to the list above
            encrypted.append(LETTERS[shifted_char_index])


        encrypted = ''.join(encrypted)

        # write encryted message to file
        encrypt_file = open('encrypted_file.txt', 'w')
        encrypt_file.write(encrypted)
        encrypt_file.close()




    def map_it(keyword):
        # write keyword to another file

        mapping_file = open('map.txt', 'w')
        mapping_file.write(keyword)
        mapping_file.close()


    encrypt(file_name)
    map_it(keyword)
main()
