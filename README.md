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
