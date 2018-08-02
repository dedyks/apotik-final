<?php

/**
 *
 */

class search extends CI_Controller
{

  public function find()
  {

    if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT * FROM barang WHERE nama LIKE '%{$query}%' ");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['nama'],
            'value' => $row['nama'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
  }

  }

  public function obat_apotik()
  {

    if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT * FROM apotik WHERE nama LIKE '%{$query}%' ");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['nama'],
            'value' => $row['nama'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
  }

  }

  public function satuan()
  {

    if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT * FROM satuan WHERE satuan LIKE '%{$query}%' ");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['satuan'],
            'value' => $row['satuan'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
  }

  }
     //$hehe = $this->db->query("select * from barang");
     //echo $hehe;
  //   $this->db->like('name','$request->q')
  //    return DB::collection('univ_suggestion')->where('name', 'LIKE', '%'.$request->q.'%')->get();
  }

?>
