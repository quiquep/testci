<?php include "include/header.php"; ?>
 

      
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar">
      
          <ul class="nav nav-sidebar">
            <li class="active"><?php echo anchor('events/', 'Events');?></li>
            <li><?php echo anchor('events/create', 'Add New Event');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">Events</h2>  
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>When</th>
                </tr>
              </thead>
              <tbody>
              
				<?php foreach ($events as $event) {?>
					     <tr>
		                  <td><?php echo $event->title; ?></td>
		                  <td><?php echo $event->description; ?></td>
		                  <td><?php echo $event->datetime->format('Y-m-d'); ?></td>
		                </tr>
				<?php } ?>	
              
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
      
    </div>

	    
<?php include "include/footer.php"; ?>