CSSS Webpage
============

Overview
--------

The CSSS Website uses a MVC framework called CakePHP(link and docs found below).

Now we don't follow a typical MVC setup. The reason lies between the constantly changing hands behind the website. 
Obviously every CSSS member will have a different learning curve, and different knowledge and it's hard to 
continue to maintain the same website year after year when the knowledge gets foggier.

Technical Aspect
----------------

To combat this, the MVC setup we came up with is more of a very seperated M-VC

The code on this github page is the View and Controller portion while our Model is supplied from google drive.

We chose google drive as the model because everyone at the university level understands how to edit a spreadsheet
more than PHP code.

To re-iterate:

* Model : "dynamic" content is supplied from these google spreadsheets
* Controller : Accesses the google spreadsheets and re-arranges and processes the data to fit out site (ex: download pics, combine fields)
* View : Takes always static data (like header/footers) and mixes in the "dynamic" data from the Controller

Pages and where to edit them:
-----------------------------

[Current Execs](http://csss.usask.ca/current-execs.php)
-------------------------------------------------------

* Model: CSSS Google drive under the path "Website/Current Execs"
* View : CakePHP code under "app/View/CurrentExecs/index.ctp"
* Controller: CakePHP code under "app/Controller/CurrentExecsController.php"

Basic Idea: 

The model holds 3 column rows: 
* Title
* Name
* Picture URL
 
The controller accesses the this raw data and spit it out the view. Pretty simple.

[Career Fair](http://csss.usask.ca/career-fair.php)
-------------------------------------------------------

* Model: CSSS Google drive under the path "Website/Current Career Fair", "Schedule" tab.
* View : CakePHP code under "app/View/CareerFair/index.ctp"
* Controller: CakePHP code under "app/Controller/CareerFairController.php"

Basic Idea: 

The Schedule tab holds 6 column rows: 
* <b>Start Time</b> -- Start time for presentation
* <b>End Time</b>   -- End time for presentation
* <b>Company</b>    -- Company name
* <b>Location</b>   -- Location for presentation
* Sponsor package   -- Sponsor package they chose (editable later.)
* Description       -- Company description

 
The controller accesses the this raw data and spit it out the view.

One thing to note about this, the sponsor package is a PHP array inside the CareerFairController. 
The array holds package names in prestiage order (aka Platinum shows up before Gold, Gold shows up before Silver, etc)


Some Handy Links
----------------

[![CakePHP](http://cakephp.org/img/cake-logo.png)](http://www.cakephp.org) [CakePHP](http://www.cakephp.org) - The rapid development PHP framework

[Cookbook](http://book.cakephp.org) - THE Cake user documentation; start learning here!

[Plugins](http://plugins.cakephp.org/) - A repository of extensions to the framework

[The Bakery](http://bakery.cakephp.org) - Tips, tutorials and articles

[API](http://api.cakephp.org) - A reference to Cake's classes

[CakePHP TV](http://tv.cakephp.org) - Screen casts from events and video tutorials

[The Cake Software Foundation](http://cakefoundation.org/) - promoting development related to CakePHP

Get Support!
------------

[Our Google Group](http://groups.google.com/group/cake-php) - community mailing list and forum

[#cakephp](http://webchat.freenode.net/?channels=#cakephp) on irc.freenode.net - Come chat with us, we have cake.

[Q & A](http://ask.cakephp.org/) - Ask questions here, all questions welcome

[Lighthouse](http://cakephp.lighthouseapp.com/) - Got issues? Please tell us!

[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](http://travis-ci.org/cakephp/cakephp)

![Cake Power](https://raw.github.com/cakephp/cakephp/master/lib/Cake/Console/Templates/skel/webroot/img/cake.power.gif)
