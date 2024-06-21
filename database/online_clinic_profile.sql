

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;





CREATE TABLE `date_utilizator` (
                         `id` int(11) NOT NULL,
                         `nume` varchar(255) NOT NULL,
                         `data` date NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `numar_telefon` int(11) NOT NULL,
                         `mesaj` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `date_utilizator` (`id`, `nume`, `data`, `email`, `numar_telefon`, `mesaj`) VALUES
    (1, 'Ion Popescu', '2024-06-01', 'ion.popescu@example.com', '712345678', 'Interesat de serviciile voastre.'),
    (2, 'Maria Ionescu', '2024-06-02', 'maria.ionescu@example.com', '723456789', 'Vreau să fac o programare.'),
    (3, 'Andrei Vasilescu', '2024-06-03', 'andrei.vasilescu@example.com', '734567890', 'Aveți disponibilitate pentru consultații?'),
    (4, 'Elena Georgescu', '2024-06-04', 'elena.georgescu@example.com', '745678901', 'Care sunt costurile pentru vaccinare?');


CREATE TABLE `doctori` (
                                   `id_doctor` int(11) NOT NULL,
                                   `nume` varchar(255) NOT NULL,
                                   `id_serviciu` varchar(255) NOT NULL,
                                   `serviciu` text NOT NULL,
                                   `număr_doctor_contact` varchar(15) NOT NULL,
                                   `salariu_doctor` varchar(255) NOT NULL,
                                   `data_angajare` date NOT NULL,
                                   `doctor_img` varchar(255) NOT NULL,
                                   `departament` varchar(50) NOT NULL,
                                   `doctor_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1=Activ, 0=Inactiv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `doctori` (id_doctor, `nume`, `id_serviciu`, `serviciu`, `număr_doctor_contact`, `salariu_doctor`, `data_angajare`, `doctor_img` , `departament` , `doctor_status`) VALUES
       (1, 'Dr. Raluca Popescu ', 1, 'Medic Veterinar', '0755332246', 5000, '2020-12-10', 'Raluca-Popescu.jpg', 'Cardiologie', 1),
       (2, 'Dr. Elena Diaconescu ', 2, 'Medic Veterinar', '0766453421', 5000, '2009-07-21', 'Elena-Diaconescu.jpeg', 'Cardiologie', 1),
       (3, 'Dr. Andrei Mihai ', 3, 'Chirurg', '0766548889', 4500, '2012-10-26', 'Andrei-Mihai.jpg', 'Chirurgie', 1),
       (4, 'Dr. Ioana Georgescu ', 4, 'Medic Veterinar', '0766548809', 4600, '2014-08-05', 'Ioana-Georgescu.jpg', 'Vaccinare', 1),
       (5, 'Dr. Horia Preda ', 5, 'Medic Veterinar', '0766453211', 5000, '2010-10-09', 'Horia-Preda.jpeg', 'Radiologie', 1);

CREATE TABLE faq (
                     'id_faq' int(11) NOT NULL,
                     'titlul' VARCHAR(255) NOT NULL ,
                     'descriere' text NOT NULL ,
                     'data' date NOT NULL ,
                     'status' VARCHAR(255) NOT NULL
);

INSERT INTO faq (id_faq, 'titlul', 'descriere', 'data', 'status') VALUES
      (1, 'Servicii Oferite ', ' Consultații generale, vaccinări, chirurgie, analize și diagnosticare, tratament și urgențe, stomatologie, consiliere nutrițională, servicii de internare .', '2024-06-12', 'Inactiv'),
      (2, 'Echipă', 'Echipa noastră este formată din medici veterinari cu experiență, asistenți veterinari dedicați și personal de suport prietenos, toți împărtășind aceeași pasiune pentru îngrijirea animalelor .', '2024-06-12', 'Activ'),
      (3, 'Tehnologie și Echipamente ', ' La VetCare, utilizăm echipamente moderne și tehnologie avansată pentru diagnosticarea și tratarea eficientă a pacienților noștri.', '2024-06-12', 'Activ'),
      (4, 'Oferiți servicii de urgență?', 'Da, VetCare oferă servicii de urgență 24/7. În caz de urgență, vă rugăm să ne contactați imediat.', '2023-07-20', 'Activ'),
      (5, 'Care sunt tarifele pentru serviciile oferite?', 'Tarifele variază în funcție de serviciu. Vă rugăm să vizitați secțiunea de tarife pe site-ul nostru pentru mai multe detalii.', '2020-08-27', 'Activ');



CREATE TABLE `galerie` (
                           `id_galerie` int(11) NOT NULL,
                           `titlul` varchar(255) NOT NULL,
                           `img` varchar(255) NOT NULL,
                           `status` varchar(49) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `galerie` (id_galerie, `titlul`, `img`, `status`) VALUES
    (1, 'Deschiderea noului cabinet VetCare', 'catelus.jpeg', 'activ'),
    (2, 'Campanie de vaccinare', 'catelus1.jpeg', 'inactiv'),
    (3, 'Interventie Chirurgicala', 'caine-si-pisica.jpeg', 'activ'),
    (4, 'Sterilizare pisici', 'pisica.jpeg', 'inactiv'),
    (5, 'Pisica Vesela', 'pisica1.jpeg', 'activ');


CREATE TABLE programare (
                            'id' int(11) NOT NULL ,
                            'nume' varchar(255) NOT NULL ,
                            'email' varchar(255) NOT NULL ,
                            'telefon' varchar(15) NOT NULL ,
                            'data_programarii' date NOT NULL   ,
                            'ora_programarii' varchar(255) NOT NULL ,
                            'id_servicii' varchar(255) NOT NULL ,
                            'id_doctor' varchar(255) NOT NULL ,
                            'status_programare' VARCHAR(50) NOT NULL,
                            FOREIGN KEY ('id_servicii') REFERENCES servicii('id_servicii'),
                            FOREIGN KEY ('id_doctor') REFERENCES servicii('id_doctor')

);

INSERT INTO programare (id, 'nume', 'email', 'telefon', 'data_programarii', 'ora_programarii', 'id_servicii', 'id_doctor', 'status_programare') VALUES
     (1, 'Ion Popescu', 'ion.popescu@example.com', '0712345678', '2024-06-20', '09:00:00', 1, 101, 'confirmata'),
     (2, 'Maria Ionescu', 'maria.ionescu@example.com', '0722345678', '2024-06-21', '10:00:00', 2, 102, 'confirmata'),
     (3, 'George Vasilescu', 'george.vasilescu@example.com', '0732345678', '2024-06-22', '11:00:00', 3, 103, 'anulata'),
     (4, 'Ana Georgescu', 'ana.georgescu@example.com', '0742345678', '2024-06-23', '12:00:00', 4, 104, 'confirmata'),
     (5, 'Paul Mihai', 'paul.mihai@example.com', '0752345678', '2024-06-24', '13:00:00', 5, 104, 'in asteptare');




CREATE TABLE recenzii (
                            'id' int(11) NOT NULL ,
                            'recenzie' text NOT NULL ,
                            'data' date NOT NULL ,
                            'status' varchar(49) NOT NULL
);

INSERT INTO recenzii (id, 'recenzie', 'data', 'status') VALUES
    (1, 'Servicii excelente și personal amabil. ', '2024-06-01', 'activ'),
    (2, 'Sunt foarte mulțumit de consultațiile primite. ', '2024-06-02', 'activ'),
    (3, 'Clinica este foarte curată și bine echipată. ', '2024-06-03', 'activ'),
    (4, 'Veterinarul a fost foarte atent si profesional .', '2023-06-23', 'activ'),
    (5, 'Clinica Veterinara VetCare ofera servicii excelente si personalul este foarte amabil si profesionist. Recomand cu incredere!', '2023-07-27', 'activ');



CREATE TABLE servicii (
                          'id_servicii' int PRIMARY KEY,
                          'nume_serviciu' varchar(255) NOT NULL ,
                          'scurta_descriere' varchar(255) NOT NULL ,
                          'id_doctor' varchar(255) NOT NULL ,
                          'serviciu_status' VARCHAR(49) NOT NULL
);

INSERT INTO servicii (id_servicii, 'nume_serviciu', 'scurta_descriere', 'id_doctor', 'serviciu_status') VALUES
     (1, 'Consultatie generala', 'Consultatie initiala pentru evaluare generala a starii de sanatate', 101, 'activ'),
     (2, 'Analize de sange', 'Recoltare si analiza probelor de sange pentru diverse teste', 102, 'activ'),
     (3, 'Ecografie abdominala', 'Examinare cu ultrasunete a organelor abdominale', 103, 'activ');




CREATE TABLE stirile_noastre (
                                 'id_stiri' int(11) NOT NULL ,
                                 'titlul' VARCHAR(255) NOT NULL ,
                                 'categorie_stire' VARCHAR(255) NOT NULL ,
                                 'data_publicarii' date NOT NULL ,
                                 'scurta_istorie' varchar(500) NOT NULL
);

INSERT INTO stirile_noastre (id_stiri, 'titlul', 'categorie_stire', 'data_publicarii', 'scurta_istorie') VALUES
    (1, 'Deschiderea noului cabinet VetCare ', 'Sanatate', '2024-06-01', 'Am deschis un nou cabinet VetCare în centrul orașului pentru a oferi servicii veterinare de calitate.'),
    (2, 'Campanie de vaccinare la VetCare', 'Campanie', '2024-06-05', 'VetCare organizează o campanie de vaccinare gratuită pentru animalele de companie.'),
    (3, 'Intervenție chirurgicală reușită la VetCare', 'Știri', '2024-06-10', 'O intervenție chirurgicală complexă a fost realizată cu succes la VetCare, salvând viața unui câine.'),
    (4, 'Campanie de sterilizare gratuita', 'Sanatate', '2023-06-12', 'In luna iunie va avea loc o campanie de sterilizare gratuita pentru animalele fara stapan, organizata de clinica noastra .'),
    (5, 'Noi Tehnologii Medicale Disponibile', 'Sanatate', '2023-06-17', 'Clinica noastra a achizitionat echipamente medicale de ultima generatie pentru a imbunatati calitatea serviciilor oferite.');













/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
