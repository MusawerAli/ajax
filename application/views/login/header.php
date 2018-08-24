<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <!-- 
          
          css files  
        
        -->
        <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 

         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/w3.css"> 

         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/font-awesome.min.css"> 

         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/bootstrap-glyphicons.css"> 

         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/jquery-ui.css"> 

         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/font-awesome.min.css"> 

         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.css"> 
         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/all.css"> 


       


        <!--

          js files
          
           -->
           <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/jquery.min.js"></script> 

          <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/jquery-1.12.4.js"></script> 

          <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/popper.min.js"></script> 

          <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/jquery-ui.js"></script> 

          <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/jquery-3.3.1.slim.min.js"></script>

          <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>assets/js/bootstrap.min.js"></script> 

        



        <!-- 
          
          CDN FILES
        
         -->
        
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
    
       <link href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
<style>

body {font-family: "Open Sans"}
</style>
    <?php $id=$this->session->userdata('user_id');
      if($id){
    ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        
                        <?= anchor('admin/dashboard',' Dashboard',['class'=>'nav-link fa fa-dashboard w3-text-red'])?>
                      </li>
                      <li class="nav-item dropdown" >
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" style="font-size:15px"></i> Category</a>
                          <div class="dropdown-menu w3-white" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);font-size:15px">
                            
                            <?= anchor('prd/stock_list',' view Stock',['class'=>'fa fa-1x fa-home w3-text-blue dropdown-item'])?>
                            <?= anchor('prd/assets',' view Assets',['class'=>'fa fa-chart-bar w3-text-orange dropdown-item'])?>
                            <?= anchor('prd/vendors',' view vendors',['class'=>'fab fa-1x w3-text-red fa-creative-commons-remix dropdown-item'])?>
                            <?= anchor('prd/prd_sales',' Add Sales',['class'=>'fas fa fa-briefcase-medical w3-text-green dropdown-item'])?>
                            
                            
                            
                          </div>
                        </li>


                

                      <li class="nav-item">
                        <a class="nav-link " href="#" ><i class="glyphicon glyphicon-calendar" style="font-size:15px"></i>Report</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">

                   <?= anchor('login/logout','LogOut',['class'=>'nav-link  glyphicon glyphicon-log-out'])?> <!--,'data-toggle'=>'modal'-->
                         
                          </form>
                    
                  </div>
                </nav>
      <?php }?> 
    <body>
        
    