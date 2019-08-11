<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<?php echo $t->id ?>
	
	<?php
	echo form_open_multipart(site_url("image/multiple_upload/{$t->id}" ));
		
	echo form_label('Multiple Upload File');
	echo form_upload('file[]', null, 'multiple');
	echo form_submit(null, 'Upload');
	echo form_close();
	?>
</body>
</html>