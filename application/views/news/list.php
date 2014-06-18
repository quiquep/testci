<?php $this->load->view('include/header');?>    

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

          <div class="carousel-container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php foreach ($news as $key=>$value) {
                  if ( $key == 0 ){?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="active"></li>
                  <?php } else {?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>"></li>
                  <?php } ?>
                <?php } ?>  
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php foreach ($news as $key=>$value) {
                  if ( $key == 0 ){?>
                    <div class="item active">
                  <?php } else {?>
                    <div class="item">
                  <?php } ?>
                    <img src="<?php echo base_url('/assets/images/bg.jpg'); ?>">
                    <div class="carousel-caption">
                        <h3><?php echo $value->title; ?></h3>
                        <p><?php echo $value->body; ?></p>
                    </div>
                </div>
                <?php } ?>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>  

      </div>
    </div>
<?php $this->load->view('include/footer');?>