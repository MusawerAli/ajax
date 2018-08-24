<?php include"login/header.php"; 
    // $id=$this->session->userdata('user_id');
     //print_r($id->id); ?>
    
    <div class="container">
        <div class="w3-padding-64">
        <div class="card border-secondary mb-3" style="max-width: 200rem;">
            <div class="card-header">Products Detail</div>
            <div class="card-body">
            <div class="container">
        <div class="row">
            <div class="col-sm-8">

        <?php echo form_open('prd/add_prd');?>

    
                <legend class="w3-center w3-padding">
                <h1 class="w3-text-green">Add Product Detail</h1>
                </legend>
                <?php echo form_error('item_qlty'); ?>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Item Name</label>
                    <input type="text" class="form-control" name="item_name" id="inputEmail4" placeholder="Product Name">
                    <?php echo form_error('item_name'); ?>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Item code/ID</label>
                    <input type="text" class="form-control" name="item_code" id="inputEmail4" placeholder="Product Name">
                    <?php echo form_error('item_name'); ?>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Item Company</label>
                    <input type="text" class="form-control" name="item_company" id="inputPassword4" placeholder="Product Company">
                    <?php echo form_error('item_company'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputAddress">Item Quality</label>
                    <input type="text" class="form-control" name="item_qlty" id="inputAddress" placeholder="Product Quality">
                    <?php echo form_error('item_qlty'); ?>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputAddress2">Item Quantity</label>
                    <input type="int" name="item_qty" class="form-control" id="inputAddress2" placeholder="Product Quantity">
                    
                    <?php echo form_error('item_qty'); ?>
                    </div>
                </div>

                    <div class="row">
                    <div class="form-group col-md-8">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text w3-red">Price $</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" name="item_price" class="form-control" aria-label="Amount (to the nearest dollar)">
                        
                        </div>
                        <?php echo form_error('item_price'); ?>
                    </div>
                   

                    </div>
                    
                    <div class="form-row">
                    <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Builty No..." aria-label="Recipient's username" name="item_bilty_no" aria-describedby="basic-addon2">
                       
                        <div class="input-group-append">
                            <span class="input-group-text w3-yellow" id="basic-addon2">Builty No</span>
                        </div>
                        
                        </div>
                        <?php echo form_error('item_bilty_no'); ?>
                        </div>
                        <div class="col-md-6">    
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary w3-green" type="button">Store Location</button>
                    </div>
                    <select class="custom-select" name="item_location" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="st1">store 1</option>
                        <option value="st2">Store 2</option>
                        <option value="st3">Store 3</option>
                    </select>
                    </div>
                    </div>
                    <?php echo form_error('item_location'); ?>
                     </div>

                <div class="row">
                <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary w3-blue" type="button">Item Type</button>
                    </div>
                    <select class="custom-select" name="item_type" id="inputGroupSelect03">
                        <option selected
                        >Choose...</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <?php echo form_error('item_type'); ?>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control w3-padding" name="date" placeholder="Reciving Date" id="datepicker">
                    </div>
                </div>

                <div class="w3-center">
                <button type="submit" class="btn w3-teal ">Add Items</button>
                </div>
                </fieldset>
                
                
        </form>
        </div>

        <div class="col-md-4">
            
        </div>
        </div>
        </div>
               
            </div>
        </div>
        
        </div>
    </div>
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


     <?php include"login/footer.php"; ?>