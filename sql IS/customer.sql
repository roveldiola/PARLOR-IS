CREATE TABLE customer (
	customer_id	int(10),
    first_name	varchar(50),
    middle_initial	varchar(50),
    last_name	varchar(50),
    contact_number	int(20),
    purok	varchar(50),
    barangay	varchar(50),
    city	varchar(50),
    zip_code	int(10),
    PRIMARY KEY (customer_id)
)