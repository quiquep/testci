<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter</title>
   
   <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
   
   <!-- Bootstrap Signin CSS -->
    <link href="<?php echo base_url('/assets/bootstrap/css/signin.css'); ?>" rel="stylesheet">
 </head>
 <body>
 	<div class="container">
 	  
 	  <?php $attributes = array('class' => 'form-signin');?>
	  <?php echo form_open('verifylogin',$attributes); ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        	<?php echo validation_errors(); ?>
        	
        	<?php echo "Username"; ?>: 
	  		<?php echo form_input('username', '','class="form-control"'); ?>
	  		<br/>
      		<?php echo "Password"; ?>: 
	  		<?php echo form_input('password', '','class="form-control"'); ?>
	  		<br/>
        <?php echo form_submit('mysubmit','Login','class="btn btn-lg btn-primary btn-block"');  ?>
        
	<?php echo form_close(); ?>
    </div> <!-- /container -->
 </body>
</html>
