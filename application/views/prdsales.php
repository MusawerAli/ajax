<?php include"login/header.php"; ?>

    <div class="container w3-padding-32">
        <div>
            <div>
            <?php if($feedback=$this->session->flashdata('feedback')) :
            $feedback_msg=$this->session->flashdata('feedback_msg');
            ?>
            <div class="row">
                <div class="col-sm-8 w3-wide w3-padding-24">
                    <div class="alert alert-dismissible <?= $feedback_msg; ?>">
                    <?php echo $feedback ;?>
                    
                    </div>
                    
                </div>
            </div>
            <?php endif;?>
            <div class="card border-primary mb-3" style="max-width: 200rem;">
                <div class="card-header">Add Sales</div>
                <div class="card-body">
                <?php echo form_open('prd/updatesale');?>
                <legend class="w3-center w3-padding">
                        <h1 class="w3-text-green">Add Daily Sales</h1>
                        </legend>
                        <div style=" max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;">
                        <!-- product Name -->
                        <div class="form-row">
                        <div class="form-group col-md-12 ui-widgets">
                            <label for="inputEmail4">Product Code/ID</label>
                            <input type="text" class="form-control" name="item_name" id="tags" placeholder="Product Name">
                            <?php echo form_error('item_name'); ?>
                        </div>
                            
                            </div>

                            <!-- PRoduct Quantity -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputAddress">Product Quantity</label>
                                    <input type="text" class="form-control" name="item_qty" id="inputAddress" placeholder="Product Quantity">
                                    <?php echo form_error('item_qlty'); ?>
                                </div>
                            </div>

                            <!-- Product type

                        <div class="col-md-12 ">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary w3-blue" type="button">Product Type</button>
                                </div>
                                <select class="custom-select" name="item_type" id="inputGroupSelect03">
                                    <option selected class="w3-text-red"
                                    >Product Type</option>
                                    <option value="1">one</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                </div>
                                <?php //echo form_error('item_type'); ?>
                        </div>

                        <!-- Product Company -->

                        <!-- <div class="col-md-12 ">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary w3-blue" type="button">Product Company</button>
                                </div>
                                <select class="custom-select" name="item_type" id="inputGroupSelect03">
                                    <option selected
                                    >Product Company</option>
                                    <option value="1">Allwin</option>
                                    <option value="2">Fuiji</option>
                                    <option value="3">Other</option>
                                </select>
                                </div>
                                <?php //echo form_error('item_type'); ?>
                        </div> -->

                            <!-- Product Price -->

                            <!-- <div class="form-group col-md-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text w3-wide">Price $</span>
                                        <span class="input-group-text glyphicon glyphicon-gbp w3-text-white w3-green"></span>
                                    </div>
                                    <input type="text" name="item_price" class="form-control" placeholder="Price" aria-label="Amount (to the nearest dollar)">
                                    
                                    </div>
                        <?php //echo form_error('item_price'); ?>
                    </div> -->
                    <div class="w3-wide w3-center">
                    <button type="submit" class="btn w3-teal ">Add Sale</button>
                </div>
                        </div>
                        




                     <?php form_close()?>   
                </div>
            </div>
            </div>
        </div>
    </div>



 


     
  <script>
  $( function() {
  
    
    var jArray= <?php echo json_encode($combine); ?>;
    
    $( "#tags" ).autocomplete({
      source: jArray
    });
  } );
  </script>