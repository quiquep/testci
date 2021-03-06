<?php $this->load->view('include/header');?>

    <div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar">
      
          <ul class="nav nav-sidebar">
            <li><?php echo anchor('users/', 'Users');?></li>
            <li class="active"><?php echo anchor('users/create', 'Add New User');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          	<h2 class="sub-header"> Add new user</h2>
			<?php echo form_open('users/save'); ?>
			   <?php echo validation_errors('<div class="error">', '</div>'); ?>
		       <?php echo "Username"; ?>: 
		       <?php $attributes = array(
		       					'value' => set_value('username'),
		       					'name'  => 'username',	
		       					'class' => 'form-control',
		       					);?>
		       <?php echo form_input($attributes); ?>
		       </br>
			   <?php echo "Password"; ?>:
			   <?php $attributesPassword = array(
		       					'value' => set_value('password'),
		       					'name'  => 'password',	
		       					'class' => 'form-control',
		       					);?> 
		       <?php echo form_password($attributesPassword); ?>
		       </br>
		    <?php echo form_submit('mysubmit','Submit','class="btn btn-info"');  ?>
			<?php echo form_close(); ?>	
          </div>
       </div>
     </div>
   
<?php $this->load->view('include/footer');?>
