<!DOCTYPE html>
<html>
	<head>
		<style>
			img { width: 49%; }
		</style>
	</head>
<body>

<?php
	$allowedDirs = array("screens/full/", "screens/300x225/", "panos/16x10_2560_q90/", "panos/FULL_q70/");
	$dir = $allowedDirs[0];
	foreach ($allowedDirs as $val) {
		if (isset($_GET[$val]))
			$dir = $val;
	}
	
	if ($handle = opendir($dir)) {
		while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != "..") {
				echo "\n<img src='".$dir.$file."'>";
			}
		}
		closedir($handle);
	}
?>

</body>
</html>
