<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	  private $_table = "tb_surat_keluar";
	   private $_table2 = "tb_jenis_surat";

             

	function __construct(){
		parent::__construct();
		  $this->load->database();
               $this->load->library('Excel');
		 $this->load->model('model_admin');
		 $this->load->model('image_model');
	//	  $this->load->library('upload');
		 $this->load->library('form_validation');
	}

	function index(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}

		$a['jenis']	= $this->model_admin->tampil_jenis()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_jenis
		$a['surat_keluar']	= $this->model_admin->tampil_surat_keluar()->num_rows();
		
		$a['manage_user']	= $this->model_admin->tampil_manage_user()->num_rows();
		$a['disposisi']	= $this->image_model->tampil_disposisi()->num_rows();
		$a['siswa'] = $this->model_admin->export_surat_keluar();
		//$this->load->view('view',$a);

		$a['page']	= "home";
		
		$this->load->view('admin/index', $a);
	}	
	function email(){
	
		$a['page']	= "email";
		
		$this->load->view('admin/index', $a);
	}
	function disposisi(){
		$a['data']	= $this->image_model->tampil_disposisi()->result_object();
		$a['page']	= 'disposisi';
	    $a['gambar'] = $this->image_model->getAll();
		
		$this->load->view('admin/index', $a);
	}

	/* Fungsi Jenis Surat */
	function jenis_surat(){
		$a['data']	= $this->model_admin->tampil_jenis()->result_object();
		$a['page']	= "jenis_surat";

		$this->load->view('admin/index', $a);
	}

	function tambah_jenis(){
		$a['page']	= "tambah_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function insert_jenis(){
		
		$no_agenda = $this->input->post('no_agenda');
		$tgl_terima= $this->input->post('tgl_terima');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tgl_surat= $this->input->post('tgl_surat');
		$pengirim = $this->input->post('pengirim');
		$perihal = $this->input->post('perihal');
		$lampiran= $this->input->post('lampiran');
		$sifat_surat= $this->input->post('sifat_surat');
		$penjabat_disposisi= $this->input->post('penjabat_disposisi');
		$disposisi= $this->input->post('disposisi');
		$asli_copy = $this->input->post('asli_copy');
		$informasi_disposisi = $this->input->post('informasi_disposisi');

		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_terima' => $tgl_terima,
				'no_surat' => $no_surat,
				'tgl_surat' => $tgl_surat,
				'pengirim' => $pengirim,
				'perihal' => $perihal,
				'lampiran' => $lampiran,
				'sifat_surat' => $sifat_surat,
				'penjabat_disposisi' => $penjabat_disposisi,
				'disposisi' => $disposisi,
				'asli_copy' => $asli_copy,
				'informasi_disposisi' => $informasi_disposisi
			);
		$this->db->insert('tb_jenis_surat', $object);

		redirect('admin/jenis_surat','refresh');
	}

	function edit_jenis($id){
		$a['editdata']	= $this->db->get_where('tb_jenis_surat',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function update_jenis(){
		// $id = $this->input->post('id');
		
		// $no_agenda = $this->input->post('no_agenda');
		// $tgl_terima= $this->input->post('tgl_terima');
		// $kode_arsip = $this->input->post('kode_arsip');	
		// $no_surat = $this->input->post('no_surat');
		// $tgl_surat= $this->input->post('tgl_surat');
		// $pengirim = $this->input->post('pengirim');
		// $perihal = $this->input->post('perihal');
		// $lampiran= $this->input->post('lampiran');
		// $sifat_surat= $this->input->post('sifat_surat');
		// $penjabat_disposisi= $this->input->post('penjabat_disposisi');
		// $disposisi= implode(', ', $this->input->post('disposisi'));
		// $asli_copy = $this->input->post('asli_copy');
		// $informasi_disposisi = $this->input->post('informasi_disposisi');
		// $object = array(
		// 		'no_agenda' => $no_agenda,
		// 		'kode_arsip' => $kode_arsip,
		// 		'tgl_terima' => $tgl_terima,
		// 		'no_surat' => $no_surat,
		// 		'tgl_surat' => $tgl_surat,
		// 		'pengirim' => $pengirim,
		// 		'perihal' => $perihal,
		// 		'lampiran' => $lampiran,
		// 		'sifat_surat' => $sifat_surat,
		// 		'penjabat_disposisi' => $penjabat_disposisi,
		// 		'disposisi' => $disposisi,
		// 		'asli_copy' => $asli_copy,
		// 		'informasi_disposisi' => $informasi_disposisi
		// 	);
		// $this->db->where('surat_id', $id);
		// $this->db->update('tb_jenis_surat', $object); 

		$post = $this->input->post();
    	     	$this->surat_id = $post["id"];
        		$this->no_agenda = $post["no_agenda"];
        		$this->tgl_terima = $post["tgl_terima"];
        		$this->kode_arsip = $post["kode_arsip"];
        		$this->no_surat = $post["no_surat"];
        		$this->tgl_surat = $post["tgl_surat"];
        		$this->pengirim = $post["pengirim"];
        		$this->perihal = $post["perihal"];
        		$this->lampiran = $post["lampiran"];
        		$this->sifat_surat = $post["sifat_surat"];
        		$this->penjabat_disposisi = $post["penjabat_disposisi"];
        		$this->disposisi= implode(', ', $post['disposisi']);
        		$this->asli_copy = $post["asli_copy"];
        		$this->informasi_disposisi = $post["informasi_disposisi"];

		$this->gambar = $this->_uploadImage2();
        
    
        $this->db->update($this->_table2, $this, array('surat_id' => $post['id']));


		redirect('admin/jenis_surat','refresh');
	}

	function hapus_jenis($id){
		
		$this->model_admin->hapus_jenis($id);
		redirect('admin/jenis_surat','refresh');
	}


	/* Fungsi Surat Keluar */
	function surat_keluar(){
		$a['data']	= $this->model_admin->tampil_surat_keluar()->result_object();
		$a['page']	= "surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_surat_keluar(){
		$a['page']	= "tambah_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function insert_surat_keluar(){
		
		$no_agenda = $this->input->post('no_agenda');
		$tgl_surat= $this->input->post('tgl_surat');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tujuan = $this->input->post('tujuan');
		$perihal = $this->input->post('perihal');
		$asli_copy = $this->input->post('asli_copy');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_surat' => $tgl_surat,
				'no_surat' => $no_surat,
				'tujuan' => $tujuan,
				'perihal' => $perihal,
				'asli_copy' => $asli_copy,
				'keterangan' => $keterangan
			);
		$this->db->insert('tb_surat_keluar', $object);

		redirect('admin/surat_keluar','refresh');
	}

	function edit_surat_keluar($id){
		$a['editdata']	= $this->db->get_where('tb_surat_keluar',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function update_surat_keluar(){
	/*	$id = $this->input->post('id');
		$no_agenda = $this->input->post('no_agenda');
		$tgl_surat= $this->input->post('tgl_surat');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tujuan = $this->input->post('tujuan');
		$perihal = $this->input->post('perihal');
		$asli_copy = $this->input->post('asli_copy');
		$keterangan = $this->input->post('keterangan');
		$gambar = $this->_uploadImage();
		
		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_surat' => $tgl_surat,
				'no_surat' => $no_surat,
				'tujuan' => $tujuan,
				'perihal' => $perihal,
				'asli_copy' => $asli_copy,
				'gambar' => $this->_uploadImage(),
				'keterangan' => $keterangan
			);*/


		$post = $this->input->post();
    	     	$this->surat_id = $post["id"];
        		$this->no_agenda = $post["no_agenda"];
        		$this->tgl_surat = $post["tgl_surat"];
        		$this->kode_arsip = $post["kode_arsip"];
        		$this->no_surat = $post["no_surat"];
        		$this->tujuan = $post["tujuan"];
        		$this->perihal = $post["perihal"];
        		$this->asli_copy = $post["asli_copy"];
        		$this->keterangan = $post["keterangan"];
        
            $this->gambar = $this->_uploadImage();
        
    
        $this->db->update($this->_table, $this, array('surat_id' => $post['id']));


/*
		$this->db->where('surat_id', $id);
	//	$this->db->update('tb_surat_keluar', $object); 
		   $this->db->update($this->_table, $this, array('surat_id' => $post['id']));
*/
		redirect('admin/surat_keluar','refresh');
	}

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/files/keluar/';
    $config['allowed_types']        = 'gif|jpg|png|pdf';
    $config['file_name']            = $this->surat_id;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data('file_name');
    }
    
    else {
         return 'default.jpg';
    }
        
  
    }

    private function _uploadImage2()
    {
    $config['upload_path']          = './upload/files/masuk/';
    $config['allowed_types']        = 'gif|jpg|png|pdf';
    $config['file_name']            = $this->surat_id;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data('file_name');
    }
    
    else {
         return 'default.jpg';
    }
        
  
    }
	function hapus_surat_keluar($id){
		
		$this->model_admin->hapus_surat_keluar($id);
		redirect('admin/surat_keluar','refresh');
	}	

	/* Fungsi Manage User */
	function manage_user(){
		$a['data']	= $this->model_admin->tampil_user()->result_object();
		$a['page']	= "manage_user";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_user(){
		$a['page']	= "tambah_user";
		
		$this->load->view('admin/index', $a);
	}

	function insert_user(){
		
		$user 	  = $this->input->post('user');
		$pass = $this->input->post('pass');
		$nama	  = $this->input->post('nama');

		$object = array(
				'username' => $user,
				'password' => $pass,
				'nama' => $nama
			);
		$this->model_admin->insert_user($object);

		redirect('admin/manage_user','refresh');
	}

	function edit_user($id){
		$a['editdata']	= $this->model_admin->edit_user($id)->result_object();		
		$a['page']	= "edit_user";
		
		$this->load->view('admin/index', $a);
	}

	function update_user(){
		$id 	  = $this->input->post('id');
		$user 	  = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_old = $this->input->post('password');
		$nama	  = $this->input->post('nama');

		if (empty($password)) {
			$object = array(
				'username' => $user,
				'password' => $password,
				'nama' => $nama
			);
		}else{
			$object = array(
				'username' => $user,
				'password' => $password,
				'nama' => $nama
			);
		}

		
		$this->model_admin->update_user($id, $object);

		redirect('admin/manage_user','refresh');
	}

	function hapus_user($id){
		
		$this->model_admin->hapus_user($id);
		redirect('admin/manage_user','refresh');
	}	


	function print_disposisi(){
		if($this->input->get('surat_id')){
			$id = $this->input->get('surat_id');
			$data['data'] = $this->model_admin->getWhere('tb_jenis_surat', array('surat_id' => $id));

			$this->load->view('admin/print_disposisi', $data);
		}
		
	}

	function print_surat_masuk(){
		
			$data['data'] = $this->model_admin->semua();

			$this->load->view('admin/print_surat_masuk', $data);
		
		
	}

	function print_surat_keluar(){
		
			$data['data'] = $this->model_admin->semua2();

			$this->load->view('admin/print_surat_keluar', $data);
		
		
	}



		function tambah_disposisi(){
		$a['page']	= "tambah_disposisi";
		
		$this->load->view('admin/index', $a);

	}
		
	

	  public function add()
    {
    	$a['page']	= "tambah_disposisi";
		
		$this->load->view('admin/index', $a);
        $gambar = $this->image_model;
        $validation = $this->form_validation;
        $validation->set_rules($gambar->rules());

        if ($validation->run()) {
            $gambar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }   
    }

 public function edit($id = null)
    {
    		

        if (!isset($id)) redirect('admin/disposisi');
       
        $gambar = $this->image_model;
        $validation = $this->form_validation;
        $validation->set_rules($gambar->rules());
        if ($validation->run()) {
            $gambar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["gambar"] = $gambar->getById($id);
        if (!$data["gambar"]) show_404();

        $data['page']	= "edit_disposisi";
		
        $this->load->view("admin/index", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->image_model->delete($id)) {
            redirect(site_url('admin/disposisi'));
        }
    }

 public function sendEmail()
 {
	$this->load->helper(array('form', 'url'));
			$this->load->library('upload');
		//	$this->load->library('email');
			
$email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => '465',
            'smtp_user' => 'joharputraadek@gmail.com',
            'smtp_pass' => 'adekjelek1',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );
 		
        $this->load->library('email', $email_config);

        $this->email->from('joharputraadek@gmail.com', 'invoice');
   		$this->email->to($this->input->post('email_id')); // change 
       $this->email->subject($this->input->post('subject'));
       $this->email->message($this->input->post('body'));
      
   //  $attched_file= $_SERVER["DOCUMENT_ROOT"]."/upload/".$file_name;
     // $this->email->attach($attched_file);
     /*   $file_name = $this->upload_file();
        $this->email->attach($file_name);
     
        $this->email->send();*/
        	$this->upload->initialize(array(
            "upload_path"   => "./upload",
			"allowed_types" => "*"
			));
			
			//Perform upload.
			if($this->upload->do_multi_upload("lampiran"))
				{
				
				$lamp = $this->upload->get_multi_upload_data();
				foreach ($lamp as $key=>$value)
				{
					$this->email->attach($value['full_path']);
				}
			}else
			{
				echo $this->upload->display_errors();	
			}
			
			if($this->email->send())
			{
				echo "berhasil mengirim email";
			}else
			{
				echo "gagal mengirim email";
			}

 
 	redirect('admin/email','refresh');
}
	public function export(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();

		// Settingan awal fil excel
		$excel->getProperties()->setCreator('My Notes Code')
							   ->setLastModifiedBy('My Notes Code')
							   ->setTitle("Data Siswa")
							   ->setSubject("Siswa")
							   ->setDescription("Laporan Semua Data Siswa")
							   ->setKeywords("Data Siswa");

		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
			'font' => array('bold' => true), // Set font nya jadi bold
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SURAT KELUAR"); // Set kolom A1 dengan tulisan "DATA SISWA"
		$excel->getActiveSheet()->mergeCells('A1:J1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "NO AGENDA"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "TANGGAL SURAT"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "KODE ARSIP"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "NO SURAT"); 
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "TUJUAN");
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "PERIHAL"); 
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "ASLI/COPY"); 
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "KETERANGAN"); 
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "GAMBAR");  // Set kolom E3 dengan tulisan "ALAMAT"

		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);


		// Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
		$siswa = $this->model_admin->export_surat_keluar();

		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
		foreach($siswa as $data){ // Lakukan looping pada variabel siswa
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->no_agenda);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->tgl_surat);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kode_arsip);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_surat);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->tujuan);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->perihal);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->asli_copy);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->keterangan);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->gambar);


			
			// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
			
			$no++; // Tambah 1 setiap kali looping
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
		
		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
		$excel->setActiveSheetIndex(0);

		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data Siswa.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		ob_end_clean();
		header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="payroll.xlsx"');
		$write->save('php://output');
	}
public function export_sql_surat_keluar()
	{
		$this->load->dbutil();

$prefs = array(     
    'format'      => 'zip',             
    'filename'    => 'surat_keluar.sql'
    );


$backup =& $this->dbutil->backup($prefs); 

$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
$save = 'upload/'.$db_name;

$this->load->helper('file');
write_file($save, $backup); 


$this->load->helper('download');
force_download($db_name, $backup);
	}


public function delete_all_surat_keluar()
	{
	$this->db->empty_table('tb_surat_keluar'); 
	redirect('admin/surat_keluar');
     }

public function export_jenis_surat(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();

		// Settingan awal fil excel
		$excel->getProperties()->setCreator('My Notes Code')
							   ->setLastModifiedBy('My Notes Code')
							   ->setTitle("Data Siswa")
							   ->setSubject("Siswa")
							   ->setDescription("Laporan Semua Data Siswa")
							   ->setKeywords("Data SURAT MASUK");

		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
			'font' => array('bold' => true), // Set font nya jadi bold
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
			)
		);

		$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SURAT masuk"); // Set kolom A1 dengan tulisan "DATA SISWA"
		$excel->getActiveSheet()->mergeCells('A1:J1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "NO AGENDA"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "TANGGAL DITERIMA"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "KODE ARSIP"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "NO SURAT"); 
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "TANGGAL SURAT");
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "PENGIRIM"); 
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "PERIHAL"); 
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "LAMPIRAN"); 
		$excel->setActiveSheetIndex(0)->setCellValue('K3', "SIFAT SURAT");
		$excel->setActiveSheetIndex(0)->setCellValue('L3', "PEJABAT PENDISPOSISI");
		$excel->setActiveSheetIndex(0)->setCellValue('M3', "DISPOSISI");
		$excel->setActiveSheetIndex(0)->setCellValue('N3', "SURAT ASLI/COPY");
		$excel->setActiveSheetIndex(0)->setCellValue('O3', "INFORMASI DISPOSISI");
		$excel->setActiveSheetIndex(0)->setCellValue('P3', "GAMBAR");
							  // Set kolom E3 dengan tulisan "ALAMAT"

		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);


		// Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
		$siswa = $this->model_admin->export_jenis();

		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
		foreach($siswa as $data){ // Lakukan looping pada variabel siswa
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->no_agenda);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->tgl_terima);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kode_arsip);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_surat);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->tgl_surat);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->pengirim);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->perihal);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->lampiran);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->sifat_surat);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->sifat_surat);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->penjabat_disposisi);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->disposisi);
			$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->asli_copy);
			$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->informasi_disposisi);
			$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->gambar);


			
			// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);

			
			$no++; // Tambah 1 setiap kali looping
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
		
		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Laporan Data SURAT MASUK");
		$excel->setActiveSheetIndex(0);

		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data Siswa.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		ob_end_clean();
		header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="payroll.xlsx"');
		$write->save('php://output');
	}
	public function export_sql_jenis()
	{
		$this->load->dbutil();

$prefs = array(     
    'format'      => 'zip',             
    'filename'    => 'tb_jenis_surat.sql'
    );


$backup =& $this->dbutil->backup($prefs); 

$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
$save = 'upload/'.$db_name;

$this->load->helper('file');
write_file($save, $backup); 


$this->load->helper('download');
force_download($db_name, $backup);
	}


public function delete_all_jenis()
	{
	$this->db->empty_table('tb_jenis_surat'); 
	redirect('admin/jenis_surat');
     }
}

