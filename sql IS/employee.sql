CREATE TABLE employee (
	employee_number	int(10),
	first_name	varchar(50),
	middle_initial	varchar(50),
	last_name	varchar(50),
	job_number	int(11),
    PRIMARY KEY (employee_number),
    FOREIGN KEY (job_number) REFERENCES job(job_number)
)