<?php
class mutasi_model extends CI_Model{

	function mutasi_model()
	{
		parent::__construct();
	}

	function simpan($data){

		$this->db->insert('mutasi',$data);
	}

	function kurangin($jumlah,$item){
		$this->db->query("UPDATE barang SET stok = stok - $jumlah WHERE nama = $item");

	}

	function rekap_kurang($jumlah,$item){
		$this->db->query("UPDATE apotik SET stok = stok - $jumlah WHERE nama = '$item'");

	}

	function hehe($limit='',$offset=''){
		$query=$this->db->query("select * from mutasi order by id DESC LIMIT 10 ");
		 if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$datac[]=$data;
			}

			return $datac;
		}

	}

	function riwayat_rekapresep(){
		$query=$this->db->query("select * from rekap_resep order by id DESC LIMIT 10 ");
		 if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$datac[]=$data;
			}

			return $datac;
		}

	}

	function desa(){
		$query=$this->db->query("select * from desa");
		 if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$datac[]=$data;
			}

			return $datac;
		}

	}

	}

// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>
