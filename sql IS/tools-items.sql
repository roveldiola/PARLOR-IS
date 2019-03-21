CREATE TABLE tools_item (
	id_item	int(10),
	time_stamp	timestamp CURRENT_TIMESTAMP,
    description	varchar(50),
    amount	decimal(10,2),
    quintity	int(10),
    unit	int(10),
    PRIMARY KEY (id_item)
)