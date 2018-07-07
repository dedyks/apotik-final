<?php
class mutasi_model extends CI_Model{

	function mutasi_model()
	{
		parent::__construct();
	}

	function simpan($data){

		$this->db->insert('mutasi',$data);


	}
	}
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>
