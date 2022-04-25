CREATE DATABASE survey;

use survey;

create table survivable
(
    id     int(11) auto_increment primary key,
    option varchar(10) not null,
    votes  int(11)     not null
);

insert into survivable(option, votes)
values ('c', 0);
insert into survivable(option, votes)
values ('c++', 0);
insert into survivable(option, votes)
values ('java', 0);
insert into survivable(option, votes)
values ('swift', 0);
insert into survivable(option, votes)
values ('python', 0);

# drop database survey;

select *
from survivable;

SELECT SUM(votes) AS votos FROM survivable;
