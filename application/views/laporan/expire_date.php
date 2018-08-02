<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Expired Date terdekat</h5>
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
                    <td>Expired Date</td>
                      <td>Nama </td>

                      <td>Stok </td>
                      <td>Aksi</td>
                  </tr>
              </thead>
              <tbody>
            <?php  if(!empty($query)) { foreach($query as $row) { ?>
                  <tr>
                      <td style="text-align:center;font-weight:bold">
              <h2><?php echo $row->expired ?>                      </h2>

            </td>
                      <td><?php echo $row->nama ?></td>

                      <td style="font-weight:bold">

                          <h3><?php echo $row->stok ?></td></h3>




                      <td>

                          <div class="btn-group">
                              <a class="btn" href="<?php echo base_url().'barang/formBarang/'.$row->id ?>"><i class="fa fa-edit"></i></a>
                            
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
