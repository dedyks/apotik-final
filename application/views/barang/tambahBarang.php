      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  	<script>


	function save(){
		$.ajax({
			url:'<?php echo base_url(); ?>barang/actBarang/',
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){
			  	if(data!=''){
					 $( "#infodlg" ).html(data);
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false});
				} else {
					 window.location="<?php echo base_url() ?>barang/listbarang";
				}
			 }
		});
	}
	function confirmdlg(){
					$("#confirm").dialog({
					 resizable: false,
					 modal: true,
					 title:"Info...",
					 draggable: false,
					 width: 'auto',
					 height: 'auto',
					 buttons: {
					 "Ya": function(){
						 save();
						  $(this).dialog("close");
					  },
					  "Tutup": function(){
						   $(this).dialog("close");
						}
					 }
				  });

			}

	</script>

  <script src="<?php echo base_url()?>js/typeahead.bundle.js"></script>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>







  </div>
<form method="post" action="<?php echo base_url(); ?>barang/actBarang/" class="form1" id="form_barang" name="form_barang"/>
  <table class="table table-striped table-bordered table-hover">
    <tr>
      <td>Dari</td>
      <td>
        <select name="dari">
          <option value="JKN">JKN</option>
          <option value="uang PKM">uang Puskesmas</option>
          <option value="GFK Dinas">GFK Dinas</option>

        </select>


</td>
    </tr>
    <tr>
      <td>ID Barang </td>
      <td><input type="text" name="id_barang" maxlength="5" size="5"    value="<?php echo isset($infouser['id_barang']) ? $infouser['id_barang'] : ''; ?> "/>
        *</td>
    </tr>
    <tr>
      <td>Nama Obat, Alat Kesehatan, Dll </td>
      <td><input type="text" id="search" name="nama" maxlength="25" value="<?php echo isset($infouser['nama']) ? $infouser['nama'] : ''; ?>" />
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
      <td>Jumlah </td>
      <td><input type="text" name="stok" maxlength="10" size="7" value="<?php echo isset($infouser['stok']) ? $infouser['stok'] : ''; ?>"/></td>
    </tr>
    <tr>
      <td>Sediaan</td>
      <td><select name="satuan">
        <?php  if(!empty($katSatuan)) { foreach($katSatuan as $row2) { ?>

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
      <td><input type="text" name="isi" maxlength="10" size="5" value="<?php echo isset($infouser['isi']) ? $infouser['isi'] : ''; ?>"/></td>
    </tr>

    <tr>
      <td>Harga Beli </td>
      <td><input type="text" name="harga_beli" maxlength="10" size="5" value="<?php echo isset($infouser['harga_beli']) ? $infouser['harga_beli'] : ''; ?>"/></td>
    </tr>

    <tr>
      <td>Harga Beli </td>
      <td><input type="text" name="harga_beli" maxlength="10" size="5" value="<?php echo isset($infouser['harga_beli']) ? $infouser['harga_beli'] : ''; ?>"/></td>
    </tr>

    <tr>
    </tr>
      <tr>


          <td>Keterangan / Expire Date </td>



          <td><input type="text" name="expired_date" id="datepicker" maxlength="10" size="5" value="<?php echo isset($infouser['isi']) ? $infouser['isi'] : ''; ?>"/></td>
      </tr>
      <tr>
          <td>Khasiat </td>
          <td><input type="text" name="khasiat" maxlength="10" size="5" value="<?php echo isset($infouser['isi']) ? $infouser['isi'] : ''; ?>"/></td>
      </tr>
<td>
  <button class="btn btn-sm btn-white" type="submit">Submit</button>

</td>
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
