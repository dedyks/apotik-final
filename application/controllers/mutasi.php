<?php

class mutasi extends CI_Controller {

	var $limit=10;
	var $offset=10;
 	function index($limit='',$offset=''){
		 $data['judul']='Mutasi';
		 $data['view']='mutasi/barang_keluar';
		 //$data['table']=$this->generateFaktur();
		 $this->load->view('index',$data);
	}

	function simpan(){
		$this->load->helper('form');
	//	$this->load->model('mutasi_model');

	//	$this->load->model("mutasi_model");
		$data = array(
			'dari' => $this->input->post('dari'),
			'nama' => $this->input->post('item'),
			'satuan' => $this->input->post('sediaan'),
			'stok' => $this->input->post('jumlah'),
			//'keterangan' => $this->input->post('keterangan'),
			//'khasiat' => $this->input->post('khasiat'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'lokasi' => $this->input->post('tujuan')
		);

		$data_mutasi = array(

			'nama' => $this->input->post('item'),
			'dari' => $this->input->post('dari'),
			'satuan' => $this->input->post('sediaan'),
			'jumlah' => $this->input->post('jumlah'),
			'keterangan' => $this->input->post('keterangan'),
			'khasiat' => $this->input->post('khasiat'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'lokasi' => $this->input->post('tujuan')
		);
		$this->db->insert('mutasi',$data_mutasi);

	//	$this->load->model('mutasi_model');
		$item=$this->input->post('item');
		$tujuan=$this->input->post('tujuan');
		$jumlah=$this->input->post('jumlah');

		if($tujuan="Apotik"){

			$ada = $this->db->query("SELECT * FROM apotik WHERE nama = '$item'");

			if(!$ada) {
				$query =$this->db->insert('apotik',$data);




			}
			else {
				// code...
					$query = $this->db->query("UPDATE apotik SET stok = stok + $jumlah WHERE nama = '$item'");
			}

		}

		$jumlah=$this->input->post('jumlah');
		$item=$this->input->post('item');

		$query = $this->db->query("UPDATE barang SET stok = stok - $jumlah WHERE nama = '$item'");

	//	$query=$this->mutasi_model->kurangin($jumlah,$item);

	//	$this->mutasi_model->simpan($data);
	header("Location: {$_SERVER["HTTP_REFERER"]}");
	}

	function apotik($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($query->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		$data['tujuan'] = "Apotik";
		$this->load->view('header');
		$this->load->view('mutasi/tujuan',$data);
	//	$this->load->view('footer');
	}

	function tujuan($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;
		$data['tujuan'] = "Apotik";
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		$this->load->view('header');
		$this->load->view('mutasi/tujuan',$data);
	//	$this->load->view('footer');
	}

	function ugd($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;
		$data['tujuan'] = "UGD";
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		$this->load->view('header');
		$this->load->view('mutasi/tujuan',$data);
	//	$this->load->view('footer');
	}

	function rawat_inap($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;
		$data['tujuan'] = "Rawat Inap";
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		$this->load->view('header');
		$this->load->view('mutasi/tujuan',$data);
	//	$this->load->view('footer');
	}

	function ruang_bersalin($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;
		$data['tujuan'] = "Ruang Bersalin";
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		$this->load->view('header');
		$this->load->view('mutasi/tujuan',$data);
	//	$this->load->view('footer');
	}

	function ulang($id){
	//	$data['query'] = $this->mutasi_model->hehe($limit,$offset);


try {
	$query = $this->db->query("SELECT * FROM mutasi WHERE id='$id'");
//print_r($item);

if ($query->num_rows() > 0) {
foreach ($query->result() as $data) {
 $datac[]=$data;
}
$item = $datac[0]->nama;
$jumlah = $datac[0]->jumlah;

//echo $item,$jumlah;
}
	$this->db->query("UPDATE barang SET stok = stok + $jumlah WHERE nama = '$item'");
	$this->db->query("DELETE mutasi FROM mutasi WHERE id='$id'");
} catch (\Exception $e) {

}

header("Location: {$_SERVER["HTTP_REFERER"]}");

	}



	function posyandu($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$this->load->view('header');
		$this->load->view('mutasi/posyandu',$data);
	//	$this->load->view('footer');
	}

	function posyandu_etam($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Bumi Etam";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_graha($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Cipta Graha";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_jaya($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Bumi Jaya";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_permata($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Bukit Permata";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_pangadan($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Pangadan Baru";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_kadungan($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Kadungan Jaya";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_air($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Mata Air";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}

	function posyandu_rapak($limit='',$offset=''){
		$this->load->model("mutasi_model");
		//$this->load->model("barang_model");

		//  $query = $this->db->query('SELECT * FROM mutasi');
		//
		// if ($query->num_rows() > 0) {
		//  foreach ($que	ry->result() as $data) {
		// 	 $datac[]=$data;
		//  }
	 // };
	 	//$data['query'] = $datac;

		$data['tujuan'] = $this->mutasi_model->desa();
		$data['query'] = $this->mutasi_model->hehe($limit,$offset);
		//print_r($data['query']);

		//echo $desa;
		$data['posyandu']="Bumi Rapak";
		$this->load->view('header');
		$this->load->view('mutasi/posyandu_level',$data);
	//	$this->load->view('footer');
	}




}
