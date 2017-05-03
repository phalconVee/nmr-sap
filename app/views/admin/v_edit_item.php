 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Item in Inventory</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=base_url();?>admin/">Home</a></li>
						<li><i class="icon_document_alt"></i>Inventory</li>
						<li><i class="fa fa-files-o"></i>Edit Item</li>
					</ol>
				</div>
			</div>

       <?php 
          if(!empty($result)) {
              foreach($result as $row){
                $pro_id = $row->inv_id;                                    
                $pro_image = $row->image;
                $pro_name = $row->item_name;
              }
            }
        ?>

              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Change <strong><?=$pro_name;?></strong> Image 
                          </header>
                          <div class="panel-body">

                              <?php echo validation_errors('<div class="alert-danger" style="padding:10px;">', '</div>'); ?>

                              <?php if(!empty($error)) { echo  "<div class='alert-danger' style='padding:10px;'>$error</div>"; } ?>

                              <p>&nbsp;</p>
                              
                              <div class="form">                              

                              <form action="<?=base_url('admin/admin_inventory/create');?>" method="post" enctype="multipart/form-data" class="form-horizontal" novalidate>
                                      
                                          

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Upload Image <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <div id="profile-picture-img">

                                              <img src="<?php echo base_url();?>image.php/<?php echo $pro_image;?>?width=120&height=120&cropratio=1:1&image=<?php echo base_url();?>resources/inventory/<?php echo $pro_image;?>" />
                                        </div>  
                                          </div>
                                      </div>   

                                      <input type="hidden" id="inv_id" value="<?=$pro_id?>"/>  
                              
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button id="profile-picture-caption" data-id="<?php echo $pro_id; ?>" class="btn btn-default">Change Picture</button>
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

    <script type="text/javascript" src="<?php echo base_url();?>resources/admin/js/ajaxupload.3.5.js"></script>

    <!--change product image-->
    <script type="text/javascript">
    jQuery(document).ready(function(){

        //var id =  jQuery(this).data('id');
        var id = document.getElementById("inv_id").value;

        var btnUpload = jQuery('#profile-picture-caption');
        var status= jQuery('#profile-picture-caption');
        new AjaxUpload(btnUpload, {
            action: '<?php echo base_url("admin/admin_inventory/change_pro_img/'+id+'");?>',
            name: 'uploadfile',
            onSubmit: function(file, ext){
                if (! (ext && /^(jpg|jpeg|gif|png)$/.test(ext))){
                    // extension is not allowed
                    alert('Only JPG, PNG or GIF files are allowed');
                    return false;
                }
                status.text('Uploading...');
            },
            onComplete: function(file, response){
                //On completion clear the status
                var resp = response.split('-');
                status.text('');
                //Add uploaded file to list
                if(resp[0]==="success"){

                    $('#profile-picture-img').html('<img src="<?php echo base_url();?>resources/inventory/'+resp[1]+'" height="120" width="120">');
                    status.text('Change Picture');
                } else{
                    alert(response);
                    status.text('Change Picture');
                }
            }
        });
    });

</script>
<!--end script-->

