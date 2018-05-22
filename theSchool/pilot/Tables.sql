CREATE TABLE `administration` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `Image` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Image` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SELECT * FROM theschool.administration WHERE Name = 'Dovid' and Password = ''