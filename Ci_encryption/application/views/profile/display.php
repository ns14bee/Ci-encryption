<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Display</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="col-lg-12" align="center">

              <?php if($this->session->flashdata('message')) { ?>
                  <div class="alert alert-info">
                      <?php echo $this->session->flashdata('message')?>
                  </div>
              <?php } ?>
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title-center " >Profile Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- <form> -->
                  <span id="err" style="color:red">
                   </span>
<!-- input tags -->
                <span id='co' style="color:red"></span>
             
                <div class="form-group row">
                
                    <label class="col-sm-4 col-form-label"> 
                      Username:
                    </label>
                   <label class="col-sm-4 col-form-label"> 
                      Email:
                    </label>
                    <label class="col-sm-4 col-form-label"> 
                      Password:
                    </label>
              </div>
              <?php

              foreach($user as $us)
              {

              ?>
              <div class="form-group row">
                    <label class="col-sm-4 col-form-label"> 
                      <?php 

                      echo $this->encryption->decrypt($us->username); ?>
                    </label>
                    <label class="col-sm-4 col-form-label"> 
                      <?php echo $this->encryption->decrypt($us->email); ?>
                    </label>
                    <label class="col-sm-4 col-form-label"> 
                      <?php echo $this->encryption->decrypt($us->password); ?>
                    </label>
              </div>

              <?php
              }

              ?>

               

                  
                  
               
             <!--    </form> -->
              <!-- /.card-body -->
          </div> 
        </div>
      </div>
    </div>
    </section>
  </div>

   