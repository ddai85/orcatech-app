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
 - MYSQL (JawsDB free remote service)
 - Materialize-CSS (Styling)


#Directions to run development version of the app
 - Clone repo directory to somewhere accessible by Apache server
 - Install NPM and Composer dependency package managers
 - Run 'npm install' inside root directory
 - Run 'php composer.phar install' inside root directory
 - Open App by directing browser to localhost (or wherever Apache is set up to run)
