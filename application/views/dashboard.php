<?php include"login/header.php"; 
     $id=$this->session->userdata('user_id');
     //print_r($id->id); ?>
        <?php if($feedback=$this->session->flashdata('feedback')) :
            $feedback_msg=$this->session->flashdata('feedback_msg');
            ?>
            <div class="container w3-padding-32">
            <div class="row">
                <div class="col-sm-8">
                    <div class="alert alert-dismissible <?= $feedback_msg; ?>">
                    <?php echo $feedback ;?>
                    
                    </div>
                    
                </div>
            </div>
            </div>
           
            <?php endif;?>
<div class="container w3-padding-32">
<div class="row">
  <div class="col-md-12">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active">Data</li>
</ol>
  </div>
</div>
<div>
<div class="card border-success mb-3" style="max-width: 200rem;">
  <div class="card-header"><i class="fa fa-2x fa-info-circle">Manage Orders $ Stock</i></div>
  <div class="card-body">
    
    <div class="div-action pull pull-right">
     
     <?= anchor('prd/load_prd_view',' Add Stock',['class'=>'btn btn-outline-success w3-red fa fa-plus-square',])?> <!-- 'data-toggle'=>'modal' -->
      </div>
   
      
    
    <div class="container w3-padding-64">
     <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-5x w3-text-blue fa-fw fa-home"></i>
                
              </div>
              <div class="mr-5">Stock Detail</div>
            </div>
            <?= anchor('prd/stock_list',' View Stock',['class'=>'w3-inverse fa fa-angle-right float-right card-footer text-white clearfix small z-1',])?> 

           </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-chart-bar"></i>
                <span class="glyphicon glyphicon-stats " style="font-size:80px;"></span>
              </div>
              <div class="mr-5">View Assets</div>
            </div>
            <?= anchor('prd/assets',' View Assets',['class'=>'w3-inverse fa fa-angle-right float-right card-footer text-white clearfix small z-1',])?> 
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="fab fa-5x w3-text-red fa-creative-commons-remix"></i>
              </div>
              <div class="mr-5">View Vendors</div>
            </div>
            <?= anchor('prd/vendors','View Vendors',['class'=>'w3-inverse fa fa-angle-right float-right card-footer text-white clearfix small z-1',])?> 
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="fas fa-5x w3-text-green fa-briefcase-medical"></i>

               
              </div>
              <div class="mr-5">Add Sales</div>
            </div>
            <?= anchor('prd/prd_sales','Add Sales',['class'=>'w3-inverse fa fa-angle-right float-right card-footer text-white clearfix small z-1',])?> 
          </div>
        </div>
      </div>
      </div>
  </div>
</div>
</div>
</div>



<div class="container">
<div class="row w3-padding-32">
<div class="col-sm-4">
<?php echo print_r($id->email);?>
</div>
</div>
</div>
        

<?php include"login/footer.php"; ?>

