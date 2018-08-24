<?php include"login/header.php"; 

?>

<div class="container w3-padding-64">
    <div class="row">
    <div class="col-md-12">
    
   
    <div class="card border-dark mb-3" style="max-width: 200rem;">
            <div class="card-header w3-center"><i class="fa-3x fa fa-calculator">Assets Calculations</i></div>
            <div class="card-body">
            <div class="row">
                <?php  foreach($assets as $query):
                    
                    ?>
                     <div class="col-md-4">
                    <div class="card border-primary mb-3" style="max-width: 200rem;">
                    <div class="card-header text-white w3-blue"> <i class="
fa fa-area-chart w3-text-red"></i>Purchase Price</div>
         
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Purchase items</th>
                                <th scope="col">Total: Purchase(pkr)</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                <th scope="row"><?= $query->qty_sum?></th>
                                <td>pkr:<?= $query->price_sum * $query->qty_sum?></td>
                                
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card border-primary mb-3" style="max-width: 200rem;">
                    <div class="card-header w3-green"> <i class="fa fa-line-chart w3-text-yellow"></i> Price Of Sale</div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sales items</th>
                                <th scope="col">Total: Sales(pkr)</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                <th scope="row">12</th>
                                <td>pkr:12000</td>
                                
                                </tr>
                <?php endforeach;?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card border-primary mb-3" style="max-width: 200rem;">
                    <div class="card-header w3-orange"> <i class="fa fa-bar-chart"></i> Profit</div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Total Items</th>
                                <th scope="col">Total: Profit(pkr)</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                <th scope="row">12</th>
                                <td>pkr:12000</td>
                                
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

            </div>
                    
            
            </div>
            </div>
    </div>
    </div>

        <div class="row w3-padding-32">
    <div class="col-md-12">
    
    <div class="card border-dark mb-3" style="max-width: 200rem;">
            <div class="card-header w3-center"><i class="fa-3x fa fa-wpexplorer">Stock Calculations</i></div>
            <div class="card-body">
            <div class="row">

                     <div class="col-md-4">
                    <div class="card border-primary mb-3" style="max-width: 200rem;">
                    <div class="card-header text-white w3-blue"> <i class="
fa fa-area-chart w3-text-red"></i>Purchase Price</div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Purchase items</th>
                                <th scope="col">Total: Purchase(pkr)</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                <th scope="row">12</th>
                                <td>pkr:12000</td>
                                
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card border-primary mb-3" style="max-width: 200rem;">
                    <div class="card-header w3-green"> <i class="fa fa-line-chart w3-text-yellow"></i> Price Of Sale</div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sales items</th>
                                <th scope="col">Total: Sales(pkr)</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                <th scope="row">12</th>
                                <td>pkr:12000</td>
                                
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card border-primary mb-3" style="max-width: 200rem;">
                    <div class="card-header w3-orange"> <i class="fa fa-bar-chart"></i> Profit</div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Total Items</th>
                                <th scope="col">Total: Profit(pkr)</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                <th scope="row">12</th>
                                <td>pkr:12000</td>
                                
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

            </div>
                    
            
            </div>
            </div>
    </div>
    </div>
    <?php 
   // echo"<pre>";
 //print_r($assets);
    // if(count($assets)):
    //        $count=0;
    //        $SUM=0;
    //        foreach($assets as $query):
    //         $SUM= $SUM + $query->prd_price; $SUM= $SUM + $query->prd_price;
        

    //        ?>
    //              <tr>
            
             
             
    //          <td></td>
             
    //          <?php
    //          endforeach;
    //          ECHO $SUM."<br>";
    //          $qty=$SUM + $query->prd_qty;
    //           ECHO $qty;
             
    //         endif;

            
    ////          ?>

</div>