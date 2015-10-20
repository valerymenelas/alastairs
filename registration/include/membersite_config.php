<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('sulley.cah.ucf.edu/~dig4530c_004/');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('valerymenelas@knights.ucf.edu');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'va634778',
                      /*password*/'49C13AD71D0943A9B0E44FD2D7CAA9D0',
                      /*database name*/'va634778',
                      /*table name*/'alastairgroupusers');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('9VJfRewIwYt0Zga');

?>