<?php defined('BASEPATH') OR exit('No direct script access allowed');

class surat_masuk extends CI_Model
{
     private $surat_id;
     // public $tb_jenis_surat;
      private $_table = "tb_jenis_surat";
  //   public $no_agenda;
      public $tgl_terima;
      public  $kode_arsip;
      public  $no_surat;
      public $tgl_surat;
      public $pengirim;
      public  $perihal;
      public  $lampiran;
      public  $sifat_surat;
      public $penjabat_disposisi;
      public  $disposisi;
      public  $asli_copy;
      public  $informasi_disposisi;





  public function rules()
    {
        return [
         
             ['no_agenda' => 'no_agenda',
             'label' => 'no_agenda',
             'rules' => 'required']


            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

     public function getById($id)
    {
        return $this->db->get_where($this->_table, ['surat_id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $query = $this->db->query("SELECT * from gambar");
        $total= $query->num_rows();
        $total += 1;            
        $this->id_gambar = "$total";
        $this->tgl_surat = $post["tgl_surat"];
        $this->nama = $post["nama"];
        $this->gambar = $this->_uploadImage();
      // $this->surat_id = "1";
        $this->db->insert($this->_table, $this);
        redirect('admin/disposisi');
    }



 public function update()
    {

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
                // $this->disposisi = $post["disposisi"];
                  $this->asli_copy = $post["asli_copy"];
                   $this->informasi_disposisi = $post["informasi_disposisi"];
        
        
     
            $this->gambar = $this->_uploadImage2();
        

        
    
        $this->db->update($this->_table, $this, array('surat_id' => $post['id']));
        redirect('admin/jenis_surat');
    }
    public function delete($id)
    {
        $this-> _deleteImage($id);
        return $this->db->delete($this->_table, array("id_gambar" => $id));
    }


        
  
    
      private function _uploadImage2()
    {
    $config['upload_path']          = './upload/files/';
    $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
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



    private function _deleteImage($id)
{
    $delete = $this->getById($id);
    if ($delete->gambar != "default.jpg") {
        $filename = explode(".", $delete->gambar)[0];
        return array_map('unlink', glob(FCPATH."upload/files/$filename.*"));
    }
}
}


