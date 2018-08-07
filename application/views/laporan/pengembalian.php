
        </div>
        <script src="<?php echo base_url()?>js/plugins/jqGrid/i18n/grid.locale-en.js"></script>
        <script src="<?php echo base_url()?>js/plugins/jqGrid/jquery.jqGrid.min.js"></script>
        <link href="<?php echo base_url()?>css/plugins/jqGrid/ui.jqgrid.css" rel="stylesheet">

        <script src="<?php echo base_url()?>js/typeahead.bundle.js"></script>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Laporan</a>
                        </li>
                        <li class="active">
                            <strong>Pengembalian Barang</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-8 ">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Rekap Resep</h5>
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




                      <form class="form-horizontal" action="<?php echo base_url()?>laporan/simpan_resep" method="POST" >
                      <div class="form-group"><label class="col-lg-2 control-label">No. Registrasi</label>


                        <div class="col-lg-10"><input type="text" placeholder="No" name="no" class="form-control"> <span class="help-block m-b-none"></span>
      </div>
      </div>

                        <div class="form-group"><label class="col-lg-2 control-label">Nama Distributor</label>

                            <div class="col-lg-10"><input type="text" placeholder="nama" name="item" class="form-control"><span class="help-block m-b-none"></span>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Usia</label>

                            <div class="col-lg-10"><input type="text" name="usia" placeholder="Tahun" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-lg-2 control-label">Alamat</label>

                            <div class="col-lg-10"><input type="text" name="alamat" placeholder="alamat" class="form-control"><span class="help-block m-b-none"></span>
                            </div>
                        </div>


                          <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Obat</td>
                                    <td>Sediaan</td>
                                    <td>Jumlah </td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php for ($i=0; $i < 11; $i++) {
                                $p = $i + 1;
                                echo '<tr>
                                  <td><span class="label label-primary">'.$p.'</span>
                                  <td>
                                    <input type="text" class="form-control" id="search'.$i.'" name="nama_obat['.$i.']" value="">


                                  </td>
                                  <td class="col-lg-2">
                                    <input type="text" size="3" class="form-control"  name="jumlah['.$i.']" value="">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control"   name="aturan['.$i.']" value="">
                                  </td>
                                
                                </tr>';
                              } ?>

                            </tbody>
                          </table>
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

            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Riwayat Rekap Resep</h5>
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
                                <td>No</td>
                                <td>Nama </td>
                                <td>Usia</td>
                                <td>Aksi</td>

                            </tr>
                        </thead>
                        <tbody>
                      <?php  if(!empty($query)) { foreach($query as $row) { ?>
                            <tr>
                                <td style="text-align:center;font-weight:bold">
                      <span class="label label-Primary"><?php echo $row->no ?></span>
                      </td>

                                <td><?php echo $row->item ?></td>
                                <td><?php echo $row->usia ?></td>
                                <td><a class="btn" href="<?php echo base_url().'laporan/rekap_delete/'.$row->no ?>"><i class="fa fa-trash"></i></a></td>



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
              url: '<?php echo base_url(); ?>search/obat_apotik?query=%QUERY%',
              wildcard: '%QUERY%'
          },
      });

      $('#search0').typeahead({
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
      } );

      $('#search1').typeahead({
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
      } );
      $('#search2').typeahead({
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
      } );
      $('#search3').typeahead({
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
      } );

      $('#search5').typeahead({
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
      } );

      $('#search0').typeahead({
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
      } );
      $('#search6').typeahead({
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
      } );

      $('#search7').typeahead({
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
      } );

      $('#search8').typeahead({
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
      } );

      $('#search9').typeahead({
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
      } );

      $('#search10').typeahead({
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
      } );
      //disini
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
    <!-- jqGrid -->



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
