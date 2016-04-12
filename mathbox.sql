/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : mathbox

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-03-08 06:59:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_login
-- ----------------------------
DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `ID` int(10) NOT NULL DEFAULT '0',
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Middlename` varchar(3) DEFAULT NULL,
  `Username` varchar(10) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Images` varchar(100) DEFAULT NULL,
  `ContactNumber` varchar(11) DEFAULT NULL,
  `EmailAddress` varchar(220) DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Active` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_login
-- ----------------------------
INSERT INTO `admin_login` VALUES ('820120272', 'sonia', 'perez', 'del', 'sonia123', 'perez123', null, '09134214215', 'soniaperez@yahoo.com', '1960-06-12', '1');

-- ----------------------------
-- Table structure for student_login
-- ----------------------------
DROP TABLE IF EXISTS `student_login`;
CREATE TABLE `student_login` (
  `StudentID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL DEFAULT '',
  `Password` varchar(20) DEFAULT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Middlename` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `EmailAddress` varchar(20) DEFAULT NULL,
  `ContactNumber` int(11) DEFAULT NULL,
  `Birthdate` datetime DEFAULT NULL,
  `Images` varchar(100) DEFAULT NULL,
  `Confirm` int(2) DEFAULT NULL,
  `Prof` varchar(50) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Active` int(5) DEFAULT NULL,
  PRIMARY KEY (`StudentID`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student_login
-- ----------------------------
INSERT INTO `student_login` VALUES ('3', 'stanley', 'student', 'Stanley', 'Padua', 'Obin', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('4', 'mark', 'student', 'Mark Joshua Angelo', 'Cruz', 'Ramirez', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('5', 'marvin', 'student', 'Marvin', 'Aquino', 'Rodriguez', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('7', 'marcus', 'student', 'Marcus', 'David', 'Tapispisan', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('8', 'carlo', 'student', 'Carlo Juoaquin', 'Dela Cruz', 'Temonerra', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('9', 'janine', 'student', 'Janine Karull', 'Quintos', 'Baguio', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('10', 'daniella', 'student', 'Danielle Betina', 'Bosi', 'Mandapat', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('12', 'juliana', 'student', 'Juliana Celine', 'Cacho', 'Enguerro', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('13', 'angela', 'student', 'Angela', 'Dela Cruz', 'Fernando', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('14', 'kristelann', 'student', 'Kristel Ann', 'Banaria', 'Galicia', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('15', 'jamie', 'student', 'Jamie', 'Castillo', 'Lacsa', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('16', 'alyssa', 'student', 'Alyssa', 'Bereber', 'Layag', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('17', 'daniella', 'student', 'Daniella Kaye', 'Benitez', 'Dela Cruz', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('18', 'jessrael', 'student', 'Jessrael', 'Hingpit', 'Magallanes', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('19', 'mitzi', 'student', 'Mitzi Ruth', 'Prinsipe', 'Padonan', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('20', 'rosario', 'student', 'Rosario', 'Libot', 'Querubin', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');
INSERT INTO `student_login` VALUES ('21', 'jazz', 'student', 'Jazzlyn', 'Solomon', 'Torrecampo', 'HOPE', null, null, null, null, '1', 'Gabby', 'Registered', '1');

-- ----------------------------
-- Table structure for tbllesson
-- ----------------------------
DROP TABLE IF EXISTS `tbllesson`;
CREATE TABLE `tbllesson` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `LessonName` varchar(225) DEFAULT NULL,
  `Description` varchar(225) DEFAULT NULL,
  `Video` varchar(200) DEFAULT NULL,
  `Confirm` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbllesson
-- ----------------------------
INSERT INTO `tbllesson` VALUES ('1', 'Angles', 'Lines, Shapes Sides,', 'lessons/lesson Angles.swf', '1');

-- ----------------------------
-- Table structure for tblpretest
-- ----------------------------
DROP TABLE IF EXISTS `tblpretest`;
CREATE TABLE `tblpretest` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Question` varchar(500) NOT NULL,
  `Choice1` varchar(500) NOT NULL,
  `Choice2` varchar(500) NOT NULL,
  `Choice3` varchar(500) NOT NULL,
  `Choice4` varchar(500) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblpretest
-- ----------------------------
INSERT INTO `tblpretest` VALUES ('1', 'An Angle with a measure of less than 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Acute Angle ');
INSERT INTO `tblpretest` VALUES ('2', 'An Angle with a measure of greater than 90? but less than 180?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Obtuse Angle ');
INSERT INTO `tblpretest` VALUES ('3', 'An Angle with a measure of equal to 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Right Angle ');
INSERT INTO `tblpretest` VALUES ('4', ' What do you call on the common endpoint of an angle?', 'Point', ' Vertex of an Angle ', 'Segments', 'Edge', ' Vertex of an Angle ');
INSERT INTO `tblpretest` VALUES ('5', 'It is the union of two non-collinear rays with a common endpoint?', 'Parallel', 'Bilateral', 'Angle', 'Bisector', 'Angle');
INSERT INTO `tblpretest` VALUES ('6', 'It is the measuring unit of an Angles? ', 'Inches', 'Centimeters ', 'Angle ', 'Degree', 'Degree');
INSERT INTO `tblpretest` VALUES ('7', 'It states that to every angle there corresponds a unique real number r where 0<r<180?', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate ', 'Congruent ', 'Angle Measurement Postulate ');
INSERT INTO `tblpretest` VALUES ('8', 'Angles having the same measures? ', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate', 'Angle Measurement', 'Angle Measurement Postulate');
INSERT INTO `tblpretest` VALUES ('9', 'what is your name?', 'Robert estrada', 'eze', 'oski', 'choji', 'Robert estrada');
INSERT INTO `tblpretest` VALUES ('10', 'what is love?', 'Organ', 'Feelings', 'Emotions', 'Hobby', 'Feelings');

-- ----------------------------
-- Table structure for tblpretest_holder
-- ----------------------------
DROP TABLE IF EXISTS `tblpretest_holder`;
CREATE TABLE `tblpretest_holder` (
  `pkey` int(5) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(15) NOT NULL,
  `ID` int(5) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Choice1` varchar(500) NOT NULL,
  `Choice2` varchar(500) NOT NULL,
  `Choice3` varchar(500) NOT NULL,
  `Choice4` varchar(500) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `Student_Answer` varchar(500) NOT NULL,
  PRIMARY KEY (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=2735 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblpretest_holder
-- ----------------------------
INSERT INTO `tblpretest_holder` VALUES ('2725', 'stanley', '1', 'It is the union of two non-collinear rays with a common endpoint?', 'Parallel', 'Bilateral', 'Angle', 'Bisector', 'Angle', 'Angle');
INSERT INTO `tblpretest_holder` VALUES ('2726', 'stanley', '2', 'An Angle with a measure of equal to 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Right Angle ', 'Right Angle ');
INSERT INTO `tblpretest_holder` VALUES ('2727', 'stanley', '3', 'An Angle with a measure of less than 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Acute Angle ', 'Right Angle ');
INSERT INTO `tblpretest_holder` VALUES ('2728', 'stanley', '4', 'Angles having the same measures? ', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate', 'Angle Measurement', 'Angle Measurement Postulate', 'Angle Addition Postulate ');
INSERT INTO `tblpretest_holder` VALUES ('2729', 'stanley', '5', 'what is your name?', 'Robert estrada', 'eze', 'oski', 'choji', 'Robert estrada', 'oski');
INSERT INTO `tblpretest_holder` VALUES ('2730', 'stanley', '6', ' What do you call on the common endpoint of an angle?', 'Point', ' Vertex of an Angle ', 'Segments', 'Edge', ' Vertex of an Angle ', 'Segments');
INSERT INTO `tblpretest_holder` VALUES ('2731', 'stanley', '7', 'what is love?', 'Organ', 'Feelings', 'Emotions', 'Hobby', 'Feelings', 'Emotions');
INSERT INTO `tblpretest_holder` VALUES ('2732', 'stanley', '8', 'It is the measuring unit of an Angles? ', 'Inches', 'Centimeters ', 'Angle ', 'Degree', 'Degree', 'Angle ');
INSERT INTO `tblpretest_holder` VALUES ('2733', 'stanley', '9', 'An Angle with a measure of greater than 90? but less than 180?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Obtuse Angle ', 'Reflex Angle ');
INSERT INTO `tblpretest_holder` VALUES ('2734', 'stanley', '10', 'It states that to every angle there corresponds a unique real number r where 0<r<180?', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate ', 'Congruent ', 'Angle Measurement Postulate ', 'Angle Addition Postulate ');

-- ----------------------------
-- Table structure for tblquestion
-- ----------------------------
DROP TABLE IF EXISTS `tblquestion`;
CREATE TABLE `tblquestion` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Question` varchar(200) NOT NULL DEFAULT '',
  `Choice1` varchar(200) DEFAULT NULL,
  `Choice2` varchar(200) DEFAULT NULL,
  `Choice3` varchar(200) DEFAULT NULL,
  `Choice4` varchar(200) DEFAULT NULL,
  `Answer` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`,`Question`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblquestion
-- ----------------------------
INSERT INTO `tblquestion` VALUES ('1', 'An Angle with a measure of less than 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Acute Angle ');
INSERT INTO `tblquestion` VALUES ('2', 'An Angle with a measure of greater than 90? but less than 180?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Obtuse Angle');
INSERT INTO `tblquestion` VALUES ('3', 'An Angle with a measure of equal to 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Right Angle ');
INSERT INTO `tblquestion` VALUES ('15', ' What do you call on the common endpoint of an angle?', 'Point', ' Vertex of an Angle ', 'Segments', 'Edge', 'Vertex of an Angle ');
INSERT INTO `tblquestion` VALUES ('16', 'It is the union of two non-collinear rays with a common endpoint?', 'Parallel', 'Bilateral', 'Angle', 'Bisector', 'Angle');
INSERT INTO `tblquestion` VALUES ('17', 'It is the measuring unit of an Angles? ', 'Inches', 'Centimeters ', 'Angle ', 'Degree', 'Degree');
INSERT INTO `tblquestion` VALUES ('18', 'It states that to every angle there corresponds a unique real number r where 0<r<180?', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate ', 'Congruent ', 'Angle Measurement Postulate ');
INSERT INTO `tblquestion` VALUES ('19', 'Angles having the same measures? ', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate ', 'Angle Measurement Postulate ', 'Angle Measurement Postulate ');

-- ----------------------------
-- Table structure for tblscore
-- ----------------------------
DROP TABLE IF EXISTS `tblscore`;
CREATE TABLE `tblscore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Pretest` varchar(255) DEFAULT NULL,
  `Posttest` varchar(255) DEFAULT NULL,
  `Quiz` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblscore
-- ----------------------------

-- ----------------------------
-- Table structure for tblsection
-- ----------------------------
DROP TABLE IF EXISTS `tblsection`;
CREATE TABLE `tblsection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Section` varchar(255) DEFAULT NULL,
  `Prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblsection
-- ----------------------------
INSERT INTO `tblsection` VALUES ('1', 'Hope', null);

-- ----------------------------
-- Table structure for tbltest
-- ----------------------------
DROP TABLE IF EXISTS `tbltest`;
CREATE TABLE `tbltest` (
  `Question_ID` int(15) NOT NULL AUTO_INCREMENT,
  `Question` varchar(25000) NOT NULL,
  `Choice_1` varchar(250) NOT NULL,
  `Choice_2` varchar(250) NOT NULL,
  `Choice_3` varchar(250) NOT NULL,
  `Choice_4` varchar(250) NOT NULL,
  `Answer` varchar(250) NOT NULL,
  PRIMARY KEY (`Question_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbltest
-- ----------------------------
INSERT INTO `tbltest` VALUES ('1', 'An Angle with a measure of less than 90?? ', '', '', '', '', '');

-- ----------------------------
-- Table structure for teacher_login
-- ----------------------------
DROP TABLE IF EXISTS `teacher_login`;
CREATE TABLE `teacher_login` (
  `TeacherID` int(10) NOT NULL DEFAULT '0',
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Middlename` varchar(20) DEFAULT NULL,
  `TeacherImage` varchar(100) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`TeacherID`,`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teacher_login
-- ----------------------------
INSERT INTO `teacher_login` VALUES ('1', 'Prof', 'Prof', 'Fe', 'Ng', 'Dela Cruz', null, 'gabdacasin@gmail.com', 'Wisdom ');
