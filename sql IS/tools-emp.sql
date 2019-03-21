CREATE TABLE tools_emp (
	id 	int AUTO_INCREMENT,
	employee_number	int(10),
    id_item	int(10),
    quantity	int(10),
    time_stamp	timestamp CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_number) REFERENCES employee(employee_number),
    FOREIGN KEY (id_item) REFERENCES tools_item(id_item)
)