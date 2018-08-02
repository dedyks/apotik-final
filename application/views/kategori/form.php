      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/themes/jquery.ui.all.css" type="text/css" />
  <div class="ibox-content">
    <form method="post" action="<?php echo base_url(); ?>kategori/act/"  class="form1" id="form_barang" name="form_barang"/>
      <table>
        <tr>
          <td><input type="hidden" name="id" maxlength="5" size="5"  hidden value="<?php echo $id; ?>"/></td>
        </tr>
        <tr>
          <td>ID Barang </td>
          <td><input type="text" name="id_kategori" maxlength="5" size="5"    value="<?php echo isset($infouser['id_kategori']) ? $infouser['id_kategori'] : ''; ?> "/>
            *</td>
        </tr>
        <tr>
          <td>Nama Barang </td>
          <td><input type="text" name="kategori" maxlength="25" value="<?php echo isset($infouser['kategori']) ? $infouser['kategori'] : ''; ?>" />
            *</td>
        </tr>

        <tr>
          <td>  <button class="btn btn-sm btn-white" type="submit">Submit</button>
 <a style="margin-bottom:5px;" href="<?php echo base_url() ?>kategori/listKategori" class="dark_blue btn">Kembali</a></td>
        </tr>
    </table>
    </form>
  </div>

 <div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>
