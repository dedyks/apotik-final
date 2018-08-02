<?php

class apotik extends CI_Controller {

  var $limit=10;
  var $offset=10;
  function formApotik($id=''){
    $this->load->model("barang_model");
    $data['judul']='Tambah Barang / Ubah Barang';
    if($id!=''){
    $info=$this->barang_model->getBarang($id);
      $data['infouser']['id']=$info->id;
      $data['infouser']['id_barang']=$info->id_barang;
      $data['infouser']['nama']=$info->nama;
      $data['infouser']['kategori']=$info->kategori;
      $data['infouser']['stok']=$info->stok;
      $data['infouser']['satuan']=$info->satuan;
      $data['infouser']['isi']=$info->isi;
      $data['infouser']['harga_beli']=$info->harga_beli;
      $data['infouser']['harga_jual']=$info->harga_jual;
      $data['infouser']['expired']=$info->expired;
    }
    $data['katBarang']=$this->barang_model->getKategoriBarang();
    $data['katSatuan']=$this->barang_model->getSatuanBarang();
    $data['id']=$id;
    //$data['view']='barang/formBarang';
    //$this->load->view('index',$data);
    $this->load->view('header');
    $this->load->view('barang/form',$data);

  }

}
