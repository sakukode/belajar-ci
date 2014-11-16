<?php

class M_belajar extends CI_Model {

   //deklarasi variable $hello utk menampung kata say hello
   
   protected $hello = "Hello World";

   //membuat method utk mengambil variable $hello

   public function get_hello()
   {
      $text = $this->hello; // mengambil data d variable hello dg perintah $this->nama_variable (hello)

      return $text;  // return digunakan utk melempar variable ini, atau mengembalikan nilai ketika method ini nantinya dipanggil
   } 

   public function get_data()
   {
   		$this->db->select('first_name,email'); //select atau pilih field yang akan diambil dg perintah $this->db->select()
   		$this->db->from('test_table'); // deklarasikan nama table. disini nama tablenya 'test_table' $this->db->from()
   		$this->db->limit(20); // limit digunakan untuk membatasi. $this->db->limit()
  		$query = $this->db->get(); //mengambil datanya dg perintah $this->db->get()

   		//mengecek apakah datanya ada dengan mengecek jml row(baris) dari hasil query
   		
   		if($query->num_rows() > 0)//mengecek row apakah lebih dari 0 dengan perintah ->num_rows()
   		{
   			//jika jml row lebih dari 0
   			return $query->result(); //memparsing atau mengembalikan data ketika method ini nantinya dipanggil
   		}
   		else
   		{
   			//jika data kosong
   			return null; //mengembalikan nilai null atau kosong
   		}
   }
}