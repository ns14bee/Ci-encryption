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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <form action="" method="post">  
                <div class="form-group row">
                <div class="col-sm-2">
                </div>
                    <label class="col-sm-2 col-form-label" for="course"> 
                      Username
                    </label>
                    <div class="col-sm-6">
                      <?php 
                      
                        echo form_input(['type'=>'text', 'name' =>'username' ,'id'=>'username','placeholder'=>'Enter your username','class'=>'form-control form-control-md']);?>
                    </div>
                  </div>

                <span id='cl' style="color:red"></span>
                <div class="form-group row">
                <div class="col-sm-2">
                </div>
                    <label class="col-sm-2 col-form-label" for="college"> 
                      Email
                    </label>
                    <div class="col-sm-6">
                      <?php 

                        echo form_input(['type'=>'email', 'name' =>'email' ,'id'=>'email','placeholder'=>'Enter your college name','class'=>'form-control form-control-md']);?>
                    </div>
                  </div>

                  <span id='sk' style="color:red"></span>
                  <div class="form-group row">
                    <div class="col-sm-2">
                    </div>
                    <label class="col-sm-2 col-form-label" for="skills">
                      Password
                    </label>
                    <div class="col-sm-6 ">
                      <?php 
                      echo form_password(['name' =>'password', 'id'=>'password','placeholder'=>'Enter your Password','class'=>'form-control form-control-md', 'onchange'=>''  ]);?>
                    </div>
                  </div>

                  
                    <input type="submit" name='submit' id='submit' value='Insert' class="btn btn-info"/>
                  


                 <!--  <button type="submit" class="btn btn-info">Sign in</button> -->
                  <button type="submit" class="btn btn-danger">Cancel</button>
                </div>  
                <?php echo form_close(); ?>
             <!--    </form> -->
              <!-- /.card-body -->
            </div>
            <!-- /.card --> 
        </div>
      </div>
    </section>
  </div>

   