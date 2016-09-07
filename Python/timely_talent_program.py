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
        hourly_rate = record[4]
        # add the employee id to employee data list
        employee_data_list.append(emp_id)
        employee_data_list.append(hourly_rate)
        
        # the file pointer must be reset so that there is no 'nothing else to read'
        transaction.seek(0)
        for line in transaction:
            #split the line
            record = line.split(',')
            #get id from file record and store in variable
            inner_id = record[3]
            #check for match
            if emp_id == inner_id:
                employee_data_list.append(record[0])# job number
                employee_data_list.append(record[4])# hours worked
        
               
                

        master_list.append(employee_data_list)
        
            

        
    for emp_id,pay_rate,job_num1,hours_worked1,job_num2,hours_worked2,job_num3,hours_worked3,job_num4,hours_worked4,job_num5,hours_worked5 in master_list:
        print('Job Number:', job_num1, '|Employee Id:', emp_id, '|Hours Worked:', hours_worked1.rstrip('\n'), '|Hourly Rate:', pay_rate.rstrip('\n'), '|Gross Pay:$', float(pay_rate) * float(hours_worked1))
        print('Job Number:', job_num2, '|Employee Id:', emp_id, '|Hours Worked:', hours_worked2.rstrip('\n'), '|Hourly Rate:', pay_rate.rstrip('\n'), '|Gross Pay:$', float(pay_rate) * float(hours_worked2))
        print('Job Number:', job_num3, '|Employee Id:', emp_id, '|Hours Worked:', hours_worked3.rstrip('\n'), '|Hourly Rate:', pay_rate.rstrip('\n'), '|Gross Pay:$', float(pay_rate) * float(hours_worked3))
        print('Job Number:', job_num4, '|Employee Id:', emp_id, '|Hours Worked:', hours_worked4.rstrip('\n'), '|Hourly Rate:', pay_rate.rstrip('\n'), '|Gross Pay:$', float(pay_rate) * float(hours_worked4))
        print('Job Number:', job_num5, '|Employee Id:', emp_id, '|Hours Worked:', hours_worked5.rstrip('\n'), '|Hourly Rate:', pay_rate.rstrip('\n'), '|Gross Pay:$', float(pay_rate) * float(hours_worked5))

    accumulator = 0
    for row in master_list:
        pay_rate = int(row[1])
        hours_worked1 = int(row[3])
        hours_worked2 = int(row[5])
        hours_worked3 = int(row[7])
        hours_worked4 = int(row[9])
        hours_worked5 = int(row[11])
        total_hours = hours_worked1 + hours_worked2 + hours_worked3 + hours_worked4 + hours_worked5
        gross_pay = total_hours * pay_rate
        accumulator += gross_pay

    print("Total gross pay to all employees: $", float(accumulator))
    master.close()
    transaction.close()

main()
