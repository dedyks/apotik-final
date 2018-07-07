


	<script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>js/plugins/jeditable/jquery.jeditable.js"></script>

	<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Data Tables -->
	<link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

	<link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/style.css" rel="stylesheet">


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




 <table class="table table-striped table-bordered table-hover dataTables-example ">
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
                                </table><br>
								 <p class="pages"> <?php echo $this->pagination->create_links(); ?></p>
								 </div>

								 <div class="ibox float-e-margins">
								 		<div class="ibox-title">
								 				<h5>Basic Data Tables example with responsive plugin</h5>
								 				<div class="ibox-tools">
								 						<a class="collapse-link">
								 								<i class="fa fa-chevron-up"></i>
								 						</a>
								 						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								 								<i class="fa fa-wrench"></i>
								 						</a>
								 						<ul class="dropdown-menu dropdown-user">
								 								<li><a href="#">Config option 1</a>
								 								</li>
								 								<li><a href="#">Config option 2</a>
								 								</li>
								 						</ul>
								 						<a class="close-link">
								 								<i class="fa fa-times"></i>
								 						</a>
								 				</div>
								 		</div>
								 		<div class="ibox-content">

								 		<table class="table table-striped table-bordered table-hover dataTables-example" >
								 		<thead>
								 		<tr>
								 				<th>Rendering engine</th>
								 				<th>Browser</th>
								 				<th>Platform(s)</th>
								 				<th>Engine version</th>
								 				<th>CSS grade</th>
								 		</tr>
								 		</thead>
								 		<tbody>
								 		<tr class="gradeX">
								 				<td>Trident</td>
								 				<td>Internet
								 						Explorer 4.0
								 				</td>
								 				<td>Win 95+</td>
								 				<td class="center">4</td>
								 				<td class="center">X</td>
								 		</tr>
								 		<tr class="gradeC">
								 				<td>Trident</td>
								 				<td>Internet
								 						Explorer 5.0
								 				</td>
								 				<td>Win 95+</td>
								 				<td class="center">5</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Trident</td>
								 				<td>Internet
								 						Explorer 5.5
								 				</td>
								 				<td>Win 95+</td>
								 				<td class="center">5.5</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Trident</td>
								 				<td>Internet
								 						Explorer 6
								 				</td>
								 				<td>Win 98+</td>
								 				<td class="center">6</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Trident</td>
								 				<td>Internet Explorer 7</td>
								 				<td>Win XP SP2+</td>
								 				<td class="center">7</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Trident</td>
								 				<td>AOL browser (AOL desktop)</td>
								 				<td>Win XP</td>
								 				<td class="center">6</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Firefox 1.0</td>
								 				<td>Win 98+ / OSX.2+</td>
								 				<td class="center">1.7</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Firefox 1.5</td>
								 				<td>Win 98+ / OSX.2+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Firefox 2.0</td>
								 				<td>Win 98+ / OSX.2+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Firefox 3.0</td>
								 				<td>Win 2k+ / OSX.3+</td>
								 				<td class="center">1.9</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Camino 1.0</td>
								 				<td>OSX.2+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Camino 1.5</td>
								 				<td>OSX.3+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Netscape 7.2</td>
								 				<td>Win 95+ / Mac OS 8.6-9.2</td>
								 				<td class="center">1.7</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Netscape Browser 8</td>
								 				<td>Win 98SE+</td>
								 				<td class="center">1.7</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Netscape Navigator 9</td>
								 				<td>Win 98+ / OSX.2+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.0</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.1</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1.1</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.2</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1.2</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.3</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1.3</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.4</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1.4</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.5</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1.5</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.6</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">1.6</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.7</td>
								 				<td>Win 98+ / OSX.1+</td>
								 				<td class="center">1.7</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Mozilla 1.8</td>
								 				<td>Win 98+ / OSX.1+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Seamonkey 1.1</td>
								 				<td>Win 98+ / OSX.2+</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Gecko</td>
								 				<td>Epiphany 2.20</td>
								 				<td>Gnome</td>
								 				<td class="center">1.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>Safari 1.2</td>
								 				<td>OSX.3</td>
								 				<td class="center">125.5</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>Safari 1.3</td>
								 				<td>OSX.3</td>
								 				<td class="center">312.8</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>Safari 2.0</td>
								 				<td>OSX.4+</td>
								 				<td class="center">419.3</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>Safari 3.0</td>
								 				<td>OSX.4+</td>
								 				<td class="center">522.1</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>OmniWeb 5.5</td>
								 				<td>OSX.4+</td>
								 				<td class="center">420</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>iPod Touch / iPhone</td>
								 				<td>iPod</td>
								 				<td class="center">420.1</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Webkit</td>
								 				<td>S60</td>
								 				<td>S60</td>
								 				<td class="center">413</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 7.0</td>
								 				<td>Win 95+ / OSX.1+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 7.5</td>
								 				<td>Win 95+ / OSX.2+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 8.0</td>
								 				<td>Win 95+ / OSX.2+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 8.5</td>
								 				<td>Win 95+ / OSX.2+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 9.0</td>
								 				<td>Win 95+ / OSX.3+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 9.2</td>
								 				<td>Win 88+ / OSX.3+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera 9.5</td>
								 				<td>Win 88+ / OSX.3+</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Opera for Wii</td>
								 				<td>Wii</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Nokia N800</td>
								 				<td>N800</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Presto</td>
								 				<td>Nintendo DS browser</td>
								 				<td>Nintendo DS</td>
								 				<td class="center">8.5</td>
								 				<td class="center">C/A<sup>1</sup></td>
								 		</tr>
								 		<tr class="gradeC">
								 				<td>KHTML</td>
								 				<td>Konqureror 3.1</td>
								 				<td>KDE 3.1</td>
								 				<td class="center">3.1</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>KHTML</td>
								 				<td>Konqureror 3.3</td>
								 				<td>KDE 3.3</td>
								 				<td class="center">3.3</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>KHTML</td>
								 				<td>Konqureror 3.5</td>
								 				<td>KDE 3.5</td>
								 				<td class="center">3.5</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeX">
								 				<td>Tasman</td>
								 				<td>Internet Explorer 4.5</td>
								 				<td>Mac OS 8-9</td>
								 				<td class="center">-</td>
								 				<td class="center">X</td>
								 		</tr>
								 		<tr class="gradeC">
								 				<td>Tasman</td>
								 				<td>Internet Explorer 5.1</td>
								 				<td>Mac OS 7.6-9</td>
								 				<td class="center">1</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeC">
								 				<td>Tasman</td>
								 				<td>Internet Explorer 5.2</td>
								 				<td>Mac OS 8-X</td>
								 				<td class="center">1</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Misc</td>
								 				<td>NetFront 3.1</td>
								 				<td>Embedded devices</td>
								 				<td class="center">-</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeA">
								 				<td>Misc</td>
								 				<td>NetFront 3.4</td>
								 				<td>Embedded devices</td>
								 				<td class="center">-</td>
								 				<td class="center">A</td>
								 		</tr>
								 		<tr class="gradeX">
								 				<td>Misc</td>
								 				<td>Dillo 0.8</td>
								 				<td>Embedded devices</td>
								 				<td class="center">-</td>
								 				<td class="center">X</td>
								 		</tr>
								 		<tr class="gradeX">
								 				<td>Misc</td>
								 				<td>Links</td>
								 				<td>Text only</td>
								 				<td class="center">-</td>
								 				<td class="center">X</td>
								 		</tr>
								 		<tr class="gradeX">
								 				<td>Misc</td>
								 				<td>Lynx</td>
								 				<td>Text only</td>
								 				<td class="center">-</td>
								 				<td class="center">X</td>
								 		</tr>
								 		<tr class="gradeC">
								 				<td>Misc</td>
								 				<td>IE Mobile</td>
								 				<td>Windows Mobile 6</td>
								 				<td class="center">-</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeC">
								 				<td>Misc</td>
								 				<td>PSP browser</td>
								 				<td>PSP</td>
								 				<td class="center">-</td>
								 				<td class="center">C</td>
								 		</tr>
								 		<tr class="gradeU">
								 				<td>Other browsers</td>
								 				<td>All others</td>
								 				<td>-</td>
								 				<td class="center">-</td>
								 				<td class="center">U</td>
								 		</tr>
								 		</tbody>
								 		<tfoot>
								 		<tr>
								 				<th>Rendering engine</th>
								 				<th>Browser</th>
								 				<th>Platform(s)</th>
								 				<th>Engine version</th>
								 				<th>CSS grade</th>
								 		</tr>
								 		</tfoot>
								 		</table>

								 		</div>
								 </div>

								 <div class="table_options bottom_options">
													</div>
											  </div>
											</div>
										</div>

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
