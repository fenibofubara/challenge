/* Database schema for the signup challenge*/



/* Some stuffs are missing here.Check myrewi6_research.sql to see them */

CREATE TABLE `signup` (
`s/n` int(3) NOT NULL,
`name` varchar(30) NOT NULL,
`signed_up_prof` int(3) NOT NULL,
`Number_of_contents` int(4) NOT NULL,
`Phone` varchar(15) NOT NULL,
`Location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/* Dumping database of signup */

INSERT INTO `signup`(`s/n`,`name`,`signed_up_prof`,`Number_of_contents`,`Phone`,`Location`) VALUES ('1','fenibo fubara','100','3','07038850669','Port Harcourt City');