<?php include"login/header.php"; 

     $id=$this->session->userdata('user_id'); ?>

    <script>

        $(document).ready(function(){
            $("#mytable").dataTable();
        });

    </script>
    
            <div class="container-fluid w3-padding-32">
                <div class="card border-primary mb-6 sm-6" style="max-width: 200rem;">
            <div class="card-header w3-center"> <span class="w3-center"> <i class="fa  fa-2x fa-bar-chart w3-text-yellow" ></i> Stock List</span> </div>
            
            <div class="card-body">
            <?= form_open('prd/search_prd',['class'=>'form-inline my-2 my-lg-0 w3-right'])?>
      <input class="form-control mr-sm-2" name='query' placeholder="Search" type="text">
      
      <button class="btn btn-secondary my-2 my-sm-0 fab  fa-searchengin w3-text-red" type="submit"></button>
    <?= form_close() ?>
    <?= form_error('query','<p class="navbar-text text-danger" font-family="serif">','</p>');?>
            <div class="container-fluid w3-padding-32">
    <div class="table table-success">
        <div class="col-sm-12">

                 <table id="mytable" class="table table-bordered">
        <thead>
        <tr>
            <th><i class="glyphicon glyphicon-bookmark"></i>No: </th>
            <th><i class=" 
fa fa-keyboard-o w3-text-blue"></i> Product Name</th>
<th><i class="fa fa-object-group w3-teal"></i> Item ID/Code</th>
            <th><i class="fa fa-object-group w3-teal"></i> Product Quantity</th>
            <th><i class="fa fa-braille w3-text-blue"></i> Product Quality</th>
            <th><i class="glyphicon glyphicon-usd w3-text-red"></i> Product Price</th>
            <th><i class="glyphicon glyphicon-sound-6-1 w3-text-red"></i> Product Bilty No</th>
            <th><i class="
glyphicon glyphicon-compressed w3-text-red"></i> Product Type</th>
            <th><i class="fa fa-truck w3-text-orange"></i> Store Location</th>
            <th><i class="fa fa-ship w3-text-green"></i> Product Company</th>
            <th><i class="fa fa-adjust w3-text-orange"></i>Total Price</th>
            <th><i class="fa fa-shield w3-text-blue"></i>Date</th>
        </tr>

        </thead>
     <tbody>
       <?php  if(count($query)):
           $count=0;
           foreach($query as $query):
           ?>
                 <tr>
             <td><?= ++$count?></td>
             <td><?= $query->item_name?></td>
             <td><?= $query->item_code?></td>
             <td><?= $query->item_qty?></td>
             <td><?= $query->item_qlty?></td>
             <td><?= $query->item_price?></td>
             <td><?= $query->item_bilty_no?></td>
             <td><?= $query->item_type?></td>
             <td><?= $query->item_location?></td>
             <td><?= $query->item_company?></td>
             <td class="w3-red w3-opacity w3-border-orange">PKR:<?= $query->item_price*$query->item_qty?></td>
             <td><?= $query->date?></td>
         </tr>
           <?php endforeach; endif;?>
     </tbody>

    </table>

        </div>
   
	</div>

    </div>

            </div>
            </div>
            </div>
   
    


            
    <?php include"login/footer.php"; ?>