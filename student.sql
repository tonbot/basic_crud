

CREATE TABLE IF NOT EXISTS `students_course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `course_1` varchar(255) NOT NULL,
  `course_2` varchar(255) NOT NULL,
  `course_3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)


CREATE TABLE IF NOT EXISTS `students_profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwordd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
)



