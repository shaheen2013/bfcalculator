<?php

/*****
*
* @Author: Nasid Kamal.
*
*****/

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<?php echo form_open('user/register',array("class"=>"form-horizontal", "method"=>"post")); ?>
<div class="col-sm-offset-4 col-sm-4">
	<br>
	<h3 class="page-heading"><u>REGISTER TO BF CALCULATOR</u></h3>
	<br>
	<div style="min-height: 50px;">
		<?php

			if(isset($errorMessage) && $errorMessage) {

		?>
			<h5 class="error-message"><?= $errorMessage; ?></h5>

		<?php

			}

		?>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4">Full Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="age" class="col-md-4">Age</label>
		<div class="col-md-8">
			<input type="text" name="age" value="<?php echo $this->input->post('age'); ?>" class="form-control" id="age" />
		</div>
	</div>
	<div class="form-group">
		<label for="sex" class="col-md-4">Sex</label>
		<div class="col-md-8">
			<input type="radio" name="sex" value="M" />&nbsp;&nbsp;<b>MALE</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="F" />&nbsp;&nbsp;<b>FEMALE</b>
		</div>
	</div>
	<div class="form-group">
		<label for="weight" class="col-md-4">Weight</label>
		<div class="col-md-8">
			<input type="text" name="weight" value="<?php echo $this->input->post('weight'); ?>" class="form-control" id="weight" />
		</div>
	</div>
	<div class="form-group">
		<label for="height" class="col-md-4">Height</label>
		<div class="col-md-8">
			<input type="text" name="height" value="<?php echo $this->input->post('height'); ?>" class="form-control" id="height" />
		</div>
	</div>
	<div class="form-group">
		<label for="fitness" class="col-md-4">Fitness</label>
		<div class="col-md-8">
			<input type="text" name="fitness" value="<?php echo $this->input->post('fitness'); ?>" class="form-control" id="fitness" />
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-primary">REGISTER</button>
        </div>
	</div>
</div>

<?php echo form_close(); ?>