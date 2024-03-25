<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->string('student_no')->unique();
            $table->string('phone_no');
            $table->string('room_id');
            $table->string('programme');
            $table->integer('year_of_study');
            $table->string('student_email')->unique();
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};

/* query for students
INSERT INTO students (first_name, middle_name, surname, student_no, phone_no, room_id, programme, year_of_study, student_email, status)
VALUES
('Andrew', NULL, 'Andrew', '00000001', '0961111111', 'W101A1', 'BSc in ICT with Education', 1, '1@gmail.com', 'Active'),
  ('Ben', 'Bradley', 'Boldman', '00000002', '0962222222', 'X105B3', 'BSc in Agro Forestry', 1, '2@gmail.com', 'Active'),
  ('Charlie', NULL, 'Chaplin', '00000003', '0963333333', 'Y204A2', 'BSc in Animal Science', 2, '3@gmail.com', 'Active'),
  ('David', 'Derek', 'Dawson', '00000004', '0964444444', 'Z310B4', 'BSc in Sustainable Agriculture', 3, '4@gmail.com', 'Active'),
  ('Edward', 'Eli', 'Evans', '00000005', '0965555555', 'W109B2', 'BSc in Fisheries and Aquaculture', 4, '5@gmail.com', 'Active'),
  ('Frank', 'Felix', 'Ferguson', '00000006', '0966666666', 'X202A3', 'BSc in Cyber Security', 5, '6@gmail.com', 'Active'),
  ('George', NULL, 'Gibson', '00000007', '0967777777', 'Y306B1', 'BSc in Agro Forestry', 1, '7@gmail.com', 'Active'),
  ('Hannah', 'Harold', 'Harrison', '00000008', '0968888888', 'Z401A4', 'BSc in Sustainable Agriculture', 2, '8@gmail.com', 'Active'),
  ('Isaac', 'Ivy', 'Ingram', '00000009', '0969999999', 'W105B2', 'BSc in Animal Science', 3, '9@gmail.com', 'Active'),
  ('Jack', NULL, 'Jackson', '00000010', '0961010101', 'X307A1', 'BSc in ICT with Education', 4, '10@gmail.com', 'Active'),
  ('Katherine', 'Keith', 'Kelley', '00000011', '0961111111', 'Y401B3', 'BSc in Cyber Security', 5, '11@gmail.com', 'Active'),
  ('Liam', NULL, 'Larson', '00000012', '0961212121', 'Z308A2', 'BSc in Agro Forestry', 1, '12@gmail.com', 'Active'),
  ('Mia', 'Michael', 'Murray', '00000013', '0961313131', 'W102B4', 'BSc in Sustainable Agriculture', 2, '13@gmail.com', 'Active'),
  ('Nathan', NULL, 'Nelson', '00000014', '0961414141', 'X201A3', 'BSc in Fisheries and Aquaculture', 3, '14@gmail.com', 'Active'),
  ('Olivia', 'Oscar', 'Owens', '00000015', '0961515151', 'Y303B1', 'BSc in Animal Science', 4, '15@gmail.com', 'Active'),
  ('Peter', NULL, 'Peterson', '00000016', '0961616161', 'Z309A4', 'BSc in ICT with Education', 5, '16@gmail.com', 'Active'),
  ('Quincy', NULL, 'Quinn', '00000017', '0961717171', 'W110B2', 'BSc in Cyber Security', 1, '17@gmail.com', 'Active'),
  ('Rachel', 'Robert', 'Reed', '00000018', '0961818181', 'X206A3', 'BSc in Agro Forestry', 2, '18@gmail.com', 'Active'),
  ('Samuel', 'Samantha', 'Smith', '00000019', '0961919191', 'Y402A4', 'BSc in Sustainable Agriculture', 3, '19@gmail.com', 'Active'),
  ('Thomas', NULL, 'Thompson', '00000020', '0962020202', 'Z404B1', 'BSc in Fisheries and Aquaculture', 4, '20@gmail.com', 'Active'),
  ('Ursula', 'Ulysses', 'Underwood', '00000021', '0962121212', 'W103B3', 'BSc in Animal Science', 5, '21@gmail.com', 'Active'),
  ('Victor', 'Valerie', 'Vance', '00000022', '0962222222', 'X204A1', 'BSc in ICT with Education', 1, '22@gmail.com', 'Active'),
  ('William', NULL, 'Watson', '00000023', '0962323232', 'Y310B2', 'BSc in Cyber Security', 2, '23@gmail.com', 'Active'),
  ('Xavier', 'Xena', 'Xander', '00000024', '0962424242', 'Z402A3', 'BSc in Agro Forestry', 3, '24@gmail.com', 'Active'),
  ('Yasmine', 'Yusuf', 'Yoder', '00000025', '0962525252', 'W107A4', 'BSc in Sustainable Agriculture', 4, '25@gmail.com', 'Active'),
  ('Zachary', 'Zane', 'Zimmerman', '00000026', '0962626262', 'X203B1', 'BSc in Fisheries and Aquaculture', 5, '26@gmail.com', 'Active'),
  ('John', 'Robert', 'Doe', '00000027', '0961111111', 'W101A1', 'BSc in ICT with Education', 1, 'john.doe@gmail.com', 'Active'),
  ('Emma', 'Grace', 'Johnson', '00000028', '0961111112', 'W101A2', 'BSc in ICT with Education', 1, 'emma.johnson@gmail.com', 'Active'),
  ('Daniel', 'Andrew', 'Smith', '00000029', '0961111113', 'W101A3', 'BSc in ICT with Education', 1, 'daniel.smith@gmail.com', 'Active'),

  ('Sophia', 'Elizabeth', 'Williams', '00000030', '0961111114', 'W102B1', 'BSc in ICT with Education', 2, 'sophia.williams@gmail.com', 'Active'),
  ('Liam', 'Christopher', 'Brown', '00000031', '0961111115', 'W102B2', 'BSc in ICT with Education', 2, 'liam.brown@gmail.com', 'Active'),
  ('Olivia', 'Ava', 'Jones', '00000032', '0961111116', 'W102B3', 'BSc in ICT with Education', 2, 'olivia.jones@gmail.com', 'Active'),

  ('Noah', 'Elijah', 'Miller', '00000033', '0961111117', 'X105B3', 'BSc in Agro Forestry', 1, 'noah.miller@gmail.com', 'Active'),
  ('Ava', 'Grace', 'Davis', '00000034', '0961111118', 'X105B4', 'BSc in Agro Forestry', 1, 'ava.davis@gmail.com', 'Active'),
  ('Sophia', 'Ethan', 'Martinez', '00000035', '0961111119', 'X105B1', 'BSc in Agro Forestry', 1, 'sophia.martinez@gmail.com', 'Active'),

  ('Liam', 'Charlotte', 'Hernandez', '00000036', '0961111120', 'X202A3', 'BSc in Cyber Security', 5, 'liam.hernandez@gmail.com', 'Active'),
  ('Olivia', 'Emma', 'Young', '00000037', '0961111121', 'X202A4', 'BSc in Cyber Security', 5, 'olivia.young@gmail.com', 'Active'),
  ('Emma', 'Aiden', 'Morales', '00000038', '0961111122', 'X202A1', 'BSc in Cyber Security', 5, 'emma.morales@gmail.com', 'Active'),

  ('Mia', 'William', 'Lee', '00000039', '0961111123', 'Y204A2', 'BSc in Animal Science', 2, 'mia.lee@gmail.com', 'Active'),
  ('James', 'Grace', 'Garcia', '00000040', '0961111124', 'Y204A3', 'BSc in Animal Science', 2, 'james.garcia@gmail.com', 'Active'),
  ('Ava', 'Ethan', 'Lopez', '00000041', '0961111125', 'Y204A4', 'BSc in Animal Science', 2, 'ava.lopez@gmail.com', 'Active'),

  ('Liam', 'Charlotte', 'Clark', '00000042', '0961111126', 'Y401B3', 'BSc in Cyber Security', 5, 'liam.clark@gmail.com', 'Active'),
  ('Olivia', 'Jackson', 'Rodriguez', '00000043', '0961111127', 'Y401B4', 'BSc in Cyber Security', 5, 'olivia.rodriguez@gmail.com', 'Active'),
  ('Emma', 'Sophia', 'Hill', '00000044', '0961111128', 'Y401B1', 'BSc in Cyber Security', 5, 'emma.hill@gmail.com', 'Active'),

  ('Noah', 'Grace', 'King', '00000045', '0961111129', 'Z310B4', 'BSc in Sustainable Agriculture', 3, 'noah.king@gmail.com', 'Active'),
  ('Liam', 'Ella', 'Baker', '00000046', '0961111130', 'Z310B1', 'BSc in Sustainable Agriculture', 3, 'liam.baker@gmail.com', 'Active'),
  ('Olivia', 'Jackson', 'Griffin', '00000047', '0961111131', 'Z310B2', 'BSc in Sustainable Agriculture', 3, 'olivia.griffin@gmail.com', 'Active'),

  ('Emma', 'Oliver', 'Diaz', '00000048', '0961111132', 'Z401A4', 'BSc in Fisheries and Aquaculture', 4, 'emma.diaz@gmail.com', 'Active'),
  ('Mia', 'Ethan', 'Cooper', '00000049', '0961111133', 'Z401A1', 'BSc in Fisheries and Aquaculture', 4, 'mia.cooper@gmail.com', 'Active'),
  ('Ava', 'Charlotte', 'Riley', '00000050', '0961111134', 'Z401A2', 'BSc in Fisheries and Aquaculture', 4, 'ava.riley@gmail.com', 'Active');
('Sophia', 'Liam', 'Fisher', '00000051', '0961111135', 'Z401A3', 'BSc in Fisheries and Aquaculture', 4, 'sophia.fisher@gmail.com', 'Active'),
  ('Jackson', 'Olivia', 'Hamilton', '00000052', '0961111136', 'W109B2', 'BSc in Agro Forestry', 1, 'jackson.hamilton@gmail.com', 'Active'),
  ('Grace', 'Noah', 'Carter', '00000053', '0961111137', 'X201A3', 'BSc in Sustainable Agriculture', 3, 'grace.carter@gmail.com', 'Active'),
  ('Aiden', 'Ella', 'Ward', '00000054', '0961111138', 'Y303B1', 'BSc in Animal Science', 4, 'aiden.ward@gmail.com', 'Active'),
  ('Emma', 'James', 'Foster', '00000055', '0961111139', 'Z404B1', 'BSc in Cyber Security', 4, 'emma.foster@gmail.com', 'Active'),
  ('Mia', 'Ethan', 'Peterson', '00000056', '0961111140', 'W103B3', 'BSc in Agro Forestry', 5, 'mia.peterson@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Murray', '00000057', '0961111141', 'X206A3', 'BSc in Sustainable Agriculture', 2, 'liam.murray@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Sullivan', '00000058', '0961111142', 'Y402A4', 'BSc in Animal Science', 3, 'olivia.sullivan@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Fleming', '00000059', '0961111143', 'Z402A3', 'BSc in Cyber Security', 3, 'noah.fleming@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Bryant', '00000060', '0961111144', 'W107A4', 'BSc in Sustainable Agriculture', 4, 'emma.bryant@gmail.com', 'Active'),
  ('Mia', 'James', 'Reid', '00000061', '0961111145', 'X203B1', 'BSc in Fisheries and Aquaculture', 5, 'mia.reid@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Nelson', '00000062', '0961111146', 'Y310B2', 'BSc in ICT with Education', 1, 'liam.nelson@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Lawrence', '00000063', '0961111147', 'Z402A1', 'BSc in Agro Forestry', 2, 'olivia.lawrence@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Ford', '00000064', '0961111148', 'W105B2', 'BSc in Sustainable Agriculture', 3, 'noah.ford@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Wells', '00000065', '0961111149', 'X307A1', 'BSc in Animal Science', 4, 'emma.wells@gmail.com', 'Active'),
  ('Mia', 'James', 'Harrison', '00000066', '0961111150', 'Y401B3', 'BSc in Cyber Security', 5, 'mia.harrison@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Payne', '00000067', '0961111151', 'Z310B2', 'BSc in Agro Forestry', 1, 'liam.payne@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Mason', '00000068', '0961111152', 'W110B2', 'BSc in Sustainable Agriculture', 2, 'olivia.mason@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Harvey', '00000069', '0961111153', 'X204A1', 'BSc in Fisheries and Aquaculture', 3, 'noah.harvey@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Carpenter', '00000070', '0961111154', 'Y306B1', 'BSc in Animal Science', 4, 'emma.carpenter@gmail.com', 'Active'),
  ('Mia', 'James', 'Jennings', '00000071', '0961111155', 'Z401A4', 'BSc in Cyber Security', 5, 'mia.jennings@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Bush', '00000072', '0961111156', 'W102B4', 'BSc in Agro Forestry', 1, 'liam.bush@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Pearson', '00000073', '0961111157', 'X105B2', 'BSc in Sustainable Agriculture', 2, 'olivia.pearson@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Fisher', '00000074', '0961111158', 'Y204A4', 'BSc in Animal Science', 3, 'noah.fisher@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Wagner', '00000075', '0961111159', 'Z310B1', 'BSc in Cyber Security', 4, 'emma.wagner@gmail.com', 'Active'),
  ('Mia', 'James', 'Ward', '00000076', '0961111160', 'W102B1', 'BSc in Agro Forestry', 5, 'mia.ward@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Holmes', '00000077', '0961111161', 'X307A3', 'BSc in Sustainable Agriculture', 1, 'liam.holmes@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Mills', '00000078', '0961111162', 'Y402A3', 'BSc in Animal Science', 2, 'olivia.mills@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Cole', '00000079', '0961111163', 'Z402A4', 'BSc in Cyber Security', 3, 'noah.cole@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Hale', '00000080', '0961111164', 'W107A4', 'BSc in Sustainable Agriculture', 4, 'emma.hale@gmail.com', 'Active'),
  ('Mia', 'James', 'Ray', '00000081', '0961111165', 'X203B2', 'BSc in Fisheries and Aquaculture', 5, 'mia.ray@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Dean', '00000082', '0961111166', 'Y401B4', 'BSc in ICT with Education', 1, 'liam.dean@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Dunn', '00000083', '0961111167', 'Z310B3', 'BSc in Agro Forestry', 2, 'olivia.dunn@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Lloyd', '00000084', '0961111168', 'W105B1', 'BSc in Sustainable Agriculture', 3, 'noah.lloyd@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Franklin', '00000085', '0961111169', 'X206A1', 'BSc in Animal Science', 4, 'emma.franklin@gmail.com', 'Active'),
  ('Mia', 'James', 'Austin', '00000086', '0961111170', 'Y303B2', 'BSc in Cyber Security', 5, 'mia.austin@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Gordon', '00000087', '0961111171', 'Z401A2', 'BSc in Agro Forestry', 1, 'liam.gordon@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Craig', '00000088', '0961111172', 'W109B3', 'BSc in Sustainable Agriculture', 2, 'olivia.craig@gmail.com', 'Active'),
  ('Noah', 'Ella', 'May', '00000089', '0961111173', 'X201A2', 'BSc in Fisheries and Aquaculture', 3, 'noah.may@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Chavez', '00000090', '0961111174', 'Y204A1', 'BSc in Animal Science', 4, 'emma.chavez@gmail.com', 'Active'),
  ('Mia', 'James', 'Watkins', '00000091', '0961111175', 'Z404B1', 'BSc in Cyber Security', 5, 'mia.watkins@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Bates', '00000092', '0961111176', 'W103B3', 'BSc in Agro Forestry', 1, 'liam.bates@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Perry', '00000093', '0961111177', 'X206A3', 'BSc in Sustainable Agriculture', 2, 'olivia.perry@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Buchanan', '00000094', '0961111178', 'Y402A4', 'BSc in Animal Science', 3, 'noah.buchanan@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Burgess', '00000095', '0961111179', 'Z402A3', 'BSc in Cyber Security', 3, 'emma.burgess@gmail.com', 'Active'),
  ('Mia', 'James', 'Horton', '00000096', '0961111180', 'W107A4', 'BSc in Sustainable Agriculture', 4, 'mia.horton@gmail.com', 'Active'),
  ('Liam', 'Ava', 'Diaz', '00000097', '0961111181', 'X203B1', 'BSc in Fisheries and Aquaculture', 5, 'liam.diaz@gmail.com', 'Active'),
  ('Olivia', 'Ethan', 'Thornton', '00000098', '0961111182', 'Y401B3', 'BSc in Cyber Security', 5, 'olivia.thornton@gmail.com', 'Active'),
  ('Noah', 'Ella', 'Richardson', '00000099', '0961111183', 'Z310B2', 'BSc in Agro Forestry', 1, 'noah.richardson@gmail.com', 'Active'),
  ('Emma', 'Liam', 'Wheeler', '00000100', '0961111184', 'W102B1', 'BSc in Sustainable Agriculture', 2, 'emma.wheeler@gmail.com', 'Active');
 
*/
