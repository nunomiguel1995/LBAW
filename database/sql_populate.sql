ALTER SEQUENCE "appUser_idUser_seq" RESTART WITH 1;
ALTER SEQUENCE "city_idCity_seq" RESTART WITH 1;
ALTER SEQUENCE "companyInfo_idInfo_seq" RESTART WITH 1;
ALTER SEQUENCE "contactList_idList_seq" RESTART WITH 1;
ALTER SEQUENCE "country_idCountry_seq" RESTART WITH 1;
ALTER SEQUENCE "doc_idDoc_seq" RESTART WITH 1;
ALTER SEQUENCE "event_idEvent_seq" RESTART WITH 1;
ALTER SEQUENCE "location_idLocation_seq" RESTART WITH 1;
ALTER SEQUENCE "message_idMessage_seq" RESTART WITH 1;
ALTER SEQUENCE "pollOption_idOption_seq" RESTART WITH 1;
ALTER SEQUENCE "poll_idPoll_seq" RESTART WITH 1;
ALTER SEQUENCE "postComment_idComment_seq" RESTART WITH 1;
ALTER SEQUENCE "post_idPost_seq" RESTART WITH 1;

insert into country (name) values ('Finland');
insert into country (name) values ('United States');
insert into country (name) values ('Indonesia');

insert into city (name, "idCountry") values ('Shangbahe', 2);
insert into city (name, "idCountry") values ('Gwaram', 3);
insert into city (name, "idCountry") values ('Şafwá', 1);
insert into city (name, "idCountry") values ('Bulualto', 1);

insert into location ("idCity", address) values (2, '940 Debra Way');
insert into location ("idCity", address) values (1, '458 Saint Paul Hill');
insert into location ("idCity", address) values (4, '17910 Vera Park');
insert into location ("idCity", address) values (3, '497 Meadow Vale Circle');


insert into "companyInfo" (department, position) values ('Marketing', 'Junior Executive');
insert into "companyInfo" (department, position) values ('Legal', 'VP Marketing');
insert into "companyInfo" (department, position) values ('Training', 'Senior Sales Associate');
insert into "companyInfo" (department, position) values ('Sales', 'Office Assistant II');
insert into "companyInfo" (department, position) values ('Marketing', 'Environmental Specialist');
insert into "companyInfo" (department, position) values ('Sales', 'Office Assistant IV');
insert into "companyInfo" (department, position) values ('Business Development', 'Professor');
insert into "companyInfo" (department, position) values ('Sales', 'Nurse');
insert into "companyInfo" (department, position) values ('Engineering', 'Product Engineer');
insert into "companyInfo" (department, position) values ('Accounting', 'VP Quality Control');
insert into "companyInfo" (department, position) values ('Services', 'Senior Developer');
insert into "companyInfo" (department, position) values ('Business Development', 'VP Sales');
insert into "companyInfo" (department, position) values ('Engineering', 'Assistant Professor');
insert into "companyInfo" (department, position) values ('Product Management', 'Senior Quality Engineer');
insert into "companyInfo" (department, position) values ('Human Resources', 'Actuary');

insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Carolyn Griffin', 'cgriffin0@senate.gov', 'cgrifeffin0', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 4, 'Director');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Sharon Riley', 'sriley1@exblog.jp', 'sriley1', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 3, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Carl Vasquez', 'cvasquez2@ucoz.ru', 'cvasquez2', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 13, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Wayne Gilbert', 'wgilbert3@jalbum.net', 'wgilbert3', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 8, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Judith Green', 'jgreen4@sun.com', 'jgreen4', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 1, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Albert Powell', 'apowell5@thetimes.co.uk', 'apowesdfgrell5', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 9, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Randy Hill', 'rhill6@istockphoto.com', 'rhill6', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 15, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Michelle Coleman', 'mcoleman7@paginegialle.it', 'mcoleman7', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 10, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Sharon Payne', 'spayne8@auda.org.au', 'spayne8', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 5, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Jean Thomas', 'jthomas9@cyberchimps.com', 'jthomweg34as9', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 7, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Lois Medina', 'lmedinaa@csmonitor.com', 'lmedi234naa', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 13, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Todd Austin', 'taustinb@dion.ne.jp', 'taustferw3inb', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 2, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Melissa Fisher', 'mfisherc@narod.ru', 'mfiswerf3herc', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 12, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Teresa Garza', 'tgarzad@washington.edu', 'tgarf3frzad', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 1, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Jean Hawkins', 'jhawkinse@shutterfly.com', 'jhawkinse', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 10, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Jeffrey Stone', 'jstonef@chronoengine.com', 'jstof3ef3nef', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 15, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Joseph Bowman', 'jbowmang@example.com', 'jbowm34tferfang', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 7, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Jesse Griffin', 'jgriffinh@about.me', 'jgriffinh', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 11, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Jerry Richardson', 'jrichardsoni@joomla.org', 'jrichardsoni', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 6, 'Collaborator');
insert into "appUser" (name, email, username, password, "idInfo", "user_type") values ('Emily Edwards', 'eedwardsj@live.com', 'eedwardsj', '$2y$12$uIhhpE2Hq9aqNtOUYd2Uz.TvrWekat.8y9NlgGEO0lHN8H/xOnAL6', 14, 'Collaborator');

insert into event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type") values ('Product Delivery Meeting', '2017/06/10', '20:36', 'Room 34', 4, NULL, false, 1, 'Meeting');
insert into event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type") values ('Outsystems', '2017/12/14', '15:56', 'WA', 4, 'Main Room', true, 1, 'Workshop');
insert into event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type") values ('Christmas Dinner', '2017/12/23', '14:16', 'Chez Nos', 4, 'Bring gifts to your secret santa!', true, 1, 'SocialGathering');
insert into event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type") values ('AI: a step into the future', '2017/07/3', '20:08', 'Auditorium', 4, 'Doctor HLC talks about the future of AI', true, 1, 'Lecture/Conference');
insert into event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type") values ('Eventerpreneur Launch', '2017/06/02', '9:22', 'B001', 4, 'Presentation of the event manager app Eventerpreneur', false, 1, 'KickOff');
