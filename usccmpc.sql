

CREATE DATABASE usccmpc;
USE usccmpc;


CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `alt_email` varchar(512) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `timeIn` datetime DEFAULT NULL,
  `timeOut` datetime DEFAULT NULL,
  `stub_number` varchar(128) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `members` (`id`, `lastname`, `firstname`, `sex`, `email`, `alt_email`, `type`, `timeIn`, `timeOut`, `stub_number`, `remarks`) VALUES
(1, 'LNAME', 'FNAME', 'm', '211XXXXX@usc.edu.ph', NULL, 'BS IT', NULL, NULL, NULL, NULL),


ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
