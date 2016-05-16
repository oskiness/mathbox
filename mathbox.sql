/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : mathbox

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-05-16 12:56:31
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
  `Active` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`StudentID`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=15041675 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student_login
-- ----------------------------
INSERT INTO `student_login` VALUES ('15041605', 'daniella', 'student', 'Danielle Betina', 'Mandapat', 'Bosi', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041607', 'Andrei', 'student', 'Andrei Jan', 'S', 'Labao', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041615', 'Jenrey', 'student', 'Jenrey', 'A', 'Briguel', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041617', 'marcus', 'student', 'Marcus', 'David', 'Tapispisan', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041620', 'Ronk', 'student', 'Jiane Matthew', 'Z', 'Ronk', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041623', 'carlo', 'student', 'Carlo Juoaquin', 'Dela Cruz', 'Temonerra', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041625', 'King', 'student', 'King Clark', 'O', 'Besa', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041629', 'Danielle', 'student', 'Danielle Kaye', null, 'Dela Cruz', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041660', 'jessrael', 'student', 'Jessrael', 'Hingpit', 'Magallanes', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041674', 'Angela', 'student', 'Angela Hope', 'T', 'Urbano', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041676', 'kristelann', 'student', 'Kristel Ann', 'Banaria', 'Galicia', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041678', 'marvin', 'student', 'Marvin', 'Aquino', 'Rodriguez', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041680', 'mitzi', 'student', 'Mitzi Ruth', 'Prinsipe', 'Padonan', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041682', 'mark', 'student', 'Mark Joshua Angelo', 'Cruz', 'Ramirez', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041682', 'rosario', 'student', 'Rosario', 'Libot', 'Querubin', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041686', 'jamie', 'student', 'Jamie', 'Castillo', 'Lacsa', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041687', 'alyssa', 'student', 'Alyssa', 'Bereber', 'Layag', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041688', 'stanley', 'student', 'Stanley Jary R', 'Padua', 'Obin', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041690', 'angela', 'student', 'Angela', 'Dela Cruz', 'Fernando', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041694', 'janine', 'student', 'Janine Karull', 'Quintos', 'Baguio', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041696', 'jazz', 'student', 'Jazzlyn', 'Solomon', 'Torrecampo', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');
INSERT INTO `student_login` VALUES ('15041698', 'juliana', 'student', 'Juliana Celine', 'Cacho', 'Enguerro', 'Hope', null, null, null, null, '1', 'Gabby', 'Registered', 'Yes');

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
) ENGINE=InnoDB AUTO_INCREMENT=2755 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblpretest_holder
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblscore
-- ----------------------------
INSERT INTO `tblscore` VALUES ('1', 'ronk', '3', null, null);
INSERT INTO `tblscore` VALUES ('2', 'ronk', '3', null, null);

-- ----------------------------
-- Table structure for tblsection
-- ----------------------------
DROP TABLE IF EXISTS `tblsection`;
CREATE TABLE `tblsection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Section` varchar(255) DEFAULT NULL,
  `Prof` varchar(255) DEFAULT NULL,
  `Active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblsection
-- ----------------------------
INSERT INTO `tblsection` VALUES ('1', 'Hope', null, 'Yes');
INSERT INTO `tblsection` VALUES ('2', 'Wisdom', null, 'Yes');
INSERT INTO `tblsection` VALUES ('3', 'Faith', null, 'Yes');
INSERT INTO `tblsection` VALUES ('4', 'Grace', null, 'Yes');
INSERT INTO `tblsection` VALUES ('5', 'Integrity', null, 'Yes');

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
  `Active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TeacherID`,`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teacher_login
-- ----------------------------
INSERT INTO `teacher_login` VALUES ('1', 'Prof', 'Prof', 'Fe', 'Ng', 'Dela Cruz', null, 'gabdacasin@gmail.com', 'Wisdom ', 'Yes');
INSERT INTO `teacher_login` VALUES ('2', '1234', 'asdf', 'Mario', 'pineda', 'marcos', null, 'Mariopineda@yahoo.co', 'Hope', 'Yes');
