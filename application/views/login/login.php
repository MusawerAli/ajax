<?php  include"header.php"; ?>


    <div class="container w3-padding-64">
        <div class="row">
            <div class="col-sm-8">
            <?php echo form_open('login/admin_login');?>
          <fieldset>
                <legend>Login</legend>
               
                <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label w3-text-red">Note:</label>
                <div class="col-sm-10">
                    <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="We didn't share your information anyone else">
                </div>
                </div>
                <?php 
                        if($error=$this->session->flashdata('login_failed')){?>
                <div class="row w3-center">
                    <div class="col-sm-8">
                        <div class="text-warning">
                        <h5 class="w3-code w3-red">
                        <?php echo $error; ?>
                        </h5>
                        </div>
                        
                    </div>
            </div>
                
                      <?php     
                        }
                ?>
                 <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                </div>
                <div class="col-sm-6">
                <?php echo form_error('email'); ?>
                </div>
                </div>

                 <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    </div>
                <div class="col-sm-6">
                <?php echo form_error('password'); ?>
                </div>
                </div>
                <div class="form-group w3-center">
                
                <input type="submit" name="login" class="btn btn-outline-success" value="Login">
                </div>
            </fieldset>
           
            <?php echo form_close()?>
            </div>
    </div>
<div>