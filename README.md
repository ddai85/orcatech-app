# orcatech-app
A quick app made for ORCATECH job application

A fully deployed version of the app is available at: https://orcatech-app.herokuapp.com/
Performance may be slow due to servers being a free service

#User Requirements:
 - Display, Add and remove items in a table using ReactJS, WebPack and PHP
 - The table should have:
  - column id (primary key)
  - name
  - model
  - mac address
 - Populate its initial set of 10 rows using an ajax request

 - Bonus points for adding column sorting, searching and other features.

#Technology Stack
 - ReactJS (Front end)
 - PHP with Slim PHP Library (Server)
 - SQLITE with PDO (Database)
 - Materialize-CSS (Styling)


#Directions to run development version of the app
 - Place wwwroot folder into directory accessible by Apache server
 - Install NPM and Composer dependency package managers
 - Run 'npm install' inside wwwroot directory
 - Run 'php composer.phar install' inside wwwroot directory
 - Confirm that /database/api_db.db directory and file are both Read/Write access to http requests (or everyone)
 - Open App by directing browser to localhost (or whereever Apache is set up to run)
