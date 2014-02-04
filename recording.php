<?php
header('content-type: text/xml');
echo"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<Response>
	<Say>Wow! You ran</Say>
	<Play><?php echo $_REQUEST['RecordingUrl']; ?></Play>
	<Say>You must be a descendant of Hercules. That is so wicked amaze-balls. Don't worry, your hot neighbor saw it all and thinks you are a stud. What a beast! </Say>
	<Say>Same time tomorrow?</Say>
</Response>