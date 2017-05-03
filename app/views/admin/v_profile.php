<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=base_url('admin/');?>">Home</a></li>
						<li><i class="icon_documents_alt"></i>Profile</li>
						<li><i class="fa fa-user-md"></i>My Profile</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4><?= $_SESSION['w3_admin_fname'];?>&nbsp; <?=$_SESSION['w3_admin_lname'];?></h4>               
                              
                              <h6>
                              Administrator
                              </h6>

                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                               
                                <p><i class="fa fa-phone"></i><?=$_SESSION['w3_telephone']?></p>
								                <p><i class="fa fa-envelope-o"><?=$_SESSION['w3_email']?></i></p>
                                
                            </div>                            
							
							
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  
                                  <li class="active">
                                      <a data-toggle="tab" href="#profile">
                                          <i class="fa fa-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="fa fa-edit"></i>
                                          Edit Profile
                                      </a>
                                  </li>

                                  <li class="">
                                      <a data-toggle="tab" href="#change-password">
                                          <i class="fa fa-key"></i>
                                          Change Password
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane active">
                                    <section class="panel">
                                      
                                      <div class="panel-body bio-graph-info">
                                          <h1>Profile Details</h1>
                                          <div class="row">

                                              <div class="bio-row">
                                                  <p><span>First Name </span>: <?= $_SESSION['w3_admin_fname'];?> </p>
                                              </div>

                                              <div class="bio-row">
                                                  <p><span>Last Name </span>: <?= $_SESSION['w3_admin_lname'];?></p>
                                              </div>                                              
                                              
                                              <div class="bio-row">
                                                  <p><span>Level </span>: <?= $_SESSION['w3_level'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:<?= $_SESSION['w3_email'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: <?= $_SESSION['w3_telephone'];?></p>
                                              </div>

                                              <div class="bio-row">
                                                  <p><span>Address </span>: <?= $_SESSION['w3_address'];?></p>
                                              </div>
                                              
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Edit Profile</h1>
                                              <form class="form-horizontal" role="form">                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">First Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="fname" value="<?php echo $_SESSION['w3_admin_fname'];?>">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Last Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="lname" class="form-control" id="l-name" value="<?php echo $_SESSION['w3_admin_lname'];?>">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Email</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="email" class="form-control" id="email" value="<?php echo $_SESSION['w3_email'];?>">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Mobile</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="phone" class="form-control" id="mobile" value="<?php echo $_SESSION['w3_telephone'];?>">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Address</label>
                                                      <div class="col-lg-10">
                                                          <textarea name="address" id="" class="form-control" cols="30" rows="5"> <?php echo $_SESSION['w3_address'];?></textarea>
                                                      </div>
                                                  </div>

                                                  
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Update</button>
                                                          <button type="button" class="btn btn-danger">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                                  <!--end edit-profile-->

                                  <!-- change password -->
                                  <div id="change-password" class="tab-pane">
                                    <section class="panel">
                                      
                                      <div class="panel-body bio-graph-info">
                                          <h1>Change Password</h1>
                                          <div class="row">

                                              <form class="form-horizontal" role="form">                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-6">
                                                          <input type="password" name="password"  class="form-control" id="f-name" placeholder=" ">
                                                      </div>
                                                  </div>

                                                   <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Update</button>
                      
                                                      </div>
                                                  </div>

                                              </form>    
                                              
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- end change password-->

                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

    <!-- javascripts -->
    <script src="<?=base_url();?>resources/admin/assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url();?>resources/admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url();?>resources/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>resources/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="<?=base_url();?>resources/admin/assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="<?=base_url();?>resources/admin/js/scripts.js"></script>

  <script>
      //knob
      $(".knob").knob();

  </script>