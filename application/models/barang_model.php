<?php
class barang_model extends CI_Model{

	function barang_model()
	{
		parent::__construct();
	}
	function listBarang($limit='',$offset='',$id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select *,barang.id as id,kategori.kategori,sediaan.sediaan  from barang
			left join kategori on kategori.id=barang.kategori
			left join sediaan on sediaan.id=barang.sediaan
			order by id_barang DESC
			");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				if($id==1){
				return $datac;} else {
				return $query->num_rows() ;
				}
			}
		}

		function apotik($limit='',$offset='',$id=''){
				$menus='';
				$judul=$this->input->post('judul');
				$status=$this->session->userdata('STATUS');
				$addTag="";
				$query=$this->db->query("select *,apotik.id as id,kategori.kategori,satuan.satuan  from apotik
				left join kategori on kategori.id=apotik.kategori
				left join satuan on satuan.id=apotik.satuan
				order by id_barang DESC
				");
				 if ($query->num_rows() > 0) {
					foreach ($query->result() as $data) {
						$datac[]=$data;
					}
					if($id==1){
					return $datac;} else {
					return $query->num_rows() ;
					}
				}
			}

		function expireBarang(){$menus='';
		$judul=$this->input->post('judul');
		$status=$this->session->userdata('STATUS');
		$addTag="";
		$query=$this->db->query("select *,barang.id as id,kategori.kategori,satuan.satuan  from barang
		left join kategori on kategori.id=barang.kategori
		left join satuan on satuan.id=barang.satuan
		order by expired ASC
		");
		 if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$datac[]=$data;
			}
		return $datac;
		}
		}
		function getBarang($id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from barang where id='$id'");
			return $query->row();

		}

		function getApotik($id=''){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('STATUS');
			$addTag="";
			$query=$this->db->query("select * from apotik where id='$id'");
			return $query->row();

		}
		function getKategoriBarang(){

			$query=$this->db->query("select * from kategori");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
		}
		function getSediaanBarang(){

			$query=$this->db->query("select * from sediaan");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
		}
		function getObat(){

			$query=$this->db->query("select * from barang");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
		}


	function actBarang(){
		$id=$this->input->post('id');
		$id_barang=$this->input->post('id_barang');
		$nama=$this->input->post('nama');
		$kategori=$this->input->post('kategori');
		$stok=$this->input->post('stok');
		$sediaan=$this->input->post('sediaan');
		$isi=$this->input->post('isi');
		$beli=$this->input->post('beli');
		$jual=$this->input->post('jual');
		//$expired=$this->input->post('expired_date');
		$expired = date('Y-m-d',strtotime($_POST['expired_date']));


		$data=array(
	 	 'id_barang'=>$id_barang,
		 'nama'=>$nama,
		 'kategori'=>$kategori,
		 'stok'=>$stok,
		 'sediaan'=>$sediaan,
		 'isi'=>$isi,
		 'harga_beli'=>$beli,
		 'harga_jual'=>$jual,

		 'expired'=>$expired

		);
		if($id==''){
			$this->db->trans_start();
			$this->db->insert('barang',$data);
			$this->db->trans_complete(); }
			else {
			$this->db->trans_start();
			$this->db->where('id',$id);
			$this->db->update('barang', $data);
			$this->db->trans_complete();
		}

	}

}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>
