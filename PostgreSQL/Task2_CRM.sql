-- Database: CRM

-- DROP DATABASE IF EXISTS "CRM";

CREATE DATABASE "CRM"
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_United States.1252'
    LC_CTYPE = 'English_United States.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
	
	
	
	create table person(
	person_id int primary key,
	first_name varchar(25) not null,
	last_name varchar(25) not null,
	gender char(1) not null,	
	date_of_birth date,
	email varchar(32),
	contact_no bigint not null,
    address  varchar(35) 
	);
	
	
	 select * from person;
	
	create table lead(
	lead_id int primary key,
	created_at date not null,
	person_id int references person(person_id)
	);
	
	select * from lead;
	
	create table plan(
	plan_id int primary key,
	plan_name varchar(20) not null,	
	plan_validity varchar(30) not null,
	plan_data varchar(20) not null,
	plan_price char(15) not null 
	);
	
	
	select * from plan;
	
	create table opportunity(
	opportunity_id int primary key,
	created_at date not null,
	emp_id int , 
	lead_id int references lead(lead_id),
	plan_id int references plan(plan_id)
	);
	
	
	select * from opportunity;
	
	create table customer(
	customer_id int primary key,
	cust_username varchar(25) not null,
	cust_password varchar(25) not null,
	ac_details varchar(20) not null,
	opportunity_id int references opportunity(opportunity_id),
	plan_id int references plan(plan_id)
	);
	
	select * from customer;
	
	create table employee(
	emp_id int primary key,
	designation varchar(30) not null,
	person_id int references person(person_id),
	customer_id int references customer(customer_id)
	);
	
	select * from employee;
	
	create table task(
	task_id int primary key,
	task_name varchar(25) not null,
	task_desc varchar(25) not null,
	task_status varchar(20) not null,
	start_date date,
	expected_end_date date,
	actual_end_date date,
	assigned_by varchar(25) not null,
	module_id int not null,
	module_name varchar(20),
	emp_id int references employee(emp_id)
	);


   
	select * from task;
	
	
	
	
--INSERT INTO PERSON 


	insert into person (person_id,first_name,last_name,gender,date_of_birth,email,contact_no,address)
	values( 1, 'Amir' , 'Shaikh', 'M', '1997-11-08','amir@gmail.com', 9284840608, 'solapur'), 
	( 2, 'Sameer' , 'Shaikh', 'M', '1991-11-15','sameer@gmail.com', 8087407806 , 'solapur'), 
	( 3, 'Mayur' , 'chakole', 'M', '1993-01-21','mayur@gmail.com', 7865389722 , 'Andra Pradesh'),
	( 4, 'Varunika' , 'palshetty', 'F', '1997-02-16','palshetty@gmail.com', 8364536453, 'Nagpur') ,
	( 5, 'Amitesh' , 'Kumar', 'M', '1999-01-05','amitesh@gmail.com', 9283746564 , 'pune') ,
	( 6, 'sanket' , 'warkade', 'M', '1999-08-10','sanket@gmail.com', 9998388386 , 'Patna') ,
	( 7, 'yash' , 'deshmukh', 'M', '1993-01-20','yash@gmail.com', 9287374658 , 'nagpur') ,
	( 8, 'Aman' , 'kumar', 'M', '1997-02-22','aman@gmail.com', 9283745345 , 'bihar') ,
	( 9, 'Brinda' , 'chanchad', 'F', '2000-07-25','brinda@gmail.com', 9283745231 , 'gujrat') ,
	( 10, 'Shubangi' , 'pangare', 'F', '2002-12-31','shubangi@gmail.com', 9998128838 , 'pune');

Select * from person;




--INSERT INTO LEAD


insert into lead ( lead_id,created_at,person_id)values (1,'2021-10-31', 3 ),
(2,'2021-11-15', 4 ),
(3,'2021-09-17', 5 ),	
(4,'2021-08-09', 6 ),
(5,'2021-12-3', 7 ),
(6,'2021-07-22', 8 );

--INSERT INTO PLAN
insert into plan (plan_id,plan_name,plan_validity,plan_data,plan_price) values(1, '50Mbps', '1 month', '180GB' , 399 ),
(2, '100Mbps', '3 months', 'unlimited' , 399 ),
(3, '20Mbps', '6 months', '900GB' , 699 ),
(4, '200Mbps', '12 month', '12180GB' , 15999 ),
(5, '150Mbps', '9 month', '6000GB' , 9999 );


--INSERT INTO OPPORTUNITY 
	insert into opportunity(opportunity_id,created_at,emp_id,lead_id) values (1, '2021-09-20', 3, 2),
	(2, '2021-08-15', 4, 1),
	(3, '2021-12-10', 5, 4),
	(4, '2021-07-25', 6, 5);
	

--INSERT INTO CUSTOMER
insert into customer values (1, 'Sameer123' , '12345', '1102928182', 3, 4 );
insert into customer values (2, 'Sumant456' , '123456', '1102998828', 4, 5 );



--INSERT INTO EMPLOYEE

insert into employee (emp_id,designation,person_id,customer_id ) values(1, 'Asstt Officer', 1, 2),
                           (2, 'Engineer', 2, 1);

--INSERT INTO TASK 
	
	insert into task(task_id,task_name,task_desc,task_status,start_date,expected_end_date,actual_end_date,assigned_by,module_id,module_name,emp_id) 
	values(1, 'Installation', 'Installing new broadband','completed', '2021-07-26' ,'2021-08-30','2021-09-01', 'admin1', 011, 'INSTALL', '1');				
