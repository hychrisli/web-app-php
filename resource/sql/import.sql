CREATE DATABASE IF NOT EXISTS lamp;
USE lamp;

DROP TABLE IF EXISTS `USER`;
CREATE TABLE `USER`
(
  first_name  varchar(30),
  last_name   varchar(30),
  email       varchar(40),
  address     varchar(100),
  home_phone  varchar(15),
  cell_phone  varchar(15)
);

INSERT INTO `USER`
  (first_name, last_name,address, email, home_phone, cell_phone)
VALUES
  ('Daisy','Saulsberry','7769 Windfall St., Cartersville, GA 30120','kspiteri@verizon.net','(875) 283-6533','(727) 128-6970'),
  ('Tasia','Uhrig','433 Jones Court, Youngstown, OH 44512','syrinx@me.com','(714) 449-6291','(278) 547-7305'),
  ('Albert ','Blaschke','91 Hill Field Avenue, Cincinnati, OH 45211','solomon@yahoo.ca','(970) 156-4910','(772) 999-9773'),
  ('Marquis','Reinhold','392 Yukon Dr., Murfreesboro, TN 37128','quantaman@comcast.net','(185) 782-9454','(206) 723-3820'),
  ('Eliana','Driver','999 Ohio Drive, Allen Park, MI 48101','carroll@hotmail.com','(428) 757-9390','(876) 835-8027'),
  ('Ethelene','Virgin','7891 Highland Avenue, Nutley, NJ 07110','pplinux@icloud.com','(196) 847-8343','(294) 998-8306'),
  ('Shanti','Hutchison ','7972 East Sugar Road, Westerville, OH 43081','dleconte@optonline.net','(879) 918-5081','(949) 485-0474'),
  ('Franklyn','Jansen','9 W. Wagon St., East Brunswick, NJ 08816','bartlett@yahoo.ca','(637) 738-7065','(513) 304-2516'),
  ('Clyde','Sheffey','7638 Winding Way Street, Winona, MN 55987','rasca@mac.com','(860) 955-5953','(881) 614-7153'),
  ('Angla','Charlton','76 Studebaker Ave., Leominster, MA 01453','tromey@att.net','(781) 881-5203','(524) 756-8701'),
  ('Elza','Heilman','52 Arcadia Street, Oshkosh, WI 54901','wilsonpm@mac.com','(537) 596-5945','(842) 303-0198'),
  ('Jessenia','Yokley','277 White Court, Stroudsburg, PA 18360','wildixon@hotmail.com','(976) 805-6244','(701) 323-7682'),
  ('Venessa','Shoulder ','657 Amerige Drive, Mentor, OH 44060','janneh@gmail.com','(538) 783-5653','(292) 709-8127'),
  ('Setsuko','Sirmons','383 Bishop Dr., Saint Louis, MO 63109','pizza@yahoo.com','(637) 804-0246','(751) 839-9744'),
  ('Carleen','Coffelt','9922 St Margarets Dr., Hoffman Estates, IL 60169','rogerspl@sbcglobal.net','(391) 894-6065','(959) 291-8738'),
  ('Sheryll','Coan','33 Grove Ave., Maplewood, NJ 07040','jfreedma@yahoo.com','(550) 847-5663','(703) 275-5672'),
  ('Annalisa','Mosely','9831 Rockville Dr., Moorhead, MN 56560','jbailie@me.com','(633) 570-0857','(160) 149-2643'),
  ('Shawnee','Froelich','8692 4th Street, Mentor, OH 44060','chlim@msn.com','(853) 969-2489','(964) 453-7278'),
  ('Un','Orner','9255 N. Hudson Drive, Naples, FL 34116','moonlapse@mac.com','(762) 874-6882','(982) 635-9843'),
  ('Nora','Fairbank','7947 NW. Cedar Swamp Court, Natick, MA 01760','geeber@optonline.net','(596) 595-0543','(606) 344-7146');