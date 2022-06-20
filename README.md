# thecoolpals

Jun 10 - 2022
+ CodeIgniter3 Initialized
+ Started initial stations (Baclaran, EDSA, Libertad)
+ Added SQL file for database

Jun 11 - 2022
+ .htaccess file
+ css folder - styles.css
+ updated sql file
+ VIEWS for ff stations: Baclaran/EDSA/Libertad
+ partial CONTROLLERS for the ff stations: Baclaran/EDSA/Libertad 
+ MODEL for stations added
+ Tweaked dropdown box for changing Stations
+ Templates folder (header/footer)

Jun 15 - 2022 5:17 
+stations/stationview
+stations/stationforms
+stationforms connected to db
+stations_model new function "saverecord"
+controller newfunction "stationforms"
Issues:
- Time from SQL Database cannot be displayed
-change stationArrive value to varchar
- countdown clock function is still not accessible
-need new logic for timeNow - stationArrive (value of 2 data are not compatible for now, thinking for setting  stationArrive along with timeNow to have a function that'll transform it to total seconds so it can be deducted to each other.)

Jun 20 - 2022 4:27
+changed stations/stationview to update page
+station_model and stations new functions for updates
+currenterror
    "error Number: 1064

    You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near     '-'6:16' where stationId='1'' at line 1
    update form SET stationArrive-'6:16' where stationId='1'

    Filename: C:/xampp/htdocs/softeng/system/database/DB_driver.php
    Line Number: 692"
whenever i press update, the datas are being accessed right but cant be passed to the db
+things to do, update, id fetching++single data fetching, logic for countdown timer