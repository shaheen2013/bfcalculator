<?php

/*****
*
* @Author: Nasid Kamal.
*
*****/

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html>

	<head>
		<title>BF CALCULATOR</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSS styles -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	    <?= link_tag(base_url('assets/css/styles.css?v=' . time())); ?>

	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>
	
	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
	</body>
</html>
