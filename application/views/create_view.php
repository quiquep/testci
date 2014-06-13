<?php include "include/header.php"; ?>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Test</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
    

    
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar">
      
          <ul class="nav nav-sidebar">
            <li><?php echo anchor('events/', 'Events');?></li>
            <li class="active"><?php echo anchor('events/create', 'Add New Event');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          	<h2 class="sub-header"> Add new event</h2>
			<?php echo form_open('events/save'); ?>
		       <?php echo "title"; ?>: 
		       <?php echo form_input('title'); ?>
		       </br>
			   <?php echo "description"; ?>: 
		       <?php echo form_input('description'); ?>
		       </br>
		       <?php echo "datetime"; ?>: 
		       <?php echo form_input('datetime'); ?>	
			   </br>	
			<?php echo form_submit('mysubmit','Submit!');  ?>
			<?php echo form_close(); ?>	
          
          
        </div>
        
      </div>
      
    </div>

<?php include "include/footer.php"; ?>
