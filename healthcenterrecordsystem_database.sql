

CREATE TABLE `brgy_patientinformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` bigint(20) NOT NULL,
  `family_code` varchar(10) NOT NULL,
  `record_type` varchar(60) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `suffix` varchar(5) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `age` int(3) NOT NULL,
  `civil_status` varchar(15) NOT NULL,
  `spouse_name` varchar(60) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `birth_place` varchar(70) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `bd_spouse` varchar(10) NOT NULL,
  `educational_attainment` varchar(50) NOT NULL,
  `family_member` varchar(10) NOT NULL,
  `other_specify` varchar(25) NOT NULL,
  `mother_name` varchar(70) NOT NULL,
  `mother_bid` varchar(10) NOT NULL,
  `father_name` varchar(70) NOT NULL,
  `father_bd` varchar(10) NOT NULL,
  `dswd_nhts` varchar(5) NOT NULL,
  `family_house_no` int(15) NOT NULL,
  `4ps_member` varchar(5) NOT NULL,
  `household_no` int(15) NOT NULL,
  `philhealth_member` varchar(5) NOT NULL,
  `status_type` varchar(10) NOT NULL,
  `philhealth_no` varchar(30) NOT NULL,
  `indicate_category` varchar(26) NOT NULL,
  `pcb_member` varchar(6) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `eightfamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `familyprofiling_domestic_animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `kind_type` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `no_of_unvaccinated` int(11) NOT NULL,
  `no_of_vaccinated` int(11) NOT NULL,
  `no_inside` int(11) NOT NULL,
  `no_outside` int(11) NOT NULL,
  `no_caged` int(11) NOT NULL,
  `no_uncaged` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `familyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(6) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `familyprofiling_healthcondition_problems_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` bigint(20) NOT NULL,
  `familymember_withhealth_condition` varchar(180) NOT NULL,
  `family_history` varchar(300) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `diagnostics_treatment_regimen` varchar(200) NOT NULL,
  `Inventions_Needed_Actions_taken` varchar(200) NOT NULL,
  `non_emergency` varchar(160) NOT NULL,
  `emergency` varchar(160) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `familyprofiling_services_prgress` (
  `id` int(11) NOT NULL,
  `family_number` int(11) NOT NULL,
  `name_of_family_member_with_health_condition` varchar(180) NOT NULL,
  `date` varchar(20) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `observations_actiontaken_outcomes` varchar(200) NOT NULL,
  `name_healthcare_provider` varchar(180) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `familyprofiling_vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `name_of_family_member` varchar(180) NOT NULL,
  `immunization_child` varchar(30) NOT NULL,
  `remarks_1` varchar(50) NOT NULL,
  `immunization_adult` varchar(30) NOT NULL,
  `remarks_2` varchar(50) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fivefamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fivefamilyprofiling_healthcondition_problems_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `familymember_withhealth_condition` varchar(200) NOT NULL,
  `family_history` varchar(200) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `diagnostics_treatment_regimen` varchar(200) NOT NULL,
  `Inventions_Needed_Actions_taken` varchar(200) NOT NULL,
  `non_emergency` varchar(180) NOT NULL,
  `emergency` varchar(180) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fivefamilyprofiling_vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `name_of_family_member` varchar(200) NOT NULL,
  `immunization_child` varchar(30) NOT NULL,
  `remarks_1` varchar(200) NOT NULL,
  `immunization_adult` varchar(30) NOT NULL,
  `remarks_2` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fourfamilyprofiling_domestic_animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `kind_type` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `no_of_unvaccinated` int(11) NOT NULL,
  `no_of_vaccinated` int(11) NOT NULL,
  `no_inside` int(11) NOT NULL,
  `no_outside` int(11) NOT NULL,
  `no_caged` int(11) NOT NULL,
  `no_uncaged` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fourfamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fourfamilyprofiling_healthcondition_problems_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `familymember_withhealth_condition` varchar(200) NOT NULL,
  `family_history` varchar(200) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `diagnostics_treatment_regimen` varchar(200) NOT NULL,
  `Inventions_Needed_Actions_taken` varchar(200) NOT NULL,
  `non_emergency` varchar(180) NOT NULL,
  `emergency` varchar(180) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fourfamilyprofiling_vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `name_of_family_member` varchar(200) NOT NULL,
  `immunization_child` varchar(30) NOT NULL,
  `remarks_1` varchar(200) NOT NULL,
  `immunization_adult` varchar(30) NOT NULL,
  `remarks_2` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `medical_itr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `Age` varchar(30) NOT NULL,
  `residential_address` varchar(200) NOT NULL,
  `mode_transaction` varchar(11) NOT NULL,
  `referred_from` varchar(100) NOT NULL,
  `referred_to` varchar(100) NOT NULL,
  `referral_reason` varchar(500) NOT NULL,
  `referred_by` varchar(100) NOT NULL,
  `consultation_date` varchar(20) NOT NULL,
  `consultation_time` varchar(15) NOT NULL,
  `attending_provider` varchar(100) NOT NULL,
  `nature_visit` varchar(30) NOT NULL,
  `bloodpressure` varchar(50) NOT NULL,
  `temperature` varchar(30) NOT NULL,
  `respiratory_rate` varchar(30) NOT NULL,
  `pulse_rate` varchar(30) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `chief_complaints` varchar(500) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `medication_treatment` varchar(100) NOT NULL,
  `healthcare_provider` varchar(100) NOT NULL,
  `laboratory_findings` varchar(500) NOT NULL,
  `performedlaboratory_tes` varchar(500) NOT NULL,
  `added_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

INSERT INTO medical_itr VALUES("7","3000411","","Caloocan, Batangas","Visited","","","","","11/24/2020","10:00am","Mark Maube Zuckerberg","Follow-up visit","76/100","30deg","67","80/min","150cm","60kg","Tae Tae","Diarreah","Goods","Joy Anne Wela"," ","","2022-11-07 02:48:44.394042");
INSERT INTO medical_itr VALUES("9","20009999","","","Walk-in","","","","","11/24/2020","10:00am","","Follow-up visit","","","","","","","Fever","Injured","medidicate",""," ","","2022-11-07 11:22:49.048123");
INSERT INTO medical_itr VALUES("13","20009999","","","Referral","Langit","   Lupa","Hindi Kaya ng Powers","Dr.Herera","11/24/2020   ","10:00am","Ronnie Gonzales Revilla","New Consultation/Case","76/100","30deg","   76/min","   87","   150cm","   60kg","Tite","Baog","Viagra drinks","Joy Anne Wela","Not Good ","Appraisal","2022-11-07 12:05:26.996360");
INSERT INTO medical_itr VALUES("14","20009999","","","Referral","Langit","    Lupa","","Dr.Herera","11/24/2020    ","10:00am","Ronnie Gonzales Revilla","New Consultation/Case","76/100","30deg","    76/min","    87","    150cm","    60kg","Nababaliw","Nabobo","Natatanga","SIra Ulo"," ","","2022-11-07 12:15:08.647012");
INSERT INTO medical_itr VALUES("18","20009999","","","Visited","","","","","","","","","76/100","30deg","","80/min","","","Missing Tooth","Destroyed Tooth","Tooth Implant","Ronnie Gonzales Revilla"," ","","2022-11-20 15:08:02.412002");
INSERT INTO medical_itr VALUES("19","20009999","","","Visited","","","","","","","","","76/100","30deg","","80/min","","","Missing Tooth","Destroyed Tooth","Tooth Implant","Ronnie Gonzales Revilla"," ","","2022-11-20 15:27:55.552875");
INSERT INTO medical_itr VALUES("22","9766645","","","Walk-in","Balayan Bayview","Calaca Health Center","","Dr. Kwak Kwak","2022-09-22","12am","Nurse. Joyjoy","New Admission","80/120","32deg","120/min","90/min","120cm","84kg","Dizziness","Vertigo","Biogesic","Dr. Kwak Kwak","N/A ","N/A","2022-11-22 01:58:45.407423");
INSERT INTO medical_itr VALUES("23","2000765849","","","Walk-in","Calaca Health Center","Dr. Jose ","N/A","Dra. abaya","2022-07-12","1am","Sec. Uy","Follow-up visit","60/120","29deg","50/min","100/min","122cm","60kg","Sore throat","Tonsilitis","Calamansi Juice","Dr. Dave","N/A ","N/A","2022-11-22 02:28:13.165777");
INSERT INTO medical_itr VALUES("24","20001","","","Visited","","","","","2022-11-04","10:00am","Ronnie Gonzales Revilla","New Consultation/Case","76/100","30deg","   76/min","87/min"," 153","   56","Headache","MIgraine","Rest, paracetamol and painkiller","Dr. Deguzman Herrera"," ","","2022-11-22 08:37:22.242539");
INSERT INTO medical_itr VALUES("25","20003411","","","Select","","","","","2022-11-24","10:51","Nurse Joy","New Consultation/Case","76/100","32deg"," 70/min","   78/min"," 153","   56","Lack of Appitite","TB positive","Antibiotics","Dr. Noel Magana","TB positive ","ucetheria","2022-11-22 08:52:01.391185");
INSERT INTO medical_itr VALUES("26","0","","","Walk-in","","","","","","","Mark Maube Zuckerberg","New Consultation/Case","","","","","","","","","",""," ","","2022-11-24 13:15:09.879499");
INSERT INTO medical_itr VALUES("27","0","","","Walk-in","","","","","","","Ronnie Gonzales Revilla","New Consultation/Case","","","","","","","","","",""," ","","2022-11-24 13:39:13.436006");
INSERT INTO medical_itr VALUES("28","0","","","Walk-in","","","","","","","Mark Maube Zuckerberg","New Consultation/Case","","","","","","","","","",""," ","","2022-11-24 13:51:03.129397");
INSERT INTO medical_itr VALUES("29","123456","","","Walk-in","","","","","2022-11-18","12am","","New Consultation/Case","80/120","30deg","","   78/min","123","    78kg","","","",""," ","","2022-11-24 14:04:54.011988");
INSERT INTO medical_itr VALUES("30","0","","","Walk-in","","","","","","","","New Consultation/Case","","","","","","","","","",""," ","","2022-11-24 14:05:25.099694");
INSERT INTO medical_itr VALUES("31","20008787","","","Walk-in","","","","","2022-11-09","10:00am","","New Consultation/Case","76/100","","","101/min","","","","","",""," ","","2022-11-24 14:09:19.395420");
INSERT INTO medical_itr VALUES("32","20004","","","Visited","Manila","","","","2022-11-10","05:08","Ronnie Gonzales Revilla","New Consultation/Case","76/100","32deg","","","","","Tanga","BObob","Ulaga","Dr. Joanne Manalasa"," ","","2022-11-24 16:05:37.992302");
INSERT INTO medical_itr VALUES("33","20005","","","Walk-in","Lian Health Center","Javez Hospital","lack of equipments","Dra. Piya Lee","2022-11-24","12am","Mark Maube Zuckerberg","New Consultation/Case","60/120","32deg","120/min","   78/min",""," 46","Cough","TB positive","Air Bland",""," ","","2022-11-25 01:11:13.334726");
INSERT INTO medical_itr VALUES("34","2000134","","","Walk-in","","","","","2022-11-04","","Nurse. Cena Joy","New Consultation/Case","","","","","","","","","",""," ","","2022-11-25 01:12:44.565369");



CREATE TABLE `patient_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` bigint(10) NOT NULL,
  `family_code` varchar(10) NOT NULL,
  `record_type` varchar(60) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `suffix` varchar(5) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `age` varchar(3) NOT NULL,
  `civil_status` varchar(15) NOT NULL,
  `spouse_name` varchar(60) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `birth_place` varchar(70) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `bd_spouse` varchar(10) NOT NULL,
  `educational_attainment` varchar(50) NOT NULL,
  `family_member` varchar(10) NOT NULL,
  `other_specify` varchar(25) NOT NULL,
  `mother_name` varchar(70) NOT NULL,
  `mother_bd` varchar(10) NOT NULL,
  `father_name` varchar(70) NOT NULL,
  `father_bd` varchar(10) NOT NULL,
  `dswd_nhts` varchar(5) NOT NULL,
  `family_house_no` int(15) NOT NULL,
  `4ps_member` varchar(5) NOT NULL,
  `household_no` int(15) NOT NULL,
  `philhealth_member` varchar(5) NOT NULL,
  `status_type` varchar(10) NOT NULL,
  `philhealth_no` varchar(30) NOT NULL,
  `indicate_category` varchar(25) NOT NULL,
  `pcb_member` varchar(5) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4;

INSERT INTO patient_information VALUES("59","0","0001","General","Zuckerberg","Mark","Maube","","Male","Cavite City","4216","2147483647","","Single","Anna Valencia","","Lian","N/A","","College","Father","","","","gaatahi","2022-11-02","Yes","11","Yes","11","Yes","N/A","","N/A","Yes","2022-11-24 13:15:09");
INSERT INTO patient_information VALUES("60","0","0002","","Zuckerberg","Mark","Maube","jr","Male","Cavite City","4216","0","","Single","N/A","2022-11-23","","","","No Formal Education","Father","","Susan Dela Cruz","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 13:30:51");
INSERT INTO patient_information VALUES("61","0","","General","Revilla","Ronnie","Gonzales","","Male","Caloocan, Batangas","4566","0","","Annulled","Mackia  Velly","2022-11-16","","","","No Formal Education","Father","","Lemon Juice","2022-11-14","Apple Cider","2022-11-07","No","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 13:39:13");
INSERT INTO patient_information VALUES("62","0","0001","","Lubugan","Darwin","","","Male","Binubusan, Lian Batangas","4216","0","","Single","","","Manila, Philippines","AB-","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 13:43:55");
INSERT INTO patient_information VALUES("63","20098","3334","Immunization","Joy","Nurse.","Cena","","Male","Malaruhatan, Lian Batangas","4216","0","","Single","","","","","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 13:46:06");
INSERT INTO patient_information VALUES("64","0","0002","","SUPPOOt","Markyy","Maube","","Male","Cavite City","4216","0","","Single","","","","","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 13:51:03");
INSERT INTO patient_information VALUES("65","123456","32532","","Caluag","Eddie","","","Male","","0","0","","Single","","","","","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 14:04:53");
INSERT INTO patient_information VALUES("66","0","","","Sama","Mo","","","Male","","0","0","","Single","","","","","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 14:05:25");
INSERT INTO patient_information VALUES("67","20008787","","","Juice","Buko","","","Male","","0","0","","Single","","","","","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 14:09:19");
INSERT INTO patient_information VALUES("68","20001","0001","Pediatric Immunization","Cellphone","Samsuung","Gonzales","jr","Male","Caloocan, Batangas","4566","65636346","","Annulled","N/A","2022-11-15","Lian","","","No Formal Education","Father","","gsgsghsh","2022-11-10","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 15:25:24");
INSERT INTO patient_information VALUES("69","20002","0002","Pediatric Immunization","Fernandez","Miguel","Marquez","","Male","Cavite City","4216","65636346","","Single","Anna Valencia","2022-11-01","Manila, Philippines","N/A","2022-11-02","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-24 15:30:35");
INSERT INTO patient_information VALUES("70","20003","0003","Deworming","Yamete","Kudashai","Ero","","Male","Caloocan, Batangas","4566","65636346","","Single","Maria Jones","2022-11-09","Lian","AB-","2022-11-23","HighSchool","Father","","Susan Dela Cruz","2022-11-18","Watashi Kuruma","09/08/2005","Yes","6767","Yes","0","Yes","N/A","67888","FE - Private","Yes","2022-11-24 15:56:03");
INSERT INTO patient_information VALUES("71","20004","0004","TB DOTS","Beluga","John","Gonzales","jr","Select Gen","Caloocan, Batangas","4566","0","","Single","","","Bungahan","AB-","","Select Educational Attainment","Select fam","N/A","Lemon Juice","","Alfred Sy","2022-11-10","Yes","11","No","516","No","Member","","Select","Selec","2022-11-24 16:05:37");
INSERT INTO patient_information VALUES("72","20005","0005","General","Zuckerberg","Mark","Maube","jr.","Male","Cavite City","4216","0","","Single","Anna Valencia","2022-11-02","Manila, Philippines","N/A","2022-11-02","HighSchool","Father","","Susan Dela Cruz","","Apple Cider","","No","6767","Yes","11","No","N/A","","N/A","Yes","2022-11-25 01:11:13");
INSERT INTO patient_information VALUES("73","2000134","0001","General","Joy","Nurse.","Cena","","Male","Malaruhatan, Lian Batangas","4216","0","","Single","","2022-11-03","","","","HighSchool","Father","","gsgsghsh","2022-11-01","gaatahi","","Yes","0","Yes","0","Yes","Member","","N/A","Yes","2022-11-25 01:12:44");
INSERT INTO patient_information VALUES("74","200010","0006","Immunization","Layug","Randy","Joseph","Sr.","Male","Cavite City","4216","2147483647","","Single","Mackia  Velly","2022-11-16","","","","No Formal Education","Father","","","","","","Yes","0","Yes","0","Yes","N/A","","N/A","Yes","2022-11-25 01:15:55");



CREATE TABLE `rowfamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marita_staus` varchar(6) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `secondfamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marita_staus` varchar(6) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sevenfamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `highest_education_attainment` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sixfamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `highest_education_attainment` varchar(30) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sixfamilyprofiling_healthcondition_problems_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `familymember_withhealth_condition` varchar(200) NOT NULL,
  `family_history` varchar(200) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `diagnostics_treatment_regimen` varchar(200) NOT NULL,
  `Inventions_Needed_Actions_taken` varchar(200) NOT NULL,
  `non_emergency` varchar(180) NOT NULL,
  `emergency` varchar(180) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sixfamilyprofiling_vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `name_of_family_member` varchar(200) NOT NULL,
  `immunization_child` varchar(30) NOT NULL,
  `remarks_1` varchar(200) NOT NULL,
  `immunization_adult` varchar(30) NOT NULL,
  `remarks_2` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_0_71pedia_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(40) NOT NULL,
  `municipality` varchar(40) NOT NULL,
  `name_father_mother` varchar(160) NOT NULL,
  `child_name` varchar(160) NOT NULL,
  `birth_date` varchar(15) NOT NULL,
  `age_inmonth` varchar(15) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `nutl_status` varchar(30) NOT NULL,
  `lenght` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `length_height_forage` varchar(30) NOT NULL,
  `weight_for_lengheight` varchar(30) NOT NULL,
  `standing_lying` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_adultimmunization_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(15) NOT NULL,
  `date_consultation` varchar(20) DEFAULT NULL,
  `consultation_time` varchar(15) NOT NULL,
  `attending_provider` varchar(200) NOT NULL,
  `nature_visit` varchar(30) NOT NULL,
  `blood_pressure` varchar(20) NOT NULL,
  `temperature` varchar(20) NOT NULL,
  `respiratory_rate` varchar(20) NOT NULL,
  `pulse_rate` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `immunization` varchar(200) NOT NULL,
  `chief_complaints` varchar(500) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `medical_treatment` varchar(500) NOT NULL,
  `name_healthprovider` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_adultimmunization_itr VALUES("2","20003411","Walk-in","2022-11-18","11:44","Ronnie Gonzales Revilla","New Consultation/Case","76/100","30deg","   76/min","101/min"," 153","60kg","Human pappillomavirus (HPV))","Headche","Virus","Vaccination","","2022-11-22");
INSERT INTO tbl_adultimmunization_itr VALUES("3","2000300","Walk-in","2022-11-17","08:24","Nurse. Joy","New Admission","80/120","32deg"," 70/min","    67/min","    176","    78kg","","Yellow Body","Hepathitis","Vaccines","Dr. Anne","2022-11-22");
INSERT INTO tbl_adultimmunization_itr VALUES("4","0","Walk-in","","","Mark Maube Zuckerberg","New Consultation/Case","","","","","","","","","","","","2022-11-24");
INSERT INTO tbl_adultimmunization_itr VALUES("5","0","Walk-in","","","Dr. Darwin Lubugan","New Consultation/Case","","","","","","","","","","","","2022-11-24");
INSERT INTO tbl_adultimmunization_itr VALUES("6","0","Walk-in","","","Nurse. Cena Joy","New Consultation/Case","","","","","","","","","","","","2022-11-24");
INSERT INTO tbl_adultimmunization_itr VALUES("7","20098","Walk-in","2022-11-16","15:19","Nurse. Cena Joy","New Consultation/Case","76/100","30deg","","87","","","Pneumococcal","flu","lack of oxygen","biogesic","Nurse. Cena Joy","2022-11-24");
INSERT INTO tbl_adultimmunization_itr VALUES("8","200010","Walk-in","2022-11-09","03:15","Mark Maube Zuckerberg","New Consultation/Case","","","","","","","","Fever","Flu","Rest","","2022-11-25");



CREATE TABLE `tbl_annual_catchment_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(60) NOT NULL,
  `municipality` int(60) NOT NULL,
  `male_lessthan_1year` int(11) NOT NULL,
  `female_lessthan_1year` int(11) NOT NULL,
  `1_4_male` int(11) NOT NULL,
  `1_4_female` int(11) NOT NULL,
  `5_6_male` int(11) NOT NULL,
  `5_6_female` int(11) NOT NULL,
  `7_14_male` int(11) NOT NULL,
  `7_14_female` int(11) NOT NULL,
  `15_49_male` int(11) NOT NULL,
  `15_49_female` int(11) NOT NULL,
  `50_64_male` int(11) NOT NULL,
  `50_64_female` int(11) NOT NULL,
  `65over_male` int(11) NOT NULL,
  `65over_female` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_bhw_accomplishment_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(60) NOT NULL,
  `municipality` varchar(60) NOT NULL,
  `total_no_women` int(11) NOT NULL,
  `10_14` int(11) NOT NULL,
  `wra_15_49` int(11) NOT NULL,
  `50_59` int(11) NOT NULL,
  `senior` int(11) NOT NULL,
  `pregnant_women` int(11) NOT NULL,
  `adolescent_10_19` int(11) NOT NULL,
  `20_49` int(11) NOT NULL,
  `fp_users` int(11) NOT NULL,
  `10_19_btl` int(11) NOT NULL,
  `10_19_iud` int(11) NOT NULL,
  `10_19_pills` int(11) NOT NULL,
  `10_19_injectable` int(11) NOT NULL,
  `10_19_condom` int(11) NOT NULL,
  `10_19_implant` int(11) NOT NULL,
  `10_19__fab` int(11) NOT NULL,
  `20__49btl` int(11) NOT NULL,
  `20_49_iud` int(11) NOT NULL,
  `20_49_pills` int(11) NOT NULL,
  `20_49_injectable` int(11) NOT NULL,
  `20_49_condom` int(11) NOT NULL,
  `20_49_implant` int(11) NOT NULL,
  `20_49__fab` int(11) NOT NULL,
  `50_59_btl` int(11) NOT NULL,
  `50_59_iud` int(11) NOT NULL,
  `50_59_pills` int(11) NOT NULL,
  `50_59_injectable` int(11) NOT NULL,
  `50_59_condom` int(11) NOT NULL,
  `50_59_implant` int(11) NOT NULL,
  `50_59__fab` int(11) NOT NULL,
  `materna;_death_yesno` int(11) NOT NULL,
  `10_19_date_of_death` int(11) NOT NULL,
  `10_19_age` int(11) NOT NULL,
  `10_19_gravidapara` int(11) NOT NULL,
  `20_49_date_of_death` int(11) NOT NULL,
  `50_59_age` int(11) NOT NULL,
  `50_59_gravidapara` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_cbmb_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(60) NOT NULL,
  `municipality` varchar(60) NOT NULL,
  `province` varchar(60) NOT NULL,
  `total_no_population` int(11) NOT NULL,
  `no_of_families` int(11) NOT NULL,
  `no_of_house_wtoilet` int(11) NOT NULL,
  `a_sanitary` int(11) NOT NULL,
  `b_unsanitary` int(11) NOT NULL,
  `no_of_house_wotoilet` int(11) NOT NULL,
  `a_safewater` int(11) NOT NULL,
  `b_for_followup` int(11) NOT NULL,
  `d_danger` int(11) NOT NULL,
  `no_mwra_15_45yrs` int(11) NOT NULL,
  `ano_mwra_amale` int(11) NOT NULL,
  `bno_mwra_bfemale` int(11) NOT NULL,
  `ano_mwra_asingle` int(11) NOT NULL,
  `ano_mwra_amarried` int(11) NOT NULL,
  `bno_mwra_asingle` int(11) NOT NULL,
  `bno_mwra_amarried` int(11) NOT NULL,
  `no_adoloscent` int(11) NOT NULL,
  `no_adoloscent_male` int(11) NOT NULL,
  `no_adoloscent_female` int(11) NOT NULL,
  `no_pregnant_women` int(11) NOT NULL,
  `w_prenatal_checkup` int(11) NOT NULL,
  `wo_prenatal_checkup` int(11) NOT NULL,
  `given_tt2_plus` int(11) NOT NULL,
  `given_tt1_only` int(11) NOT NULL,
  `no_high_riskwomen` int(11) NOT NULL,
  `no_postpartum_mothers` int(11) NOT NULL,
  `no_mothers_wexclusive_bf` int(11) NOT NULL,
  `total_bfmothers_w02` int(11) NOT NULL,
  `total_nonfamilyplanning_acceptors` int(11) NOT NULL,
  `total_fp_acceptors` int(11) NOT NULL,
  `a_pills` int(11) NOT NULL,
  `b_dmpa` int(11) NOT NULL,
  `c_iud` int(11) NOT NULL,
  `d_condom` int(11) NOT NULL,
  `e_nfp_lam` int(11) NOT NULL,
  `f_btl` int(11) NOT NULL,
  `g_vasectomy` int(11) NOT NULL,
  `a_current_user` int(11) NOT NULL,
  `b_dropout` int(11) NOT NULL,
  `no_children_0_6yrs` int(11) NOT NULL,
  `a_0_11months` int(11) NOT NULL,
  `a_male_0_11months` int(11) NOT NULL,
  `b_female_0_11months` int(11) NOT NULL,
  `b_1_5yrsold` int(11) NOT NULL,
  `a_male_1_5yrsold` int(11) NOT NULL,
  `b_female_1_5yrsold` int(11) NOT NULL,
  `c_6yrsold` int(11) NOT NULL,
  `a_malec_6yrsold` int(11) NOT NULL,
  `b_female_c_6yrsold` int(11) NOT NULL,
  `a_normal` int(11) NOT NULL,
  `a_male_normal` int(11) NOT NULL,
  `b_female_normal` int(11) NOT NULL,
  `b_underweight` int(11) NOT NULL,
  `a_male_underweight` int(11) NOT NULL,
  `b_female__underweight` int(11) NOT NULL,
  `c_severely_underweight` int(11) NOT NULL,
  `a_male_severely_underweight` int(11) NOT NULL,
  `b_female_severely_underweight` int(11) NOT NULL,
  `d_overweight` int(11) NOT NULL,
  `a_male_overweight` int(11) NOT NULL,
  `b_female_overweight` int(11) NOT NULL,
  `no_fully_immunizedchildren` int(11) NOT NULL,
  `no_maternaldeaths` int(11) NOT NULL,
  `no_infantdeaths` int(11) NOT NULL,
  `a_garbage_wcover` int(11) NOT NULL,
  `b_garbage_wocover` int(11) NOT NULL,
  `c_burning_garbage_truck` int(11) NOT NULL,
  `no_garbage` int(11) NOT NULL,
  `no_tbpatients` int(11) NOT NULL,
  `no_tbpatients_ciured` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_consumable_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_no` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_description` int(150) NOT NULL,
  `added_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_dental_patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` varchar(30) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `middle_name` varchar(70) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `adress` varchar(400) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `age` varchar(3) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `blood_type` varchar(20) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `fathers_name` varchar(200) NOT NULL,
  `mothers_name` varchar(200) NOT NULL,
  `mode_of_transactions` varchar(30) NOT NULL,
  `bloodpressure` varchar(30) NOT NULL,
  `temperature` varchar(30) NOT NULL,
  `pulse_rate` varchar(30) NOT NULL,
  `chief_of_complaints` varchar(500) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `medication_treatment` varchar(500) NOT NULL,
  `healthcare_provider` varchar(180) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_dental_patients VALUES("6","0200019856","Sy","Henry","Dela Cruz","N/A","Male","Santol, Balayan Batangas","4213","09356487491","20","2002-07-06","B","Single","Alfred Sy","Susan Dela Cruz","Walk-in","87/120","30deg","101/min","Tooth Ache","Cavity","Tooth extraction","Dr. Apacible","2022-11-22");
INSERT INTO tbl_dental_patients VALUES("7","0200019856","Sy","Henry","Dela Cruz","N/A","Male","Santol, Balayan Batangas","4213","09356487491","20","2002-07-06","B","Single","Alfred Sy","Susan Dela Cruz","Walk-in","87/120","30deg","101/min","Tooth Ache","Cavity","Tooth extraction","Dr. Apacible","2022-11-22");
INSERT INTO tbl_dental_patients VALUES("8","0200019858","Marques","Joseph","Maala","N/A","Male","Santol, Balayan Batangas","4213","09356487491","20","2002-07-06","B","Widowed","Alfred Sy","Susan Dela Cruz","Walk-in","87/120","30deg","101/min","Tooth Ache","Tooth Decay","Tooth extraction","Dr. Apacible","2022-11-22");
INSERT INTO tbl_dental_patients VALUES("9","0200019858","Marques","Joseph","Maala","N/A","Male","Santol, Balayan Batangas","4213","09356487491","20","2002-07-06","B","Widowed","Alfred Sy","Susan Dela Cruz","Walk-in","87/120","30deg","101/min","Tooth Ache","Tooth Decay","Tooth extraction","Dr. Apacible","2022-11-22");



CREATE TABLE `tbl_examlple` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_family_profiling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` bigint(20) NOT NULL,
  `date_of_interview` varchar(20) NOT NULL,
  `interviewer` varchar(170) NOT NULL,
  `interviewee` varchar(170) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `residence` varchar(30) NOT NULL,
  `length_of_residency` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `primarycare_provider` varchar(170) NOT NULL,
  `primarycare_provider_no` varchar(15) NOT NULL,
  `travel_time` int(10) NOT NULL,
  `mode_of_transportation` varchar(70) NOT NULL,
  `ownership` varchar(50) NOT NULL,
  `others1` varchar(60) NOT NULL,
  `type_construction_material` varchar(50) NOT NULL,
  `others2` varchar(60) NOT NULL,
  `lighting_facilities` varchar(50) NOT NULL,
  `others3` varchar(30) NOT NULL,
  `source` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `used_for_drinking` varchar(30) NOT NULL,
  `others4` varchar(30) NOT NULL,
  `container` varchar(30) NOT NULL,
  `segregated` varchar(30) NOT NULL,
  `method_of_disposal` varchar(50) NOT NULL,
  `toilet_type` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_family_profiling VALUES("1","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","$dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("2","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("3","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("4","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("5","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("6","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("7","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("8","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("9","0","2022-11-02","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","dwqdwq"," wdw"," qd","0"," qd","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("10","0","2022-11-10","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","Lian"," wdw"," 0909033232","23"," tricycle","","","","","","","","","","","","","","","2022-11-28");
INSERT INTO tbl_family_profiling VALUES("11","0","2022-11-10","Jason Doe","Anna Biat"," sandiego","Male","dwqdw","Lian"," wdw"," 0909033232","23"," tricycle","","","","","","","","","","","","","","","2022-11-28");



CREATE TABLE `tbl_familyplanning_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(30) NOT NULL,
  `consulation_date` varchar(20) NOT NULL,
  `attending_provider` varchar(20) NOT NULL,
  `nature_visit` varchar(20) NOT NULL,
  `type_of_client` varchar(30) NOT NULL,
  `method` varchar(50) NOT NULL,
  `dropout_reason` varchar(200) NOT NULL,
  `sched_nextvisit` varchar(20) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_familyplanning_itr VALUES("1","90000","Visited","2022-11-16","Dr. Darwin Lubugan","New Admission","Couple","CONDOM","No, reason I like condom","11-03-2022","2022-11-23");
INSERT INTO tbl_familyplanning_itr VALUES("2","90000","Referral","2022-11-10","Nurse. Cena Joy","Follow-up visit","Couple","INJECTABLE","No, reason I like condom","2022-11-11","2022-11-23");



CREATE TABLE `tbl_issuance_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_no` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_description` varchar(150) NOT NULL,
  `unit_of_ssue` varchar(60) NOT NULL,
  `place_issued` varchar(100) NOT NULL,
  `date_issued` date NOT NULL,
  `added_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action_made` text NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_accounts` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_logs VALUES("8","1","Has login to the system","2022-11-25 01:24:42");
INSERT INTO tbl_logs VALUES("9","3","Has logout to the system","2022-11-25 01:24:42");



CREATE TABLE `tbl_medicine_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_no` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_of_issue` varchar(60) NOT NULL,
  `item_description_` varchar(150) NOT NULL,
  `expiration_date` date NOT NULL,
  `added_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_pediadeworming_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(30) NOT NULL,
  `date_deworming` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `nature_visit` varchar(30) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `height` varchar(20) NOT NULL,
  `temperature` varchar(20) NOT NULL,
  `date_lastdeworming` varchar(30) NOT NULL,
  `attending_provider` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_pediadeworming_itr VALUES("2","200011","Referral","2022-11-18","11:01","New Admission","123"," 46","","2021-11-25","Ronnie Gonzales Revilla","2022-11-22");
INSERT INTO tbl_pediadeworming_itr VALUES("3","20003","Walk-in","2022-11-08","06:59","New Consultation/Case","123","84kg","","2022-11-09","Ronnie Gonzales Revilla","2022-11-24");



CREATE TABLE `tbl_pediavaccination_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(11) NOT NULL,
  `consultation_date` varchar(20) NOT NULL,
  `consultation_time` varchar(20) NOT NULL,
  `attending_provider` varchar(160) NOT NULL,
  `nature_visit` varchar(30) NOT NULL,
  `bloodpressure` varchar(20) NOT NULL,
  `temperature` varchar(20) NOT NULL,
  `respiratory_rate` varchar(20) NOT NULL,
  `pulse_rate` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `immunization` varchar(200) NOT NULL,
  `chief_complaints` varchar(500) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `medication_treatment` varchar(500) NOT NULL,
  `healthcare_provider` varchar(200) NOT NULL,
  `added_at` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_pediavaccination_itr VALUES("2","2000300","Visited","2022-11-02","07:42","Ronnie Gonzales Revilla","New Consultation/Case","80/120","30deg","   76/min","    67/min","   153"," 46","","Dog Bite","Dog Bite","Vaccine Injection","","2022-11-22");
INSERT INTO tbl_pediavaccination_itr VALUES("3","2000300","Visited","2022-11-16","10:42","Joanne My","New Consultation/Case","80/120","30deg"," 70/min","90/min"," 153"," 46","Hepa B > 24hrs","Yellow body","Hepatitis B positive","Goods","","2022-11-22");
INSERT INTO tbl_pediavaccination_itr VALUES("4","20001","Walk-in","","","Nurse. Cena Joy","New Consultation/Case","76/100","30deg","   76/min","","","","Hepa B w/in 24hrs","Yellow bofy","Hepatay","Dialisis","Dr. Joanne Manalasa","2022-11-24");
INSERT INTO tbl_pediavaccination_itr VALUES("5","20002","Walk-in","2022-11-03","","Evan Joseph","New Admission","","","","","","","Hepa B w/in 24hrs","","","","","2022-11-24");



CREATE TABLE `tbl_popage_distri_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(60) NOT NULL,
  `municipality` varchar(60) NOT NULL,
  `0_11_male` int(11) NOT NULL,
  `0_11_female` int(11) NOT NULL,
  `1_4_male` int(11) NOT NULL,
  `1_4_female` int(11) NOT NULL,
  `5_6_male` int(11) NOT NULL,
  `5_6_female` int(11) NOT NULL,
  `7_9_male` int(11) NOT NULL,
  `7_9_female` int(11) NOT NULL,
  `10_14_male` int(11) NOT NULL,
  `10_14_female` int(11) NOT NULL,
  `15_19_male` int(11) NOT NULL,
  `15_19_female` int(11) NOT NULL,
  `20_24_male` int(11) NOT NULL,
  `20_24_female` int(11) NOT NULL,
  `25_29_male` int(11) NOT NULL,
  `25_29_female` int(11) NOT NULL,
  `30_34_male` int(11) NOT NULL,
  `30_34_female` int(11) NOT NULL,
  `35_39_male` int(11) NOT NULL,
  `35_39_female` int(11) NOT NULL,
  `40_44_male` int(11) NOT NULL,
  `40_44_female` int(11) NOT NULL,
  `45_49_male` int(11) NOT NULL,
  `45_49_female` int(11) NOT NULL,
  `50_54_male` int(11) NOT NULL,
  `50_54_female` int(11) NOT NULL,
  `55_59_male` int(11) NOT NULL,
  `55_59_female` int(11) NOT NULL,
  `60_64_male` int(11) NOT NULL,
  `60_64_female` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_postnatal_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(30) NOT NULL,
  `consultation_date` varchar(20) NOT NULL,
  `consultation_time` varchar(20) NOT NULL,
  `attending_provider` varchar(160) NOT NULL,
  `nature_of_visit` text NOT NULL,
  `bloodpressure` varchar(20) NOT NULL,
  `temperature` varchar(20) NOT NULL,
  `respiratory_rate` varchar(20) NOT NULL,
  `pulse_rate` varchar(20) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `birth_length` varchar(20) NOT NULL,
  `birth_weight` varchar(20) NOT NULL,
  `prenatal_delivered` varchar(20) NOT NULL,
  `place_delivered` varchar(20) NOT NULL,
  `gestational_age` varchar(20) NOT NULL,
  `mode_of_delivery` varchar(30) NOT NULL,
  `iron` varchar(20) NOT NULL,
  `attendant_at_birth` varchar(160) NOT NULL,
  `delivery_date` varchar(20) NOT NULL,
  `delivery_time` varchar(20) NOT NULL,
  `date_initiate_breastfeeding` varchar(20) NOT NULL,
  `time_initiate_breastfeeding` varchar(20) NOT NULL,
  `date_pospartum_visit24hrs` varchar(20) NOT NULL,
  `date_pospartum_visit1w` varchar(20) NOT NULL,
  `danger_sign_mother` varchar(100) NOT NULL,
  `danger_sign_baby` varchar(100) NOT NULL,
  `date_vitamina_given` varchar(20) NOT NULL,
  `date_iron_given` varchar(20) NOT NULL,
  `no_iron_given` varchar(20) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_postnatal_itr VALUES("1","600001","Visited","2022-11-04","12:46","Ronnie Gonzales Revilla","New Consultation/Case","76/100","30deg","   76/min","80/min","Joy","Nurse.","Sucker","Female","5cm","5kg","a","ba","ca","da","eh","ga","2022-11-02"," 10:47","2022-11-03","06:49","2022-11-02","2022-11-13","No","No","","2022-11-22","","2022-11-23");



CREATE TABLE `tbl_pregnancy_tracking_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(60) NOT NULL,
  `municipality` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `barangay_healthworker` varchar(130) NOT NULL,
  `bhw_contact_no` varchar(15) NOT NULL,
  `philhealth` varchar(30) NOT NULL,
  `birth_date` varchar(15) NOT NULL,
  `lmp` varchar(30) NOT NULL,
  `gp` varchar(30) NOT NULL,
  `medical_condition` varchar(100) NOT NULL,
  `previous_obstric_complication` varchar(100) NOT NULL,
  `date_of_first_prenatal` varchar(15) NOT NULL,
  `h+_cm` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_prenatal_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(30) NOT NULL,
  `referred_from` varchar(150) NOT NULL,
  `referred_to` varchar(150) NOT NULL,
  `referral_reason` varchar(400) NOT NULL,
  `referred_by` varchar(160) NOT NULL,
  `consultation_date` varchar(20) NOT NULL,
  `consultation_time` varchar(20) NOT NULL,
  `attending_provider` varchar(160) NOT NULL,
  `nature_of_visit` varchar(30) NOT NULL,
  `bloodpressure` varchar(30) NOT NULL,
  `temperature` varchar(30) NOT NULL,
  `respiratory_rate` varchar(30) NOT NULL,
  `pulse_rate` varchar(30) NOT NULL,
  `gravidity` varchar(50) NOT NULL,
  `parity` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `preterm` varchar(50) NOT NULL,
  `livebirth` varchar(50) NOT NULL,
  `abortion` varchar(50) NOT NULL,
  `last_menstrual_period` varchar(50) NOT NULL,
  `estimate_due_date` varchar(50) NOT NULL,
  `gestational_age` varchar(50) NOT NULL,
  `vital_pregnancy_vaccination` varchar(50) NOT NULL,
  `iron` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `syphilis_result` varchar(50) NOT NULL,
  `penicilin_result` varchar(50) NOT NULL,
  `sched_of_next_visit` varchar(50) NOT NULL,
  `fundic_height` varchar(50) NOT NULL,
  `fetal_heart_tone` varchar(50) NOT NULL,
  `prenatal_visits` varchar(50) NOT NULL,
  `menarche` varchar(50) NOT NULL,
  `period_duration` varchar(50) NOT NULL,
  `interval_cycle` varchar(50) NOT NULL,
  `onset_sexual_intercourse` varchar(50) NOT NULL,
  `birth_control_method` varchar(50) NOT NULL,
  `menopause` varchar(50) NOT NULL,
  `healthcare_provider` int(160) NOT NULL,
  `laboratory_findings` varchar(150) NOT NULL,
  `performed_laboratory_tes` varchar(150) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_prenatal_itr VALUES("1","70001","Visited","","","","","2022-11-10","02:09","Ronnie Gonzales Revilla","Follow-up visit","76/100","30deg"," 70/min","80/min","A"," B","","D ","E","F","G","2022-11-16"," G","H","I"," J"," Negative","NO"," 2022-11-11"," K","L","M","N","O","P","Q"," R","YES","0","U","V","2022-11-23");



CREATE TABLE `tbl_tbdots_itr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `mode_of_transaction` varchar(30) NOT NULL,
  `referred_from` varchar(200) NOT NULL,
  `referred_to` varchar(200) NOT NULL,
  `referral_reason` varchar(500) NOT NULL,
  `referred_by` varchar(200) NOT NULL,
  `consultation_date` varchar(30) NOT NULL,
  `consulation_time` varchar(30) NOT NULL,
  `attending_provider` varchar(200) NOT NULL,
  `nature_visit` varchar(30) NOT NULL,
  `bloodpressure` varchar(30) NOT NULL,
  `temperature` varchar(20) NOT NULL,
  `respiratory_rate` varchar(20) NOT NULL,
  `pulse_rate` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `chief_complaints` varchar(500) NOT NULL,
  `diagnosisis` varchar(500) NOT NULL,
  `medication_treatment` varchar(500) NOT NULL,
  `healhcare_provider` varchar(200) NOT NULL,
  `laboratory_findings` varchar(100) NOT NULL,
  `performedlaboratory_test` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_tbdots_itr VALUES("1","20003411","Visited","","   Genral Santos","","","","","","New Consultation/Case","76/100","30deg","   76/min","   78/min","   153cm","    78kg","Nabobob","headache","Amoxicicillin","Joanne My "," ","","2022-11-22");



CREATE TABLE `threefamilyprofiling_domestic_animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `kind_type` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `no_of_unvaccinated` int(11) NOT NULL,
  `no_of_vaccinated` int(11) NOT NULL,
  `no_inside` int(11) NOT NULL,
  `no_outside` int(11) NOT NULL,
  `no_caged` int(11) NOT NULL,
  `no_uncaged` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `threefamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `blood_type` varchar(20) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highest_education_attainment` varchar(50) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `threefamilyprofiling_healthcondition_problems_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `familymember_withhealth_condition` varchar(200) NOT NULL,
  `family_history` varchar(200) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `diagnostics_treatment_regimen` varchar(200) NOT NULL,
  `Inventions_Needed_Actions_taken` varchar(200) NOT NULL,
  `non_emergency` varchar(180) NOT NULL,
  `emergency` varchar(180) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `threefamilyprofiling_vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `name_of_family_member` varchar(200) NOT NULL,
  `immunization_child` varchar(30) NOT NULL,
  `remarks_1` varchar(200) NOT NULL,
  `immunization_adult` varchar(30) NOT NULL,
  `remarks_2` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `twofamilyprofiling_domestic_animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `kind_type` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `no_of_unvaccinated` int(11) NOT NULL,
  `no_of_vaccinated` int(11) NOT NULL,
  `no_inside` int(11) NOT NULL,
  `no_outside` int(11) NOT NULL,
  `no_caged` int(11) NOT NULL,
  `no_uncaged` int(11) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `twofamilyprofiling_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `family_number` int(11) NOT NULL,
  `family_member` varchar(180) NOT NULL,
  `family_position` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `blood_type` varchar(30) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highest_education_attainment` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(60) NOT NULL,
  `nhip` varchar(30) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `twofamilyprofiling_family_members_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_family_profiling` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `twofamilyprofiling_healthcondition_problems_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `familymember_withhealth_condition` varchar(180) NOT NULL,
  `family_history` varchar(200) NOT NULL,
  `health_condition_problem` varchar(200) NOT NULL,
  `diagnostics_treatment_regimen` varchar(200) NOT NULL,
  `Inventions_Needed_Actions_taken` varchar(200) NOT NULL,
  `non_emergency` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `twofamilyprofiling_vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `name_of_family_member` varchar(200) NOT NULL,
  `immunization_child` varchar(30) NOT NULL,
  `remarks_1` varchar(200) NOT NULL,
  `immunization_adult` varchar(30) NOT NULL,
  `remarks_2` varchar(200) NOT NULL,
  `added_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `user_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO user_accounts VALUES("1","Lubugan","Darwin","Maube","09333408671","Lian","darwin@gmail.com","admin","Admin");
INSERT INTO user_accounts VALUES("2","Hazz","Rocky","Maube","09333408671","brgy.Sandiego, Lian","rocky@gmail.com","rocky","Dentist");
INSERT INTO user_accounts VALUES("3","Layug","Randy, Jr","Vensuelo","09300877769","Caloocan, Balayan Batangas","rlayug2000@gmail.com","Pogiako69","Barangay Healthworker");
INSERT INTO user_accounts VALUES("4","Jefferson","Malabanan","Pacis","0927657891","Calaca Batangas","Jeff.Malabanan@gmail.com","Kahitanona07","Doctor");
INSERT INTO user_accounts VALUES("5","Delo Santos","Sharmaine","Diaz","09556523478","San Juan, Balayan Batangas","Shar08@gmail.com","Yayaya69","Nurse");
INSERT INTO user_accounts VALUES("6","Creag","Carla","Cena","09265782651","Magabe, Balayan Batangas","Carla09@gmail.com","GAGAGAGA09","Midwife");
INSERT INTO user_accounts VALUES("7","Salazar","Pia","Suarez","09356725649","Malalay, Balayan Batangas","Pia69@gmail.com","hahahaha69","Baranagy Midwife");
INSERT INTO user_accounts VALUES("8","rrrrwrw","were","wrw","rw","erw","wrew@gmail.com","rw","Baranagy Midwife");

