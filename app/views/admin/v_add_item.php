 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Add Item to Inventory</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=base_url();?>admin/">Home</a></li>
						<li><i class="icon_document_alt"></i>Inventory</li>
						<li><i class="fa fa-files-o"></i>Add Item Inventory</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Item to Inventory
                          </header>
                          <div class="panel-body">

                              <?php echo validation_errors('<div class="alert-danger" style="padding:10px;">', '</div>'); ?>

                              <?php if(!empty($error)) { echo  "<div class='alert-danger' style='padding:10px;'>$error</div>"; } ?>

                              <p>&nbsp;</p>
                              
                              <div class="form">

                              <form action="<?=base_url('admin/admin_inventory/create');?>" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                                      
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Category <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <select class="form-control" name="category" required>
                                          <option value="electrical">Electrical Tools</option>
                                          <option value="mechanical">Mechanical Tools</option>
                                          <option value="hand_tools">Hand Tools</option>
                                          <option value="instrumentation">Instrumentation</option>
                                          
                                          </select>
                                             
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Item Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" type="text" name="item_name" required />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">SAP ID <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" name="sap_id" type="number" required />
                                          </div>
                                      </div> 

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">OUM <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" name="specification" type="text" required />
                                          </div>
                                      </div> 

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Upload Image <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="file" id="file" name="userfile" required="required" />
                                          </div>
                                      </div>   

                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Description</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control" name="description" required></textarea>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>

                                  </form>
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
    <script src="<?=base_url();?>resources/admin/js/jquery.js"></script>
    <script src="<?=base_url();?>resources/admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url();?>resources/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>resources/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    

    <!-- custom form validation script for this page-->
    <script src="<?=base_url();?>resources/admin/js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?=base_url();?>resources/admin/js/scripts.js"></script>   