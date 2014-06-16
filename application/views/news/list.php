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
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Body</th>
                </tr>
              </thead>
              <tbody>
      				<?php foreach ($news as $element) {?>
                <tr>
                  <td><?php echo $element->title; ?></td>
                  <td><?php echo $element->body; ?></td>
                </tr>
      				<?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
      
    </div>
<?php $this->load->view('include/footer');?>