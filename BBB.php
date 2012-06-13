<?php

$IP = 'yy.yy.xx.xxx';  // Server IP where BigBlueButton (BBB) Installed
$Port = 81;  // Server port to BBB i.e. 81

// Method: create - To create meeting
$string = "createname=Test+Meeting&meetingID=accounts123&attendeePW=accounts123&moderatorPW=accounts123";
$salt = "XYBGDRYUOPLJMAWDGNHYDFFGHGJJ435D";  // security salt for BBB & API
$sha = sha1($string.$salt);

$link = "name=Test+Meeting&meetingID=accounts123&attendeePW=accounts123&moderatorPW=accounts123&checksum=".$sha;

?>

<a href="http://<?php echo $IP; ?>:<?php echo $Port; ?>/bigbluebutton/api/create?<?php echo $link; ?>">Create Meeting</a><br><br>


<?php

// Method: join - To join meeting
$string = "joinfullName=Joe+User&meetingID=accounts123&password=accounts123";
$salt = "XYBGDRYUOPLJMAWDGNHYDFFGHGJJ435D";
$sha = sha1($string.$salt);

$link = "fullName=Joe+User&meetingID=accounts123&password=accounts123&checksum=".$sha;

?>

<a href="http://<?php echo $IP; ?>:<?php echo $Port; ?>/bigbluebutton/api/join?<?php echo $link; ?>">Join Meeting</a><br><br>


<?php

// Method: join - To join meeting as username
$string = "joinfullName=Sandeep&meetingID=accounts123&password=accounts123";
$salt = "XYBGDRYUOPLJMAWDGNHYDFFGHGJJ435D";
$sha = sha1($string.$salt);

$link = "fullName=Sandeep&meetingID=accounts123&password=accounts123&checksum=".$sha;

?>

<a href="http://<?php echo $IP; ?>:<?php echo $Port; ?>/bigbluebutton/api/join?<?php echo $link; ?>">Join Meeting as sandeep</a><br><br>


<?php

// Method: isMeetingRunning - To check meeting is active/running
$string = "isMeetingRunningmeetingID=accounts123";
$salt = "XYBGDRYUOPLJMAWDGNHYDFFGHGJJ435D";
$sha = sha1($string.$salt);

$link = "meetingID=accounts123&checksum=".$sha;

?>

<a href="http://<?php echo $IP; ?>:<?php echo $Port; ?>/bigbluebutton/api/isMeetingRunning?<?php echo $link; ?>">Check Meeting Running</a><br><br>

