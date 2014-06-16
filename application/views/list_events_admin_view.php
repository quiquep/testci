<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/assets/styles/dashboard.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

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
            <li class="active"><?php echo anchor('events/', 'Events');?></li>
            <li><?php echo anchor('events/create', 'Add New Event');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">Events</h2>  
          <div class="table-responsive"> </div>
        </div>
        
      </div>
      
      <div class="row">
       	<span class="event"></span>
      	<ul class="events"></ul>
      </div>
      
    </div>

    
    
    <!-- Templates -->
	<script type="text/template" id="event_template">
  		<tr>
			<td> <%= title %> </td>
  			<td> <%= description %> </td>
		</tr>
	</script>
	
	<script type="text/template" id="event-list-template">          
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody> 
    		<% _.each(events, function(event) { %>
      			<tr>
        			<td><%= event.get('title') %></td>
        			<td><%= event.get('description') %></td>
      			</tr>
    		<% }); %>            
         </tbody>
       </table>
	</script>

	<script src="<?php echo base_url('/js/vendor/jquery-min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/vendor/underscore-min.js'); ?>"></script>	
	<script src="<?php echo base_url('/js/vendor/backbone-min.js'); ?>"></script>	
	
	<!-- Backbone Model, Collections and Views -->
	<script src="<?php echo base_url('/js/backbone/models/event.js'); ?>"></script>
	<script src="<?php echo base_url('/js/backbone/collections/events.js'); ?>"></script>
	<script src="<?php echo base_url('/js/backbone/views/eventsview.js'); ?>"></script>
		    
	<script src="<?php echo base_url('/js/backbone/init.js'); ?>"></script>
	

</body>
</html>