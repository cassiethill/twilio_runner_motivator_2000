<?php
header('content-type: text/xml');
echo"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<Response>
	<Say>Hey there, rockstar. Have you gone for a run yet today?</Say>
	<Gather numDigits="1" action="gather.php" method="POST">
		<Say>If yes, press 1, If not, press 2.</Say>
	</Gather>
</Response>