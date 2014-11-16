<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ketiga extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//memanggil atau meload library form_validation
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('ketiga_view');
	}

	/**
	 * method yang digunakan untuk memvalidasi form yang ada di file ketiga_view
	 * @return [type] [description]
	 */
	public function validasi()
	{
		//perintah untuk mengeset rule/aturan validasinya
		//misal dalam contoh nama : harus diisi , umur : harus diisi dan berupa angka (numeric)
		
		//kita menggunakan method set_rules(params1,params2,params3)
		/*
			params1 = berisi atribute name di input ex : <input name="nama" /> //attribute name = nama
			params2 = berisi label pada input,
			params3 = berisi aturan validasi, ex : required (harus diisi) , numeric(harus berupa angka)
		*/
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');

		//library form_validasi akan menampilkan pesan error jika terjadi kesalahan, biasanya yg ditampilkan itu pesan default pada CI
		//tapi jika kita ingin mengubah pesan errornya jg bisa.misal kita ingin mengubah
		//pesan error untuk rules numeric mjd "%Label harus diisi angka"
		//untuk mengeset pesan error menggunakan method set_message(params1,params2)
		/*
			params1 : nama rules/aturannya. ex: numerid
			params2 : pesan yang mau ditampilkan
		*/
		
		$this->form_validation->set_message('numeric','%s harus diisi angka');

		//selanjutnya kita mengecek validasinya dg method run()
		if($this->form_validation->run() == FALSE) //jika validasi error
		{
			//redirect ke halaman ketiga_view tempat form berada
			$this->load->view('ketiga_view');
		}
		else //jika validasi ok
		{	
			//tampilkan hasil input dan pesan "Validasi OK"
			
			echo $this->input->post('nama');
			echo '<br>';
			echo $this->input->post('umur');
			echo '<br>';
			echo "VALIDASI OK";
			echo "<br>";
			echo anchor('ketiga/index', 'kembali');
		}
	}

	/**
	 * Buat Validasi Proses disini utk latihannya
	 * @return [type] [description]
	 */
	
	public function validasi_megha()
	{

	}

}

/* End of file ketiga.php */
/* Location: ./application/controllers/ketiga.php */