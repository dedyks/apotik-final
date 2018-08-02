<?php

class laporan extends CI_Controller {

	var $limit=10;
	var $offset=10;
 	function listLaporanBeli($limit='',$offset=''){
		$this->load->model("laporan_model");
		$data['judul']='LAPORAN PENJUALAN';
	 	$data['table']=$this->laporan_model->listLaporanBeli($limit,$offset,1);
		$data['view']='laporan/listlaporan';
		$this->load->view('index',$data);
	}
	function listLaporanJual($limit='',$offset=''){
		$this->load->model("laporan_model");
		$data['judul']='LAPORAN PEMBELIAN';
	 	$data['table']=$this->laporan_model->listLaporanJual($limit,$offset,1);
		$data['view']='laporan/listlaporan';
		$this->load->view('index',$data);
	}

  function rekap_resep(){

	$this->load->model("mutasi_model");

	$data['query'] = $this->mutasi_model->riwayat_rekapresep();
 	$this->load->view('header');
    $this->load->view('laporan/rekap_resep',$data);
  }

	function rekap_delete($no){

		$this->db->query("DELETE rekap_resep FROM rekap_resep WHERE no='$no'");
		$this->db->query("DELETE rekap_resep_barang FROM rekap_resep_barang WHERE no='$no'");
		redirect('laporan/rekap_resep');

  }

	function expire_date(){
		$this->load->model("barang_model");


		/*----------------*/
		$data['query']=$this->barang_model->expireBarang();
		$this->load->view('header');
		$this->load->view('laporan/expire_date',$data);
	}

  public function simpan_resep(){
		$this->load->model('mutasi_model');
    $data_RekapResep = array(

      'no' => $this->input->post('no'),
      'item' => $this->input->post('item'),
      'usia' => $this->input->post('usia'),
      'alamat' => $this->input->post('alamat')
    );

		$this->db->insert('rekap_resep',$data_RekapResep);

		$data_RekapResepBarang = array(
			'no' => $this->input->post('no'),
			'nama_obat' => $this->input->post('nama_obat'),
			'jumlah' => $this->input->post('jumlah'),
			'aturan' => $this->input->post('aturan'),
			'diagnosa' => $this->input->post('diagnosa')
		);

		//print_r($data_RekapResepBarang);
		$i=0;
		do {
			// code...
			$nama_obat = $data_RekapResepBarang['nama_obat'][$i];
			$no=$this->input->post('no');
			$jumlah=$data_RekapResepBarang['jumlah'][$i];
			$aturan=$data_RekapResepBarang['aturan'][$i];
			$diagnosa	=	$data_RekapResepBarang['diagnosa'][$i];

			$submit_RekapResepBarang = array(
				'no' => $no,
				'jumlah' => $jumlah,
				'nama_obat' => $nama_obat,
				'aturan' => $aturan,
				'diagnosa' => $diagnosa
			);
			$i++;
			//print_r(json_encode($submit_RekapResepBarang));
			if($nama_obat != null){

				$this->db->insert('rekap_resep_barang',$submit_RekapResepBarang);

				$this->mutasi_model->rekap_kurang($jumlah,$nama_obat);
			}
		} while ($nama_obat != null);

		header("Location: {$_SERVER["HTTP_REFERER"]}");
  }

	function kartu_stock(){

		$this->load->view('header');
	}

	function pemesanan(){
		$this->load->view('header');

	}

	function pengembalian(){
		$this->load->view('header');

	}

	function penerimaan(){
		$this->load->view('header');

	}

	function dimusnahkan(){

		$this->load->view('header');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
