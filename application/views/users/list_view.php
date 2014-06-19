<?php $this->load->view('include/header');?>
 

      
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar">
      
          <ul class="nav nav-sidebar">
            <li class="active"><?php echo anchor('users/', 'Users');?></li>
            <li><?php echo anchor('users/create', 'Add New User');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">Users</h2>  
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                </tr>
              </thead>
              <tbody>
              
				<?php foreach ($users as $user) {?>
					     <tr>
		                  <td><?php echo $user->username; ?></td>
		                  <td><?php echo $user->password; ?></td>
		                </tr>
				<?php } ?>	
              
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
      
    </div>

	    
<?php $this->load->view('include/footer');?>