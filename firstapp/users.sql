CREATE TABLE IF NOT EXISTS `users` (  
  `username` int(100) NOT NULL AUTO_INCREMENT,  
  `name` varchar(30) NOT NULL,
  `mobilenumber` int(10) NOT NULL, 
  `rollnumber` int(10) NOT NULL,  
  `emailid` varchar(30) NOT NULL,  
  `password` varchar(30) NOT NULL,   
   PRIMARY KEY (`username`)  
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;