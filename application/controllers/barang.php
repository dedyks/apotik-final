<?php

class barang extends CI_Controller {

	var $limit=10;
	var $offset=10;
 	function listBarang($limit='',$offset=''){
		$this->load->model("barang_model");
		$data['judul']='Selamat Datang';
		/* pAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->barang_model->listBarang($limit,$offset,2);
		$config['base_url'] = base_url().'barang/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->barang_model->listBarang($limit,$offset,1);

     $this->load->view('header',$data );
     $this->load->view('barang/master',$data );


	}

	function apotik($limit='',$offset=''){
		$this->load->model("barang_model");
		$data['judul']='Selamat Datang';
		/* pAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$data['count']=$this->barang_model->listBarang($limit,$offset,2);
		$config['base_url'] = base_url().'barang/search/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		/*----------------*/
		$data['query']=$this->barang_model->apotik($limit,$offset,1);
		//$data['view']='barang/listbarang';
		//$this->load->view('index',$data);
    $this->load->view('header',$data );
    $this->load->view('barang/apotik',$data );
  //  $this->load->view('footer',$data );
	}


	function formBarang($id=''){
		$this->load->model("barang_model");
		$data['judul']='Tambah Barang / Ubah Barang';
		if($id!=''){
		$info=$this->barang_model->getBarang($id);
			$data['infouser']['id']=$info->id;
			$data['infouser']['id_barang']=$info->id_barang;
			$data['infouser']['nama']=$info->nama;
			$data['infouser']['kategori']=$info->kategori;
			$data['infouser']['stok']=$info->stok;
			$data['infouser']['sediaan']=$info->sediaan;
			$data['infouser']['isi']=$info->isi;
			$data['infouser']['harga_beli']=$info->harga_beli;
			$data['infouser']['harga_jual']=$info->harga_jual;
			$data['infouser']['expired']=$info->expired;
		}
		$data['katBarang']=$this->barang_model->getKategoriBarang();
		$data['katSediaan']=$this->barang_model->getSediaanBarang();
		$data['id']=$id;
		//$data['view']='barang/formBarang';
		//$this->load->view('index',$data);
		$this->load->view('header');
		$this->load->view('barang/form',$data);

	}
	function tambahBarang($id=''){
		$this->load->model("barang_model");
		$data['judul']='Tambah / Ubah Obat, Alat Kesehatan, dll';
		if($id!=''){
		$info=$this->barang_model->getBarang($id);
			$data['infouser']['id']=$info->id;
			$data['infouser']['id_barang']=$info->id_barang;
			$data['infouser']['nama']=$info->nama;
			$data['infouser']['kategori']=$info->kategori;
			$data['infouser']['stok']=$info->stok;
			$data['infouser']['sediaan']=$info->sediaan;
			$data['infouser']['isi']=$info->isi;
			$data['infouser']['harga_beli']=$info->harga_beli;
			$data['infouser']['harga_jual']=$info->harga_jual;
			$data['infouser']['expired']=$info->expired;
		}
		$data['katBarang']=$this->barang_model->getKategoriBarang();
		$data['katSediaan']=$this->barang_model->getSediaanBarang();
		$data['id']=$id;
		//$data['view']='barang/tambahBarang';
		$this->load->view('header');

		$this->load->view('barang/tambahBarang',$data);
		//$this->load->view('index',$data);
	}

	function actBarang(){
		$this->load->model("barang_model");
		$this->barang_model->actBarang();
		redirect('barang/listBarang');
	}

	function delete($id){
		$this->db->query("DELETE barang FROM barang WHERE id=$id");
		redirect('/barang/listBarang');
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
