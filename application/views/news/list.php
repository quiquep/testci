<?php $this->load->view('include/header');?>
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
              <?php foreach ($news as $key=>$value) {?>
                <tr>
                  <td><?php echo $value->title ?></td>
                  <td><?php echo $value->body ?></td>
                </tr>
              <?php }?>     
              </tbody>
           </table>
          </div>
        </div>
        
      </div>
      
    </div>

<?php $this->load->view('include/footer');?>