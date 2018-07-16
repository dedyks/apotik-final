<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Data Tables -->
<link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

<link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
<link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
<!-- Mainly scripts -->
<script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="<?php echo base_url()?>js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo base_url()?>js/inspinia.js"></script>
<script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>

 <div id="tabledata">

<div class="span12">
 <a style="margin-bottom:5px;" href="<?php echo base_url() ?>barang/formBarang/" class="dark_green btn">Tambah Data Barang</a>
    <a style="margin-bottom:5px;" href="<?php echo base_url() ?>barang/tambahBarang/" class="dark_green btn">Tambah Data Barang</a>



    <div class="well grey">
												<div class="well-header">
													<h5>List Pegawai </h5>
													</div>
													<div class="well-content">
													<div class="table_options top_options">
													</div>
													<table class="table table-striped table-bordered table-hover dataTables-example" >
														<thead>
																<tr>
																		<td>ID Barang</td>
																		<td>Nama </td>
																		<td>Kategori </td>
																		<td>Satuan</td>
																		<td>Jumlah Isi </td>
																		<td>Stok </td>
																		<td>Harga Beli</td>
																		<td>Harga Jual</td>
																		<td>Aksi</td>
																</tr>
														</thead>
														<tbody>
													<?php  if(!empty($query)) { foreach($query as $row) { ?>
																<tr>
																		<td style="text-align:center;font-weight:bold">
													<span class="label label-warning"><?php echo $row->id_barang ?></span>
													</td>
																		<td><?php echo $row->nama ?></td>
																		<td><?php echo $row->kategori ?></td>
																		<td><?php echo $row->satuan ?></td>
																		<td><?php echo $row->isi ?></td>
																		<td><?php echo $row->stok ?></td>
																		<td><?php echo $row->harga_beli ?></td>
																		<td><?php echo $row->harga_jual ?></td>
																		<td>
																				<div class="btn-group">
																						<a class="btn" href="<?php echo base_url().'barang/formBarang/'.$row->id ?>"><i class="fa fa-edit"></i></a>
																						<a class="btn" href="#"><i class="fa fa-trash"></i></a>
																				</div>
																		</td>
																</tr>

													</tr>
													<?php }} ?>
														</tbody>
													</table>
													<br>
								 <p class="pages"> <?php echo $this->pagination->create_links(); ?></p>
								 </div>



								 <div class="table_options bottom_options">
													</div>
											  </div>
											</div>
										</div>

										<!-- Mainly scripts -->

										<script>
								        $(document).ready(function() {
								            $('.dataTables-example').dataTable({
								                responsive: true,
								                "dom": 'T<"clear">lfrtip',
								                "tableTools": {
								                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
								                }
								            });

								            /* Init DataTables */
								            var oTable = $('#editable').dataTable();

								            /* Apply the jEditable handlers to the table */
								            oTable.$('td').editable( '../example_ajax.php', {
								                "callback": function( sValue, y ) {
								                    var aPos = oTable.fnGetPosition( this );
								                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
								                },
								                "submitdata": function ( value, settings ) {
								                    return {
								                        "row_id": this.parentNode.getAttribute('id'),
								                        "column": oTable.fnGetPosition( this )[2]
								                    };
								                },

								                "width": "90%",
								                "height": "100%"
								            } );


								        });

								        function fnClickAddRow() {
								            $('#editable').dataTable().fnAddData( [
								                "Custom row",
								                "New row",
								                "New row",
								                "New row",
								                "New row" ] );

								        }
								    </script>
