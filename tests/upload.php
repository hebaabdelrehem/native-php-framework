<?php
include 'starter.php';
if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
	$up_path = $_POST['path'];
	$upload = $upload -> uploadfile($_FILES['file']['tmp_name'], $_FILES['file']['name'], $_FILES['file']['type'], $_FILES['file']['size'], $up_path);

	if ($upload['res'] == "done") {
		$filename = $upload['filename'];
		exit('success');
	} elseif ($upload['res'] == "invalidfile") {exit('invalidfile');
	} elseif ($upload['res'] == "maxsize") {exit('maxsize');
	} else
		echo "error upload";

}
?>
<html>
<head>
<script src="templates/js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script type="text/JavaScript" src="a.js"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data" id="formup">
	<input name="path" type="text" />
	<input name="file" id="FileInput" type="file" />
	<input type="submit"  id="submit" value="Upload" />
</form>
<div id="res"></div>
</body></html>