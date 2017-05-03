 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Inventory Items</h3>

          <!--display global alert messages -->
          <?php if(!empty($notice)) { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Success:</strong> <?php echo $notice; ?>
            </div>
          <?php } ?>

					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=base_url('admin/');?>">Home</a></li>
						<li><i class="fa fa-table"></i>Inventory</li>
						<li><i class="fa fa-th-list"></i>All Inventory Items</li>
					</ol>
				</div>
			</div>
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Items Table
                          </header>

                          <br>

                          <div style="text-align: center">
                          <a class="btn btn-success" href="<?=base_url('admin/admin_inventory/create')?>" title="delete">Add New Item</a>
                          </div>

                          <br>
                          
                          <table id="table" cellspacing="0" width="100%" class="table table-striped table-advance table-hover">

                          <thead>
                            <tr>
                                <tr>
                                 <th> S/N</th>
                                 <th> Item</th>
                                 <th> Category</th>
                                 <th> SAP ID</th>
                                 <th> Specification</th>
                                 <th> Image</th>
                                
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                            </tr>
                            </thead>
                           
                           <tbody>
                              

                              <?php if(!empty($products)){ ?>
                              <?php $i = 1; foreach($products as $row): ?>
                              
                              <tr>
                                <td><?=$i?></td>

                                 <td><?=$row->item_name?></td>

                                 <td><?=$row->category?></td>

                                  <td><?=$row->sap_id?></td>

                                 <td><?=$row->specification?></td>

                                 <td>
                                   <img src="<?php echo base_url();?>image.php/<?php echo $row->image;?>?width=50&height=50&cropratio=1:1&image=<?php echo base_url();?>resources/inventory/<?php echo $row->image;?>" />
                                 </td>

                                                                  
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#" title="edit item" onclick="edit_product('<?=$row->inv_id;?>')"><i class="icon_plus_alt2"></i></a>

                                      <a class="btn btn-warning" href="<?=base_url('admin/admin_inventory/edit_product/'.$row->inv_id);?>" title="change image"><i class="fa fa-photo"></i></a>

                                      <a class="btn btn-danger" href="#" title="delete item"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr> 

                            <?php $i++; endforeach; ?>

                            <?php }else{ ?>

                            <tr> <td colspan="8">No items in the Inventory</td></tr>

                            <?php } ?>


                           </tbody>
                        </table>
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

    <!--DataTables-->
    <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.js')?>"></script>

    <!-- nicescroll -->
    <script src="<?=base_url();?>resources/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>resources/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="<?=base_url();?>resources/admin/js/scripts.js"></script>

<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#table').DataTable();

    });
</script>
<!-- /Datatables -->

<script>
    var save_method; //for save method string
    var table;

    $(document).ready(function(){
        //$('#datatable-buttons').DataTable();
        //$('#datatable-buttons').dataTable().api();

    });

    function edit_product(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('admin/admin_inventory/pro_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="inv_id"]').val(data.inv_id);
                $('[name="sap_id"]').val(data.sap_id);
                $('[name="category"]').val(data.category);
                $('[name="item_name"]').val(data.item_name);
                $('[name="specification"]').val(data.specification);
                $('[name="description"]').val(data.description);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Item Data'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error geting data from ajax');
            }
        });
    }

    function reload_table()
    {
       window.location.reload();
    }

    function save()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable
        var url;

        if(save_method == 'add') {
            url = "<?php echo site_url('admin/admin_inventory/ajax_add_product')?>";
        } else {
            url = "<?php echo site_url('admin/admin_inventory/ajax_update_product')?>";
        }

        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {

                if(data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table();
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable

            }
        });
    }

    function delete_product(id)
    {
        if(confirm('Are you sure to delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?php echo site_url('admin/admin_inventory/ajax_delete_product')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status == true) //if success close modal and reload ajax table
                    {
                        //if success reload ajax table
                        $('#modal_delete_form').modal('hide');
                        reload_table();
                    }
                    else
                    {
                        $('#modal_delete_form').modal('show');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    
</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="inv_id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Category</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category" required>
                                  <option value="electrical">Electrical Tools</option>
                                  <option value="mechanical">Mechanical Tools</option>
                                  <option value="hand_tools">Hand Tools</option>
                                  <option value="instrumentation">Instrumentation</option>          
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Item Name</label>
                            <div class="col-md-9">
                                <input id="name" name="item_name" class="form-control" type="text" >
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">SAP ID</label>
                            <div class="col-md-9">
                                <input id="name" name="sap_id" class="form-control" type="number" >
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">OUM</label>
                            <div class="col-md-9">
                                <input type="text"  name="specification" required="required" class="form-control" >
                                <span class="help-block"></span>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea id="textarea" required="required" name="description" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Bootstrap modal -->