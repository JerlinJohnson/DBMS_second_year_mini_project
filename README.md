# DBMS_second_year_mini_project
HOSTEL LEAVE MANAGEMENT
The main objective of hostel management system is to decrease the paperwork to the maximum and easier record maintenance by having a separate database system for leave maintenance. This database system basic deals with the record of leaves taken by students staying in hostel of an institution. Students who are in hostel takes leave and  move to their hometown where the student has to fill their details which contains the attributes such as student name, student roll number as primary key, student department name, college mail id of the student, contact information of the student , the year of studying, also the parent contact number of the respective student and residing block of , and then roll number which references the student table, approval of mentor through mail, date of departure, date of arrival, number of days permitted for leave by the mentor and the attribute day is to be checked whether it is a working day or holiday these attribute is to be maintained in the leave management table. The phone number should not be greater than 10. The warden will look for the approval status given by the mentor through this database and permit the exit of the student. The warden table contains the attributes such as the name of the warden, block of the warden, contact number of the warden. The student table should have total participation on warden table.  
With these databases the warden can access the following details  

List of students who have availed leave on a particular date dept wise  

List of students of a particular mentor who have availed leave for a particular date   

List of students have availed the maximum leave dept wise  

Which mentee has availed more than 5 days.  

Which dept students have availed more than 10 days.  

Which dept students availed leave in October months for last 5 years.  

List of mentors who have sanctioned more than 10 days per year for a student.  

List of students who have availed leave in all months in a year.  

Name of the warden who has allowed the students on a particular date.  

List of wardens working for particular year.  

Name of the warden who has worked for more than 5 years  

List floor in-charges if available  

List of students under a floor in-charge   

Parent contact information.  

List of students who came after 7 O clock on a particular date  

With the above database the warden can modify the following details.  

Number of students of A block who are in leave in the month of September.  

Number of students who took leave in weekdays in January month.  

Name of student who took leave in B block due to medical emergencies.  

Number of students who are in leave of academic year 2019.  

Number of students whose native is abroad.  

Constraints   

Roll number and name of the student, parents contact number, students contact number. mail id, residing block, year of studying should not be null in student table.  

Date of departure, date of arrival, reason for leave should not be null.  

Contact number should not be greater than 10.  

Date of arrival should be greater than date of departure.  

Student who has debarred in college cannot stay in hostel.  

Out time cannot exceed 7 o clock.  

Outing date cannot be other days than except Sunday.  

The database has the following schema:  

Student (name, roll number, mail id, department, year, contact, residing block, floor);  

Leave(DOD, DOA, speci_day, approval, rollno,reason,intime,no of days);  

Warden(war_name, year_of_exp, mobile_no, block);  
