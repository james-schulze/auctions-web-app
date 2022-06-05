CREATE DATABASE fao;

DB User ID & Password located ./www-cgi/database.php

**Ads will default to run for 30 days to change to 10Years "UPDATE adbuy SET end = '1917544953';

**Ads will auto populate in the DB first time the app runs

CREATE TABLE ads (
adi bigint(255) AUTO_INCREMENT PRIMARY KEY,
uid bigint(255),
ciri varchar(255),
url varchar(255),
imglnk1 varchar(255),
updated timestamp,
created datetime
);

CREATE TABLE adbuy (
adi bigint(255),
uid bigint(255),
response varchar(255),
start bigint(255),
end bigint(255),
updated timestamp,
created datetime
);

CREATE TABLE auctions (
aid bigint(255),
uid bigint(255),
wid bigint(255),
title varchar(255),
description text,
price decimal(13,2),
bids decimal(13,2),
buyit decimal(13,2),
reserve decimal(13,2),
duration bigint(255),
start bigint(255),
mcat int(6),
scat int(6),
fcat int(6),
updated timestamp,
created datetime
);

CREATE TABLE bids (
aid bigint(255),
uid bigint(255),
bidamt decimal(13,2),
bidttl decimal(13,2),
created timestamp
);

CREATE TABLE buychat (
aid bigint(255),
uid bigint(255),
sid bigint(255),
mssgb varchar(255),
mssgbid bigint(255),
mssgs varchar(255),
mssgsid bigint(255),
plink varchar(255),
slink varchar(255),
bfeed varchar(255),
sfeed varchar(255),
created timestamp
);

CREATE TABLE buys (
aid bigint(255),
uid bigint(255),
sid bigint(255),
accept int(1),
buyamt decimal(13,2),
created timestamp
);

CREATE TABLE chat (
cid bigint(255),
uid bigint(255),
mssg varchar(255),
created timestamp
);

CREATE TABLE chatbuy (
cid bigint(255),
uid bigint(255),
room bigint(255),
created timestamp
);

CREATE TABLE chatrooms (
cid bigint(255),
cat int(6),
img varchar(255),
room varchar(255),
created datetime
);

CREATE TABLE images (
aid bigint(255),
image1 blob,
image2 blob,
image3 blob,
image4 blob,
image5 blob
);

CREATE TABLE imglnk (
aid bigint(255),
imglnk1 varchar(255),
imglnk2 varchar(255),
imglnk3 varchar(255),
imglnk4 varchar(255),
imglnk5 varchar(255)
);

CREATE TABLE reviews (
aid bigint(255),
uid bigint(255),
sid bigint(255),
breview varchar(255),
sreview varchar(255),
updated timestamp,
created datetime
);

CREATE TABLE users (
id bigint(255) AUTO_INCREMENT PRIMARY KEY,
user varchar(255),
ali varchar(255),
rev bigint(255),
passwd varchar(255),
skey varchar(255),
mtime bigint(255),
updated timestamp,
created datetime
);

CREATE TABLE user_pay (
uid bigint(255),
reciept varchar(255),
created datetime
);





ON auctionContainer
&& AuctionTV
	scrollbar-color: #000000 #000000;
	scrollbar-arrow-color: #FFFFFF;



CREATE TABLE test (
id int(255) AUTO_INCREMENT PRIMARY KEY,
data varchar(255),
time timestamp
);


AD START:: 1606504953 2020
AD END:: 1917544953 2030

DURATION 10 YRS:: 311040000

320856676 HOTEL LOBBY
427605729 HOOKA LOUNGE
260378078 DUVAL STREET
294103304 STAPLES CENTER
211663712 SOHO DISTRICT
340606648 CLUB DUBAI
918776718 LONDON FOLLIES
70474403 RED SQUARE
151616707 HONG KONG
955299353 DOWN UNDER
981002184 THE GALLERIA
926242046 EAST BERLIN
277356660 ST TROPEZ

$$$PAY$$$ROOMS$$$
cat666

999554329 TEMPTATION ISLAND
567840926 SEXY SINGLES
363543290 VOODOO LOUNGE
143489553 VIPER ROOM
239914410 FIGHT CLUB
395805867 TREASURE ISLAND
477906357 HOTEL ZAZA
52593788 RED LIGHT DISTRICT
497223002 MONTE CARLO

**CHAT OPTIONS
echo(random_int(999999,999999999));
**CHAT OPTIONS

$$$**CHAT ^ CHAT ^ CHAT

$$$**PAY OPTIONS (CHATROOMS, ALIAS?, ADS)

**OPTIMIZE ALL SQL WILD CARDS (WHERE?)

**REVIEWS ON DETAILS PAGE
**auctions.php working on buys page adding alias+reviews to session var
**REVIEWS ON DETAILS PAGE

**CREATE AUCTION LISTING ALERTS & OPTIONS (ie.RENEW, DELETE, ETC...)




*&*&*&*&*&*&*&*&CATEGORIES

*&*&*&*&*&*&*&*&*&*&*&*&*&


.99 CHANGE ALIAS NAME ^^DONE^^

.99 LOOKUP CHAT USERS

.99 ERASE COMMENT

.99 SELL CUSTOM EMOTE DROP

.99s IMAGES 2-5 ^^DONE^^

$99 BANNER ADS 30     ^^DONE^^
 DAY UNLIMITED ROTATION



$("#AuctionTV").append(load("./www-cgi/auctions.php #AuctionListing"));

