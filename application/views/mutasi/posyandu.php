
        </div>

        <script src="<?php echo base_url()?>js/typeahead.bundle.js"></script>

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
                <div class="col-lg-7">
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




                      <form class="form-horizontal" action="<?php echo base_url()?>mutasi/simpan" method="POST" >

                      <div class="form-group"><label class="col-lg-2 control-label">Tujuan</label>


      <div class="col-lg-10"><select class="" name="tujuan">
          <?php  if(!empty($tujuan)) { foreach($tujuan as $row) { ?>





            <option value="  <?php echo $row->nama; ?>">  <?php echo $row->nama; ?></option>


          <?php }} ?>
        </select> <span class="help-block m-b-none">Tujuan mutasi barang.</span>
      </div>
      </div>




                        <div class="form-group"><label class="col-lg-1 control-label">Item</label>

                            <div class="col-lg-5"><input type="text" id="search" placeholder="Email" name="item" class="form-control"> <span class="help-block m-b-none"></span>

                            </div>
                            <div class="col-lg-5"><input type="text" id="satuan" name="sediaan" placeholder="Tablet, Strip, Dll" class="form-control"></div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>


                        <div class="form-group"><label class="col-lg-2 control-label">Jumlah</label>

                            <div class="col-lg-10"><input type="text" name="jumlah" placeholder="jumlah" class="form-control"> <span class="help-block m-b-none">Jumlah Barang.</span>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Keterangan</label>

                            <div class="col-lg-10"><input type="text" name="keterangan" placeholder="ket" class="form-control"> <span class="help-block m-b-none">Example block-level help text here.</span>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Khasiat</label>

                            <div class="col-lg-10"><input type="text" name="khasiat" placeholder="efek" class="form-control"> <span class="help-block m-b-none">Example block-level help text here.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-white" type="submit">Submit</button>
                            </div>
                        </div>
                      </form>

                    </div>
                </div>
            </div>


            <div class="col-lg-5">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Riwayat Mutasi</h5>
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
                      <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>Tujuan</td>
                                <td>Item </td>
                                <td>Jumlah</td>
                                <td>Tanggal</td>

                            </tr>
                        </thead>
                        <tbody>
                      <?php  if(!empty($query)) { foreach($query as $row) { ?>
                            <tr>
                                <td style="text-align:center;font-weight:bold">
                      <span class="label label-Primary"><?php echo $row->lokasi ?></span>
                      </td>

                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->jumlah ?></td>
                                <td><?php echo $row->time ?></td>

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



            <script>
      $(document).ready(function() {
          var bloodhound = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              remote: {
                  url: '<?php echo base_url(); ?>search/find?query=%QUERY%',
                  wildcard: '%QUERY%'
              },
          });

          $('#search').typeahead({
              hint: true,
              highlight: true,
              minLength: 0
          }, {
              name: 'users',
              limit: 2,
              source: bloodhound,
              display: function(data) {
                  return data.label  //Input value to be set when you select a suggestion.
              },
              templates: {
                  empty: [
                      '<div class="list-group search-results-dropdown"><div class="list-group-item">Tidak ada.</div></div>'
                  ],
                  header: [
                      '<div class="list-group search-results-dropdown">'
                  ],
                  suggestion: function(data) {
                  return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.label + '</div></div>'
                  }
              }
          });
      });
  </script>

  <script>
$(document).ready(function() {
var bloodhound = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        url: '<?php echo base_url(); ?>search/satuan?query=%QUERY%',
        wildcard: '%QUERY%'
    },
});

$('#satuan').typeahead({
    hint: true,
    highlight: true,
    minLength: 0
}, {
    name: 'users',
    limit: 2,
    source: bloodhound,
    display: function(data) {
        return data.label  //Input value to be set when you select a suggestion.
    },
    templates: {
        empty: [
            '<div class="list-group search-results-dropdown"><div class="list-group-item">Tidak ada.</div></div>'
        ],
        header: [
            '<div class="list-group search-results-dropdown">'
        ],
        suggestion: function(data) {
        return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.label + '</div></div>'
        }
    }
});
});
</script>

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
