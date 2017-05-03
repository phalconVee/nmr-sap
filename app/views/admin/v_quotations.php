 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Quotations</h3>

  			<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=base_url('admin/');?>">Home</a></li>
						<li><i class="fa fa-table"></i>Quotations</li>
						<li><i class="fa fa-th-list"></i>All Quotations</li>
					</ol>
				</div>
			</div>
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Quotations From Site
                          </header>

                          <br>

                          <div style="text-align: center">
                          <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
                          </div>

                          <br>
                          
                          <table id="datatable-buttons" cellspacing="0" width="100%" class="table table-striped table-advance table-hover">

                          <thead>
                            <tr>
                                <tr>
                                 <th> S/N</th>
                                 <th> Customer Name</th>
                                 <th> Email</th>
                                 <th> Invoice No.</th>
                                 <th> Order No.</th>
                                 <th> Status</th>
                                 <th> Quote Date</th>
                                
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                            </tr>
                            </thead>
                           
                           <tbody>                              
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
  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net/js/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>

  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>

  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>

  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
  <script src="<?php echo base_url('resources/admin/assets/vendors/jszip/dist/jszip.min.js');?>"></script>
  <script src="<?php echo base_url('resources/admin/assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
  <script src="<?php echo base_url('resources/admin/assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>

  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
  <script src="<?php echo base_url('resources/admin/assets/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>

 <!-- nicescroll -->
 <script src="<?=base_url();?>resources/admin/js/jquery.scrollTo.min.js"></script>
 <script src="<?=base_url();?>resources/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

 <!--custome script for all page-->
 <script src="<?=base_url();?>resources/admin/js/scripts.js" type="text/javascript"></script>


<!-- Datatables -->
<script>
    $(document).ready(function() {
        var handleDataTableButtons = function() {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                        {
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                    ],

                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.

                // Load data for the table's content from an Ajax source
                "ajax": {
                     "url": "<?php echo base_url('admin/admin_quotations/quote_list')?>",
                "type": "POST"
                },

                //"lengthMenu": [["All"]] ,

                //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
            ],
                    responsive: true
                });
            }
        };

        TableManageButtons = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons();
                }
            };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
            keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');


        $datatable.on('draw.dt', function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-green'
            });
        });

        TableManageButtons.init();
    });
</script>
<!-- /Datatables -->

<script>
    var table;

    $(document).ready(function(){
        //$('#table').DataTable();
        $('#datatable-buttons').dataTable();
    });

    function reload_table()
    {
        window.location.reload(); //reload datatable ajax
    }
</script>