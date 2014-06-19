<?php include "include/header.php"; ?>

	
	 <link href="<?php echo base_url('/assets/bootstrap/css/datepicker.css'); ?>" rel="stylesheet">
	
        
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
		       <?php echo form_input('title', '','class="form-control"'); ?>
		       </br>
			   <?php echo "description"; ?>: 
		       <?php echo form_input('description', '','class="form-control"'); ?>
		       </br>
		       <?php echo "datetime"; ?>: 
		       <input class="datepicker form-control" name="datetime" data-date-format="dd/mm/yyyy">
			   </br>	
			<?php echo form_submit('mysubmit','Submit','class="btn btn-info"');  ?>
			<?php echo form_close(); ?>	
          
          
        </div>
        
      </div>
      
    </div>
    
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/js/vendor/jquery-min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap-datepicker.js'); ?>"></script>
    <script type="text/javascript">
    	$('.datepicker').datepicker()
	</script>

<?php include "include/footer.php"; ?>
