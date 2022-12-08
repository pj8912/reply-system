
create table posts(
	pid int auto_increment primary key not null,
	title varchar(255) not null,
	body text not null,
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp
);

create table comments(

	cid int auto_increment primary key not null,
	pid int not null,
	body text not null,
	created_at datetime default current_timestamp,
        updated_at datetime default current_timestamp

);


create table replies(
	tid int auto_increment primary key not null,
	cid int not null,
	body text not null,
	created_at datetime default current_timestamp,
        updated_at datetime default current_timestamp
);


