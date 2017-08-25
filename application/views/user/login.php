<?php

/*****
*
* @Author: Nasid Kamal.
*
*****/

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<?php echo form_open('user/login',array("class"=>"form-horizontal")); ?>
<div class="col-sm-offset-4 col-sm-4">
	<br>
	<h4 class="page-heading">LOGIN to BF CALCULATOR</h4>
	<br>
	<div class="form-group">
		<label for="email" class="col-md-4">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">LOG IN</button>
        </div>
	</div>
</div>

<?php echo form_close(); ?>