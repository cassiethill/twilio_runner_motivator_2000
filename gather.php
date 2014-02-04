<?php
if ($_REQUEST['Digits'] !='1' && $_REQUEST['Digits'] !='2') {
	header('location: callin.php');
	die();
}

header('content-type: text/xml');
echo"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<Response>
	<?php if ($_REQUEST['Digits'] == '1') { ?>
	<Say>Awesome! When I say go, record how far you ran today. Go.</Say>
	<Record maxlength="15" action="recording.php" />
	<?php } else if ($_REQUEST['Digits'] == '2') { ?>
	<Say>I bet you are still in bed. Am I right? Well, you can get up right now, put on your shoes, go out the front door, see the beautiful sunrise, greet your milkman, high five your hot neighbor, rescue a lost kitten before morning traffic starts, and have enough energy to take over the world for the rest of the day. Or, you can stay in bed, and feel guilty, tired, and fat all day. Up to you. NOW GO FOR A RUN.</Say>
	<?php } ?>
</Response>