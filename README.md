MediaBase
==========

MediaBase is a simple media uploading tool that is meant to be easily installed by novice computer users.

Once installed on a web server, by default, MediaBase is publically available to anyone on the internet to upload files.

Requirements
------------

A basic LAP stack webserver (Linux, Apache, PHP 5.0)

Installation
------------

* Download files in this project (or git clone if you swing that way)
* Upload files to your webserver
* Duplicate & Change includes/config.php.TEMPLATE to includes/config.php
* Set name of occupation and allowable files types in config.php
* Duplicate & Change includes/categires.php.TEMPLATE to includes/categories.php
* Add categories you desire, match syntax
* Make file permissions of /uploads to "writable" or 777
* Add .htaccess to make /uploads folder password protected

Upcoming Features
-----------------
* Ability to add contact information (with an upload)
* Email notifications to admins
* Better browsing / viewing / downloading of uploaded content (perhaps integrate Popcorn.js)

Credits
-------

MediaBase was made by OccupyLabs - Technology, Infrastructure, Systems, and Tools created by and for the Occupy movement!

*Free Software, Fuck Yeah!*