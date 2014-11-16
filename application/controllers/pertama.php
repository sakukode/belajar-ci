<?php

class Pertama extends CI_Controller {

   // membuat function __construct. semua statement/perintah yg dipanggil d method contruct akan dieksekusi disemua method di class ini maupun di kelas turunannya. 

   function __construct()
   {
     parent::__construct(); //sebaiknya setiap membuat controller, kita buat jg method construct .

     // meload model m_belajar
     
     $this->load->model('m_belajar');
   }
 
   //membuat fungsi index utk mengambil data say hello yg sudah d deklarasikan di model
   public function index()
   {
     //untuk mengambil datanya, kita panggil methodnya, td methodnya bernama get_hello()
     
     $say_hello = $this->m_belajar->get_hello();

     //jika variable $say_hello di print echo $say_hello makan akan menampilkan text $say_hello
     // tapi karena kita akan menggunakan aturan konsep mvc,maka kita tdk akan mencetak variabel $say_hello di controller. biarpun itu sebenarnya bisa2 saja. tapi kali ini kita print d view

    $data['hello'] = $say_hello; // menampung variable $say_hello ke dlm variable $data dg index hello ($data['hello'])
   
				// saya biasanya menggunakan variable $data utk menampung data yg akan diparsing/dikirim ke view   
      
   //setelah data ditampung, kita panggil viewnya
   
   $this->load->view('hello_view',$data); // memanggil view dengan perintah $this->load->view(parameter1,parameter2);
   //parameter pertama diisi dg nama file d folder application/views/ trus parameter kedua utk memparsing data..   
 }
  
}
