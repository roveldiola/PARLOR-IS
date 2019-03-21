CREATE TABLE salary (
	salary_id	int AUTO_INCREMENT,
	employee_number	int(10),
    salary_emp	decimal(10,2),
    time_stamp	timestamp,
    FOREIGN KEY (employee_number) REFERENCES employee(employee_number)
)