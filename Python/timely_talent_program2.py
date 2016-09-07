##master_file = open('master.txt', 'r')
##
##for line in master_file:
##   record = line.split(',')
##   employee_id = record[0]
##   hourly_rate = record[4]
##   print(employee_id, hourly_rate)
##
##master_file.close()
##
##
##transaction_file = open('daily_transactions.txt', 'r')
##
##for line in transaction_file:
##    record = line.split(',')
##    job_number = record[0]
##    hours_worked = record[4]
##    print(job_number, hours_worked)
##    
##transaction_file.close()

def main():

    master_list = []
    master = open('master.txt', 'r')
    transaction = open('daily_transactions.txt', 'r')

    for line in master:
        employee_data_list = []

        # split the line
        record = line.split(',')
        #get id from file record and store in variable
        emp_id = record[0]
        # add the employee id to employee data list
        employee_data_list.append(emp_id)
        print(employee_data_list)
        
        # the file pointer must be reset so that there is no 'nothing else to read'
        transaction.seek(0)
        for line in transaction:
            #split the line
            record = line.split(',')
            #get id from file record and store in variable
            inner_id = record[3]
            print(inner_id)
            #check for match
            if emp_id == inner_id:
                employee_data_list.append(record[0])
                employee_data_list.append(record[4])
                
                

        #print(employee_data_list)
        


main()
