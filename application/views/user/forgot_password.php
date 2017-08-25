<?php

/*****
*
* @Author: Nasid Kamal.
*
*****/

defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php echo form_open('user/forgot_password',array("class"=>"form-horizontal", "method"=>"post")); ?>
<div class="col-sm-offset-4 col-sm-4">
	<br>
	<h3 class="page-heading">RECOVER FORGOTTEN PASSWORD</h3>
	<br>
	<b>ENTER YOUR EMAIL: </b> <input type="text" name="fp_email" id="fp_email">
	<br>
	<br>
	<button type="submit" class="btn btn-info">CONFIRM EMAIL</button>
</div>
<?php echo form_close(); ?>