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
            <li class="active"><?php echo anchor('news/', 'News');?></li>
            <li><?php echo anchor('news/add_news', 'Add News');?></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h2 class="sub-header">News</h2>
        	<div class="carousel-container"></div>
        </div>
      </div>    
    </div>
	
	<script type="text/template" id="news-list-template">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
			<% _.each(news, function(model, idx) { %>
		        <% if(idx === 0) { %>
		            <li data-target="#myCarousel" data-slide-to="<%= idx %>" class="active"></li>
		        <% } else { %>
		        	<li data-target="#myCarousel" data-slide-to="<%= idx %>"></li>
		        <% } %>
		    <% }); %>
		    </ol>
			<div class="carousel-inner">
			<% _.each(news, function(model, idx) { %>
				<% if(idx === 0) { %>
					<div class="item active">
				<% } else { %>
					<div class="item">
				<% } %>
						<img src="<?php echo base_url('/assets/images/bg.jpg'); ?>">
						<div class="carousel-caption">
							<h3><%= model.get('title') %></h3>
							<p><%= model.get('body') %></p>
						</div>
					</div>
			<% }); %>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
        </div>
	</script>

	<script src="<?php echo base_url('/js/vendor/jquery-min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/vendor/underscore-min.js'); ?>"></script>	
	<script src="<?php echo base_url('/js/vendor/backbone-min.js'); ?>"></script>	
	
	<!-- Backbone Model, Collections and Views -->
	<script src="<?php echo base_url('/js/backbone/models/news.js'); ?>"></script>
	<script src="<?php echo base_url('/js/backbone/collections/news_collection.js'); ?>"></script>
	<script src="<?php echo base_url('/js/backbone/views/newsview.js'); ?>"></script>
		    
	<script src="<?php echo base_url('/js/backbone/init_news.js'); ?>"></script>
	

</body>
</html>