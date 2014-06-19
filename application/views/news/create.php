<?php $this->load->view('include/header');?>

	<div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar">
      
          <ul class="nav nav-sidebar">
          	<li><?php echo anchor('news/', 'News');?></li>
            <li class="active"><?php echo anchor('news/add_news', 'Add News');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          	<h2 class="sub-header"> Add News</h2>
			<?php echo form_open('news/create'); ?>
		       <lable>Title</label>
		       <?php echo form_input('title','','class="form-control"'); ?>
		       </br>
			   <lable>Body</label>
		       <?php echo form_textarea('body','','class="form-control"'); ?>
		       </br>
			<?php echo form_submit('mysubmit','Submit','class="btn btn-info"');  ?>
			<?php echo form_close(); ?>	
        </div>
        
      </div>
      
    </div>

<?php $this->load->view('include/footer');?>
