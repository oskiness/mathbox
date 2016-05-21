/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : mathbox

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-05-21 19:28:12
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
  `Birthdate` date DEFAULT NULL,
  `Images` varchar(100) DEFAULT NULL,
  `Confirm` int(2) DEFAULT NULL,
  `Prof` varchar(50) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Active` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`StudentID`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=15041699 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student_login
-- ----------------------------
INSERT INTO `student_login` VALUES ('15041605', 'daniella', 'student', 'Danielle Betina', 'N.', 'Bosi', 'Hope', null, null, '2001-02-21', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041607', 'Andrei', 'student', 'Andrei Jan', 'S.', 'Labao', 'Hope', null, null, '2001-04-10', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041615', 'Jenrey', 'student', 'Jenrey', 'A.', 'Briguel', 'Hope', null, null, '2000-10-11', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041617', 'marcus', 'student', 'Marcus', 'D.', 'Tapispisan', 'Hope', null, null, '2000-12-21', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041620', 'Ronk', 'student', 'Jiane Matthew', 'Z.', 'Ronk', 'Hope', null, null, '2000-04-26', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041623', 'carlo', 'student', 'Carlo Juoaquin', 'SL.', 'Temonerra', 'Hope', null, null, '2001-05-18', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041625', 'King', 'student', 'King Clark', 'O.', 'Besa', 'Hope', null, null, '2001-03-06', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041629', 'Danielle', 'student', 'Danielle Kaye', null, 'Dela Cruz', 'Hope', null, null, '2001-01-05', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041660', 'jessrael', 'student', 'Jessrael', 'M.', 'Magallanes', 'Hope', null, null, '2001-04-15', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041674', 'Angela', 'student', 'Angela Hope', 'T.', 'Urbano', 'Hope', null, null, '2001-10-11', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041676', 'kristelann', 'student', 'Kristel Ann', 'B.', 'Galicia', 'Hope', null, null, '2001-03-31', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041678', 'marvin', 'student', 'Marvin', 'DC.', 'Rodriguez', 'Hope', null, null, '2001-08-05', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041680', 'mitzi', 'student', 'Mitzi Ruth', 'C.', 'Padonan', 'Hope', null, null, '2001-03-14', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041681', 'rosario', 'student', 'Rosario', 'B.', 'Querubin', 'Hope', null, null, '2000-10-22', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041682', 'mark', 'student', 'Mark Joshua Angelo', 'B.', 'Ramirez', 'Hope', null, null, '2000-09-26', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041686', 'jamie', 'student', 'Jamie', 'C.', 'Lacsa', 'Hope', null, null, '2000-09-27', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041687', 'alyssa', 'student', 'Alyssa', 'B.', 'Layag', 'Hope', null, null, '2000-10-28', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041688', 'stanley', 'student', 'Stanley Jary R', 'P.', 'Obin', 'Hope', null, null, '2001-05-14', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041690', 'angela', 'student', 'Angela', 'DC.', 'Fernando', 'Hope', null, null, '2000-09-27', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041694', 'janine', 'student', 'Janine Karull', 'C.', 'Baguio', 'Hope', null, null, '2001-07-14', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041696', 'jazz', 'student', 'Jazzlyn', 'Solomon', 'Torrecampo', 'Hope', null, null, '2000-09-17', null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041698', 'juliana', 'student', 'Juliana Celine', 'Cacho', 'Enguerro', 'Hope', null, null, '2001-02-28', null, '1', 'Gabby', 'Registered', 'Yes');

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
  `Active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbllesson
-- ----------------------------
INSERT INTO `tbllesson` VALUES ('1', 'Angles', 'Lines, Shapes Sides,', 'lessons/lesson Angles.swf', '1', null);
INSERT INTO `tbllesson` VALUES ('2', 'Central Angles', null, null, null, null);
INSERT INTO `tbllesson` VALUES ('3', 'Inscribe Angles', null, null, null, null);
INSERT INTO `tbllesson` VALUES ('4', 'Tangent line', null, null, null, null);
INSERT INTO `tbllesson` VALUES ('5', 'Common Tangents', null, null, null, null);
INSERT INTO `tbllesson` VALUES ('6', 'Angels formed by tangents and secants', null, null, null, null);
INSERT INTO `tbllesson` VALUES ('7', 'Power Theorem', null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblpretest_holder
-- ----------------------------
INSERT INTO `tblpretest_holder` VALUES ('11', 'ronk', '1', 'what is your name?', 'Robert estrada', 'eze', 'oski', 'choji', 'Robert estrada', 'oski');
INSERT INTO `tblpretest_holder` VALUES ('12', 'ronk', '2', 'It is the union of two non-collinear rays with a common endpoint?', 'Parallel', 'Bilateral', 'Angle', 'Bisector', 'Angle', 'Angle');
INSERT INTO `tblpretest_holder` VALUES ('13', 'ronk', '3', ' What do you call on the common endpoint of an angle?', 'Point', ' Vertex of an Angle ', 'Segments', 'Edge', ' Vertex of an Angle ', ' Vertex of an Angle ');
INSERT INTO `tblpretest_holder` VALUES ('14', 'ronk', '4', 'Angles having the same measures? ', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate', 'Angle Measurement', 'Angle Measurement Postulate', 'Angle Measurement Postulate');
INSERT INTO `tblpretest_holder` VALUES ('15', 'ronk', '5', 'It is the measuring unit of an Angles? ', 'Inches', 'Centimeters ', 'Angle ', 'Degree', 'Degree', 'Centimeters ');
INSERT INTO `tblpretest_holder` VALUES ('16', 'ronk', '6', 'what is love?', 'Organ', 'Feelings', 'Emotions', 'Hobby', 'Feelings', 'Feelings');
INSERT INTO `tblpretest_holder` VALUES ('17', 'ronk', '7', 'An Angle with a measure of equal to 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Right Angle ', 'Acute Angle ');
INSERT INTO `tblpretest_holder` VALUES ('18', 'ronk', '8', 'It states that to every angle there corresponds a unique real number r where 0<r<180?', 'Angle Construction Postulate ', 'Angle Addition Postulate ', 'Angle Measurement Postulate ', 'Congruent ', 'Angle Measurement Postulate ', 'Angle Addition Postulate ');
INSERT INTO `tblpretest_holder` VALUES ('19', 'ronk', '9', 'An Angle with a measure of less than 90?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Acute Angle ', 'Acute Angle ');
INSERT INTO `tblpretest_holder` VALUES ('20', 'ronk', '10', 'An Angle with a measure of greater than 90? but less than 180?? ', 'Obtuse Angle ', 'Acute Angle ', 'Right Angle ', 'Reflex Angle ', 'Obtuse Angle ', 'Acute Angle ');

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
  `LessonName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblscore
-- ----------------------------
INSERT INTO `tblscore` VALUES ('4', 'ronk', '5', null, null, 'Angles');

-- ----------------------------
-- Table structure for tblsection
-- ----------------------------
DROP TABLE IF EXISTS `tblsection`;
CREATE TABLE `tblsection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TeacherID` int(11) DEFAULT NULL,
  `Section` varchar(255) DEFAULT NULL,
  `Prof` varchar(255) DEFAULT NULL,
  `Active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15100405 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblsection
-- ----------------------------
INSERT INTO `tblsection` VALUES ('15100400', '15051501', 'Hope', 'Mario', 'Yes');
INSERT INTO `tblsection` VALUES ('15100401', '15051502', 'Wisdom', 'Fe', 'Yes');
INSERT INTO `tblsection` VALUES ('15100402', '15051503', 'Faith', null, 'Yes');
INSERT INTO `tblsection` VALUES ('15100403', '15051504', 'Grace', null, 'Yes');
INSERT INTO `tblsection` VALUES ('15100404', '15051505', 'Integrity', null, 'Yes');

-- ----------------------------
-- Table structure for teacher_login
-- ----------------------------
DROP TABLE IF EXISTS `teacher_login`;
CREATE TABLE `teacher_login` (
  `TeacherID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Middlename` varchar(20) DEFAULT NULL,
  `TeacherImage` varchar(100) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Section` varchar(20) NOT NULL,
  `Active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TeacherID`,`Username`,`Section`)
) ENGINE=InnoDB AUTO_INCREMENT=15051504 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teacher_login
-- ----------------------------
INSERT INTO `teacher_login` VALUES ('15051501', 'Prof', 'Prof', 'Fe', 'Ng', 'Dela Cruz', null, 'gabdacasin@gmail.com', 'Wisdom ', 'Yes');
INSERT INTO `teacher_login` VALUES ('15051502', '1234', 'asdf', 'Mario', 'pineda', 'marcos', null, 'Mariopineda@yahoo.co', 'Hope', 'Yes');
INSERT INTO `teacher_login` VALUES ('15051503', 'prof', 'prof', 'oscar', 'talusig', 'sapinos', null, null, 'Faith', 'Yes');
