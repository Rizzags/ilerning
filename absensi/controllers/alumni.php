<?php
	/**
	* 
	*/
	class Alumni extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();

			$this->db_2 = $this->load->database('otherdb', TRUE); 
			$this->load->model('absensi/absensi_model');

			$this->load->library('menu_otomatis');
			$this->load->helper(array('form', 'url'));
			date_default_timezone_set("Asia/Jakarta");
		}

		private $mhs_log_in;
		private $nim_2;

		function index()
		{
				$data['title'] = 'Alumni';
		        $data['description'] = 'Alumni';
		        $data['keywords'] = 'Alumni';
		         $data['record'] = $this->absensi_model->alumni();
				   //isi konten
				$data['isicontent'] = 'absensi/tracer_study';
				$data['menu_header'] = $this->menu_otomatis->create_menu_admin
											(0, 1, 'menu_admin_elearning_dosen');
				$this->load->view('e_dosen/_layout',$data);	

		}

		function cetak_excel()
		{
			    header("Content-type: appalication/octet-stream");
				header("Content-disposition: attachment;filename=tracer_study.xls");
				header("Pragma: no-cache");
				header("Expiries: 0");

				$jurusan 		= $this->input->post('jurusan');
				$data['jurusan'] = $this->input->post('jurusan');
				$data['title'] = 'Alumni';
		        $data['description'] = 'Alumni';
		        $data['keywords'] = 'Alumni';
		         $data['record'] = $this->absensi_model->cetak_alumni($jurusan);
				   //isi konten
				$this->load->view('absensi/cetak_excel_tracer_study',$data);	

		}
	
	
	}


	
?>