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

	//	$this->load->model("mutasi_model");
		$data = array(
			'nama' => $this->input->post('item'),
			'sediaan' => $this->input->post('sediaan'),
			'jumlah' => $this->input->post('jumlah'),
			'keterangan' => $this->input->post('keterangan'),
			'khasiat' => $this->input->post('khasiat')
		);
		$this->db->insert('mutasi',$data);
echo $data;
echo "hai";

	//	$this->mutasi_model->simpan($data);

	}

}
