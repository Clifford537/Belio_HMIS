-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2024 at 07:20 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beliohmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

DROP TABLE IF EXISTS `admissions`;
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `patient_id` bigint DEFAULT NULL,
  `admission_date` datetime DEFAULT NULL,
  `doctor_id` bigint DEFAULT NULL,
  `reason_for_admission` char(100) DEFAULT NULL,
  `discharge_status` tinyint(1) DEFAULT NULL,
  `admission_types_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_admissions_doctors` (`doctor_id`),
  KEY `fk_admissions_admission_type` (`admission_types_id`),
  KEY `fk_admissions_patients` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `patient_id`, `admission_date`, `doctor_id`, `reason_for_admission`, `discharge_status`, `admission_types_id`, `created_at`, `updated_at`) VALUES
(2, NULL, '2024-05-06 00:00:00', 2, 'chemotherapy', 0, NULL, '2024-05-15 15:17:57', '2024-05-15 15:17:57'),
(3, NULL, '2024-05-06 00:00:00', 1, 'WOUND', 0, NULL, '2024-05-15 15:49:58', '2024-05-15 15:49:58'),
(4, NULL, '2024-05-06 00:00:00', 2, 'XRAY', 0, NULL, '2024-05-15 15:52:47', '2024-05-15 15:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `admission_checklists`
--

DROP TABLE IF EXISTS `admission_checklists`;
CREATE TABLE IF NOT EXISTS `admission_checklists` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `checklist` text NOT NULL,
  `ward_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_admission_checklist_wards` (`ward_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admission_checklists`
--

INSERT INTO `admission_checklists` (`id`, `checklist`, `ward_id`, `created_at`, `updated_at`) VALUES
(1, 'anything', 2, '2024-05-09 04:28:29', '2024-05-09 04:31:11'),
(2, 'all', 1, '2024-05-15 15:57:32', '2024-05-15 15:57:32'),
(3, 'some', 2, '2024-05-15 15:58:46', '2024-05-15 15:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `admission_types`
--

DROP TABLE IF EXISTS `admission_types`;
CREATE TABLE IF NOT EXISTS `admission_types` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

DROP TABLE IF EXISTS `beds`;
CREATE TABLE IF NOT EXISTS `beds` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `bed_number` varchar(100) NOT NULL,
  `occupancy_status` tinyint(1) DEFAULT (1),
  `ward_id` bigint DEFAULT NULL,
  `bed_type_id` bigint DEFAULT NULL,
  `patient_id` bigint DEFAULT NULL,
  `bedside_equipment` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_beds_wards` (`ward_id`),
  KEY `fk_beds_bed_types` (`bed_type_id`),
  KEY `fk_beds_patients` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `bed_number`, `occupancy_status`, `ward_id`, `bed_type_id`, `patient_id`, `bedside_equipment`, `created_at`, `updated_at`) VALUES
(1, '3', 1, 1, 2, 2, NULL, '2024-05-15 11:34:03', '2024-05-15 11:34:03'),
(2, '3', 0, 1, 1, 2, NULL, '2024-05-15 14:19:39', '2024-05-15 14:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `bed_types`
--

DROP TABLE IF EXISTS `bed_types`;
CREATE TABLE IF NOT EXISTS `bed_types` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bed_types`
--

INSERT INTO `bed_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'manual', '2024-05-14 10:38:59', '2024-05-14 10:38:59'),
(2, 'electric', '2024-05-14 10:39:13', '2024-05-14 10:39:13'),
(3, 'adjustable', '2024-05-14 10:39:32', '2024-05-14 10:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
CREATE TABLE IF NOT EXISTS `billings` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `admission_id` bigint DEFAULT NULL,
  `billing_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_billing/finance_admissions` (`admission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `admission_id`, `billing_date`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '2024-05-15 15:29:49', '2024-05-15 15:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `name` varchar(100) NOT NULL,
  `id` bigint NOT NULL AUTO_INCREMENT,
  `updated_at` timestamp NULL DEFAULT (now()),
  `created_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`name`, `id`, `updated_at`, `created_at`) VALUES
('Learnsoft Support', 1, '2024-05-15 15:33:19', '2024-05-15 15:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `discharges`
--

DROP TABLE IF EXISTS `discharges`;
CREATE TABLE IF NOT EXISTS `discharges` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `admission_id` bigint DEFAULT NULL,
  `discharge_date` datetime DEFAULT NULL,
  `discharge_instructions` varchar(100) DEFAULT NULL,
  `discharge_disposition` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_discharge_admissions` (`admission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discharges`
--

INSERT INTO `discharges` (`id`, `admission_id`, `discharge_date`, `discharge_instructions`, `discharge_disposition`, `created_at`, `updated_at`) VALUES
(1, 3, '2024-05-06 00:00:00', 'second opinion from another hospital', 0, '2024-05-15 15:55:27', '2024-05-15 15:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `date_of_birth` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `specialization_id` bigint DEFAULT NULL,
  `first_name` varchar(300) NOT NULL,
  `surname` varchar(300) NOT NULL,
  `other_names` varchar(100) DEFAULT NULL,
  `department_id` bigint DEFAULT NULL,
  `lisence_number` varchar(100) DEFAULT NULL,
  `years_of_experience` int DEFAULT NULL,
  `employment_status_id` bigint DEFAULT NULL,
  `shift_id` bigint DEFAULT NULL,
  `id` bigint NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_doctors_department_id` (`department_id`),
  UNIQUE KEY `unq_doctors_employment_status_id` (`employment_status_id`),
  UNIQUE KEY `unq_doctors_availabilty_id` (`shift_id`),
  UNIQUE KEY `unq_doctors_specialization_id` (`specialization_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`date_of_birth`, `gender`, `phone_number`, `address`, `email`, `specialization_id`, `first_name`, `surname`, `other_names`, `department_id`, `lisence_number`, `years_of_experience`, `employment_status_id`, `shift_id`, `id`, `created_at`, `updated_at`) VALUES
('2005-03-01', 0, '0712211121', NULL, 'a.siloma@learnsoftbeliotechsolutions.co.ke', NULL, 'Mary', 'Miriam', 'Johnson', NULL, NULL, NULL, NULL, NULL, 1, '2024-05-15 09:05:24', '2024-05-15 09:05:24'),
('2005-03-01', 0, '0712211121', 'Nairobi', '1046043@cuea.edu', NULL, 'cliff', 'mukosh', 'Johnson', NULL, NULL, NULL, NULL, NULL, 2, '2024-05-15 15:16:49', '2024-05-15 15:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `employment_statuses`
--

DROP TABLE IF EXISTS `employment_statuses`;
CREATE TABLE IF NOT EXISTS `employment_statuses` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imaging_results`
--

DROP TABLE IF EXISTS `imaging_results`;
CREATE TABLE IF NOT EXISTS `imaging_results` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `imaging_type` varchar(100) DEFAULT NULL,
  `imaging_date` datetime DEFAULT NULL,
  `imaging_results` text,
  `technician_id` bigint DEFAULT NULL,
  `reporting_radiologist` varchar(100) DEFAULT NULL,
  `comments` text,
  `image_link` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_imaging_results_technicians` (`technician_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE IF NOT EXISTS `insurances` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `insurance_company` varchar(100) DEFAULT NULL,
  `policy_number` int DEFAULT NULL,
  `coverage_start_date` date DEFAULT NULL,
  `coverage_end_date` date DEFAULT NULL,
  `billing_information` varchar(100) DEFAULT NULL,
  `patient_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_insurances_patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

DROP TABLE IF EXISTS `laboratories`;
CREATE TABLE IF NOT EXISTS `laboratories` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department_id` bigint DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `status` char(100) DEFAULT NULL,
  `equipments_id` bigint DEFAULT NULL,
  `technician_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_laboratories_technician_id` (`technician_id`),
  KEY `fk_laboratories_departments` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

DROP TABLE IF EXISTS `medical_records`;
CREATE TABLE IF NOT EXISTS `medical_records` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `visit_date` datetime DEFAULT NULL,
  `medical_history` varchar(600) DEFAULT NULL,
  `diagnoses` varchar(600) DEFAULT NULL,
  `treatments` varchar(600) DEFAULT NULL,
  `lab_results` varchar(600) DEFAULT NULL,
  `imaging_studies` varchar(600) DEFAULT NULL,
  `progress_notes` varchar(600) DEFAULT NULL,
  `patient_id` bigint DEFAULT NULL,
  `nurse_id` bigint DEFAULT NULL,
  `doctor_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_medical_records_patients` (`patient_id`),
  KEY `fk_medical_records_nurses` (`nurse_id`),
  KEY `fk_medical_records_doctors` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_06_092755_create_inpatients_table', 2),
(7, '2024_05_06_094011_create_titles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kins`
--

DROP TABLE IF EXISTS `next_of_kins`;
CREATE TABLE IF NOT EXISTS `next_of_kins` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `other_names` varchar(100) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `patient_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_next_of_kins_patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

DROP TABLE IF EXISTS `nurses`;
CREATE TABLE IF NOT EXISTS `nurses` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `other_names` varchar(100) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `certification` varchar(100) DEFAULT NULL,
  `department_id` bigint DEFAULT NULL,
  `shift_id` bigint DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_nurse_department_id` (`department_id`),
  KEY `fk_nurse_shifts` (`shift_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `first_name`, `surname`, `other_names`, `gender`, `date_of_birth`, `phone_number`, `address`, `certification`, `department_id`, `shift_id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Mary', 'Miriam', 'Johnson', 0, '2005-03-01', '0712211121', 'Nairobi', NULL, NULL, NULL, 'mary12@gmail.com', '2024-05-13 06:10:15', '2024-05-13 06:10:15'),
(2, 'Mary', 'Miriam', 'Johnson', 1, '2005-03-01', '0712211121', 'Nairobi', NULL, NULL, NULL, 'learnsoftsystem@gmail.com', '2024-05-14 10:30:22', '2024-05-14 10:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `gender` tinyint(1) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `other_names` varchar(100) DEFAULT NULL,
  `emergency_contact_name` varchar(100) DEFAULT NULL,
  `emergency_contact_phone` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `insurance_id` bigint DEFAULT NULL,
  `nurse_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  `doctor_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patients_doctors` (`doctor_id`),
  KEY `fk_patients_nurses` (`nurse_id`),
  KEY `fk_patients_insurances` (`insurance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `gender`, `phone_number`, `address`, `email`, `blood_group`, `first_name`, `surname`, `other_names`, `emergency_contact_name`, `emergency_contact_phone`, `status`, `insurance_id`, `nurse_id`, `created_at`, `updated_at`, `doctor_id`) VALUES
(2, 0, '0712211121', 'Nairobi', 'a.siloma@learnsoftbeliotechsolutions.co.ke', NULL, 'Mary', 'Miriam', 'Johnson', NULL, NULL, 0, NULL, NULL, '2024-05-15 11:30:28', '2024-05-15 11:30:28', NULL),
(3, 0, NULL, 'Nairobi', 'silomaallan@gmail.com', 'L', 'ALLAN', 'SILOMA', 'PARSEEN', 'ANTONY', '0002401115236', 0, NULL, NULL, '2024-05-15 15:52:08', '2024-05-15 15:52:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physicians`
--

DROP TABLE IF EXISTS `physicians`;
CREATE TABLE IF NOT EXISTS `physicians` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `other_names` varchar(100) DEFAULT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `clinic_hospital` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  `procedure_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_referring_physician` (`procedure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radiologists`
--

DROP TABLE IF EXISTS `radiologists`;
CREATE TABLE IF NOT EXISTS `radiologists` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_radiologists_departments` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radiology_procedures`
--

DROP TABLE IF EXISTS `radiology_procedures`;
CREATE TABLE IF NOT EXISTS `radiology_procedures` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `patient_id` bigint DEFAULT NULL,
  `procedure_date` date DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `procedure_results` varchar(100) DEFAULT NULL,
  `procedure_cost` decimal(10,0) DEFAULT NULL,
  `insurance_id` bigint DEFAULT NULL,
  `procedure_location` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  `theatre_id` bigint DEFAULT NULL,
  `doctor_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_radiology_procedure_insurance_id` (`insurance_id`),
  UNIQUE KEY `unq_radiology_procedure_theatre_id` (`theatre_id`),
  UNIQUE KEY `fk_radiology_procedure` (`patient_id`),
  KEY `fk_radiology_procedures` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

DROP TABLE IF EXISTS `relationships`;
CREATE TABLE IF NOT EXISTS `relationships` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `relationship` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

DROP TABLE IF EXISTS `shifts`;
CREATE TABLE IF NOT EXISTS `shifts` (
  `id` bigint NOT NULL,
  `day_of_week` date DEFAULT NULL,
  `time_of_day` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

DROP TABLE IF EXISTS `specializations`;
CREATE TABLE IF NOT EXISTS `specializations` (
  `specialty` varchar(100) NOT NULL,
  `id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

DROP TABLE IF EXISTS `technicians`;
CREATE TABLE IF NOT EXISTS `technicians` (
  `id` bigint NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `other_names` varchar(100) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

DROP TABLE IF EXISTS `theatres`;
CREATE TABLE IF NOT EXISTS `theatres` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `theatre_status` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `capacity` int NOT NULL,
  `equipment_id` text,
  `operation_schedules` datetime DEFAULT NULL,
  `next_maintenance_date` date DEFAULT NULL,
  `last_maintenance_date` date DEFAULT NULL,
  `doctor_incharge` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_theatre_management_doctors` (`doctor_incharge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Mr', '2024-05-06 06:40:54', '2024-05-06 06:40:54'),
(2, 'Mrs', '2024-05-06 06:41:02', '2024-05-06 06:41:02'),
(3, 'miss', '2024-05-15 15:56:48', '2024-05-15 15:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'allansiloma', 'a.siloma@learnsoftbeliotechsolutions.co.ke', NULL, '$2y$10$Ue.gQe9H6jd3F.C3NhI4fObOQkeFWh5IboM68bhBh6Uw0LtmCE8aq', NULL, '2024-05-06 05:56:56', '2024-05-06 05:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
CREATE TABLE IF NOT EXISTS `wards` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `ward_type_id` bigint DEFAULT NULL,
  `capacity` int DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT (1),
  `nurse_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `fk_wards_ward_types` (`ward_type_id`),
  KEY `fk_wards_nurses` (`nurse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `description`, `ward_type_id`, `capacity`, `location`, `status`, `nurse_id`, `created_at`, `updated_at`) VALUES
(1, 'maternity', 1, 20, 'West wing', 1, 1, '2024-05-15 03:36:25', '2024-05-15 03:36:25'),
(2, 'burns unit', 2, NULL, 'east wing', 0, 2, '2024-05-15 15:58:25', '2024-05-15 15:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `ward_types`
--

DROP TABLE IF EXISTS `ward_types`;
CREATE TABLE IF NOT EXISTS `ward_types` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ward_types`
--

INSERT INTO `ward_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'General', '2024-05-09 05:43:13', '2024-05-09 05:43:13'),
(2, 'ICU', '2024-05-14 09:11:12', '2024-05-14 09:11:12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admissions`
--
ALTER TABLE `admissions`
  ADD CONSTRAINT `fk_admissions_admission_type` FOREIGN KEY (`admission_types_id`) REFERENCES `admission_types` (`id`),
  ADD CONSTRAINT `fk_admissions_discharges` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `fk_admissions_patients` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `beds`
--
ALTER TABLE `beds`
  ADD CONSTRAINT `fk_beds_bed_types` FOREIGN KEY (`bed_type_id`) REFERENCES `bed_types` (`id`),
  ADD CONSTRAINT `fk_beds_patients` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `fk_beds_wards` FOREIGN KEY (`ward_id`) REFERENCES `wards` (`id`);

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `fk_billing/finance_admissions` FOREIGN KEY (`admission_id`) REFERENCES `admissions` (`id`);

--
-- Constraints for table `imaging_results`
--
ALTER TABLE `imaging_results`
  ADD CONSTRAINT `fk_imaging_results_technicians` FOREIGN KEY (`technician_id`) REFERENCES `technicians` (`id`);

--
-- Constraints for table `insurances`
--
ALTER TABLE `insurances`
  ADD CONSTRAINT `fk_insurances` FOREIGN KEY (`id`) REFERENCES `radiology_procedures` (`insurance_id`);

--
-- Constraints for table `nurses`
--
ALTER TABLE `nurses`
  ADD CONSTRAINT `fk_nurse_shifts` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `fk_patients_doctors` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `fk_patients_insurances` FOREIGN KEY (`insurance_id`) REFERENCES `insurances` (`id`),
  ADD CONSTRAINT `fk_patients_nurses` FOREIGN KEY (`nurse_id`) REFERENCES `nurses` (`id`);

--
-- Constraints for table `physicians`
--
ALTER TABLE `physicians`
  ADD CONSTRAINT `fk_referring_physician` FOREIGN KEY (`procedure_id`) REFERENCES `radiology_procedures` (`id`);

--
-- Constraints for table `radiologists`
--
ALTER TABLE `radiologists`
  ADD CONSTRAINT `fk_radiologists_departments` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `radiology_procedures`
--
ALTER TABLE `radiology_procedures`
  ADD CONSTRAINT `fk_radiology_procedure` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `fk_radiology_procedures` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `shifts`
--
ALTER TABLE `shifts`
  ADD CONSTRAINT `fk_availabilities_doctors` FOREIGN KEY (`id`) REFERENCES `doctors` (`shift_id`);

--
-- Constraints for table `technicians`
--
ALTER TABLE `technicians`
  ADD CONSTRAINT `fk_technicians_laboratories` FOREIGN KEY (`id`) REFERENCES `laboratories` (`technician_id`);

--
-- Constraints for table `theatres`
--
ALTER TABLE `theatres`
  ADD CONSTRAINT `fk_theatres_doctors` FOREIGN KEY (`doctor_incharge`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `fk_theatres_theatres` FOREIGN KEY (`id`) REFERENCES `radiology_procedures` (`theatre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
