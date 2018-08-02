</div>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>
function goBack() {
    window.history.back()
}
</script>
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
                <h5>Edit item</h5>
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
              <form method="post" class="form1" id="form_barang" name="form_barang" action="<?php echo base_url(); ?>barang/actBarang/"/>
                <table class="">
                  <tr>
                    <td><input type="hidden" name="id" maxlength="5" size="5"  hidden value="<?php echo $id; ?>"/></td>
                  </tr>
                  <tr>
                    <td>ID Barang </td>
                    <td><input type="text" name="id_barang" maxlength="5" size="5"    value="<?php echo isset($infouser['id_barang']) ? $infouser['id_barang'] : ''; ?> "/>
                      *</td>
                  </tr>
                  <tr>
                    <td>Nama Barang </td>
                    <td><input type="text" name="nama" maxlength="25" value="<?php echo isset($infouser['nama']) ? $infouser['nama'] : ''; ?>" />
                      *</td>
                  </tr>
                  <tr>
                    <td>Kategori </td>
                    <td><select name="kategori">
                      <?php  if(!empty($katBarang)) { foreach($katBarang as $row) { ?>

              						?>
                      <option value='<?php echo $row->id ?>'><?php echo $row->kategori ?></option>
                      <?php
              					}
              				}
              				?>
                    </select></td>
                  <tr>
                    <td>Stok </td>
                    <td><input type="text" name="stok" maxlength="10" size="7" value="<?php echo isset($infouser['stok']) ? $infouser['stok'] : ''; ?>"/></td>
                  </tr>
                  <tr>
                    <td>Sediaan</td>
                    <td><select name="sediaan">
                      <?php  if(!empty($katSediaan)) { foreach($katSediaan as $row2) { ?>

              						?>
                      <option value='<?php echo $row2->sediaan ?>'><?php echo $row2->sediaan ?></option>
                      <?php
              					}
              				}
              				?>
                    </select></td>
                    </td>
                  </tr>
                  <tr>
                    <td>Isi </td>
                    <td><input type="text" name="isi" maxlength="10"  value="<?php echo isset($infouser['isi']) ? $infouser['isi'] : ''; ?>"/></td>
                  </tr>
                  <tr>
                    <td>Harga Beli </td>
                    <td><input type="text" name="harga_beli" maxlength="15" value="<?php echo isset($infouser['harga_beli']) ? $infouser['harga_beli'] : ''; ?>"/></td>
                  </tr>
                  <tr>
                    <td>Harga Jual</td>
                    <td><input type="text" name="harga_jual" maxlength="15" value="<?php echo isset($infouser['harga_jual']) ? $infouser['harga_jual'] : ''; ?>"/></td>
                  </tr>

                  <tr>


                      <td>Keterangan / Expire Date </td>



                      <td><input type="text" name="expired_date" id="datepicker" maxlength="10" value="<?php echo isset($infouser['expired']) ? $infouser['expired'] : ''; ?>"/></td>
                  </tr>
                  <tr>
                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                    <button class="btn btn-sm btn-white" onclick="goBack()">Back</button>


                  </tr>
              </table>
              </form>
              <script>
                $( function() {
                  $( "#datepicker" ).datepicker({
                  changeMonth: true,
                  changeYear: true
                });
                } );
              </script>
               <div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>              </div>
