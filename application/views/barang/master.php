
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>MASTER</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar barang yang ada</h5>
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
                      <a href="<?php echo base_url() ?>barang/tambahBarang"><button type="button"  class="btn btn-w-m btn-success">Tambah Barang</button></a>


                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead>
                          <tr>
                              <td>ID Barang</td>
                              <td>Nama </td>
                              <td>Kategori </td>
                              <td>Sediaan</td>
                              <td>Jumlah Isi </td>
                              <td>Stok </td>
                              <td>Expired Date</td>
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
                              <td><?php echo $row->sediaan ?></td>
                              <td><?php echo $row->isi ?></td>
                              <td style="font-weight:bold">

                                  <h3><?php echo $row->stok ?></td></h3>
                                  <td><?php echo $row->expired ?></td>




                              <td>

                                  <div class="btn-group">
                                      <a class="btn" href="<?php echo base_url().'barang/formBarang/'.$row->id ?>"><i class="fa fa-edit"></i></a>
                                      <a class="btn" href="<?php echo base_url().'barang/delete/'.$row->id ?>"><i class="fa fa-trash"></i></a>
                                  </div>
                              </td>
                          </tr>

                    </tr>
                    <?php }} ?>
                      </tbody>
                    </table>

                    </div>
                </div>
            </div>
            </div>

        </div>
        <section>
          <div class="footer">
              <div class="pull-right">
                  10GB of <strong>250GB</strong> Free.
              </div>
              <div>
                  <strong>Copyright</strong> Example Company &copy; 2014-2015
              </div>
          </div>

        </section>

        </div>
        </div>





    <!-- Page-Level Scripts -->
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
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
</body>

</html>
