<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Masuk
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Masuk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_jenis" class="btn btn-sm btn-primary btn-flat" data-target = "#example1"><i class="fa fa-plus"></i> Tambah</a>
                     <button class="btn btn-sm btn-light btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan2"><i class="fa fa-eye"></i> Lihat Data</button>
                     <a href="print_surat_masuk" target="_blank">
                     <button class="btn btn-sm btn-danger btn-flat" ><i class="fa fa-print"></i> Print</button></a>
                     <a href="export_jenis_surat" target="_blank">
                     <button class="btn btn-sm btn-danger btn-flat" ><i class="fa fa-print"></i> export to excel</button></a>
                     <a href="export_sql_jenis" target="_blank">
                     <button class="btn btn-sm btn-danger btn-flat" ><i class="fa fa-print"></i> backup sql</button></a>
                      <a href="delete_all_jenis" onclick="javascript: return confirm('Anda yakin akan menghapus semua data surat masuk ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus semua data </a>
                    
                <!-- bagian print -->
                     <!-- <a href="./admin/print_surat_masuk.php?surat_id=<? ?>" target="_blank"><button class="btn btn-sm btn-danger btn-flat"><i class="fa fa-print"></i> Cetak Data Surat Masuk </button></a> -->


                  </h3>
                 <!--  <div class="box-tools">
                  	
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Agenda</th>
                        <th>Tanggal Diterima</th>
                        <th>Kode Arsip</th>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Lampiran</th>
                        <th>Sifat Surat</th>
                        <th>Penjabat Pendisposisi</th>
                        <th>Disposisi</th>
                        <th>Surat Asli/copy</th>
                        <th>Informasi Disposisi</th>
                        <th>File Scan</th>
                        <th>Aksi</th> 

                      <!--   <th> No</th>
                        <th> Nama</th>
                        <th> Tanggal Surat</th>
                        <th> Gambar</th>
                        <th> Aksi</th> -->
                      
                     </tr>
                    </thead>

                    <tbody>

                      	<?php  
                        $no = 1; 
                        foreach ($data as $lihat):
                        ?>
                    	<tr>

                        <td><?php echo $no++ ?></td>
                    		<td> <div style="width: 100px;"><?php echo $lihat->no_agenda?></td>
                        <td>  <div style="width: 150px;"> <?php echo tgl_indo($lihat->tgl_terima) ?></td> </div>
                        <td> <div style="width: 100px;"><?php echo ucwords($lihat->kode_arsip) ?></td> 
                        <td>  <div style="width: 200px;"> <?php echo ucwords($lihat->no_surat) ?></td>
                        <td>  <div style="width: 150px;"> <?php echo tgl_indo($lihat->tgl_surat) ?></td> </div>
                        <td> <div style="width: 100px;"><?php echo ucfirst($lihat->pengirim) ?></td> 
                        <td> <div style="width: 400px;"> <?php echo ucfirst($lihat->perihal) ?></td>  </div>
                        <td> <div style="width: 100px;"><?php echo ucfirst($lihat->lampiran) ?></td> 
                        <td> <div style="width: 100px;"><?php echo ucfirst($lihat->sifat_surat) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->penjabat_disposisi) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->disposisi) ?></td> </div>
                        <td> <div style="width: 130px;"><?php echo ucwords($lihat->asli_copy) ?></td>  
                        <td> <div style="width: 350px;"> <?php echo ucwords($lihat->informasi_disposisi) ?></td> </div>
                        <td>  <a href="<?php echo base_url('upload/files/masuk/'.$lihat->gambar) ?>" width="64" > <?php echo base_url('upload/files/masuk/'.$lihat->gambar) ?> </a> </td> </div>
                       
                     
                        <td align="center">
                          <div class="btn-group" role="group" style="width: 350px;">
                            <a href="<?php echo base_url(); ?>admin/edit_jenis/<?php echo $lihat->surat_id ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_jenis/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                            <button class="btn btn-sm btn-primary btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan<?php echo $lihat->surat_id ?>"><i class="fa fa-eye"></i> Lihat Disposisi </button>
                            <a href="print_disposisi?surat_id=<?php  echo $lihat->surat_id; ?>" target="_blank">
                                <button class="btn btn-sm btn-light btn-flat" ><i class="fa fa-print"></i> Print</button></a>


<!-- modal lihat disposisi -->
            <div id="printThis<?php echo $lihat->surat_id; ?>">
              <div id="lihatlaporan<?php echo $lihat->surat_id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 80%">
                 
                 <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div> 

 <!-- lihat disposisi --> 
               
                  <div class="modal-body" > 
                    <div class="row">
                      <div class="col-lg-12" style="padding-left: 10%; padding-right: 10%">
                        <div class="row">
                          <div class="col-sm-2" style="text-align: center;">
                            <img src="<?php echo base_url() ?>logo_BMKG.png" style="width: 60%; height: auto;">
                          </div>
                            <div class="col-sm-10" style="text-align: center;">
                              BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                              <strong style="font-size: 150%">STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                              Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                              Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                              <br><br>
                            </div>
                        </div>
                            <div class="row" style="background-color: black; height: 4px;"></div> <br> <br>
                               <div>
                                <table style="border: 3px solid; font-family: arial, sans-serif; border-collapse: collapse;" align="right">
                                  <tr>
                                    <th >KODE ARSIP : </th>
                                    <th style="border: 3px solid"><?php echo $lihat->kode_arsip; ?> </th> 
                                    <th> <?php echo $lihat->no_agenda; ?>   </th>
                                  </tr>
                                </table>
                            </div> 

                        <div class="row" style="text-align: center;  "> <br>
                          <br><h3><strong>LEMBAR DISPOSISI </strong> </h3>
                          <br>
                        </div>

                        <div class="row">
                          <br>
                            <style>
                                th, tr, td{
                                  border: 3px solid;
                                  text-align: left;
                                  padding: 5px;
                                }
                            </style>

                         <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                            <tr >
                              <th> Surat Dari </th>
                              <td><?php echo $lihat->pengirim; ?> </td> 
                              <th> Diterima Tanggal </th>
                              <td> <?php echo tgl_indo($lihat->tgl_terima); ?>   </td>
                            </tr>

                             <tr>
                              <th>No Surat </th>
                              <td><?php echo $lihat->no_surat; ?> </td> 
                              <th> No Agenda  </th>
                              <td> <?php echo $lihat->no_agenda; ?>   </td>
                            </tr>

                             <tr>
                              <th>Tanggal Surat </th>
                              <td><?php echo tgl_indo($lihat->tgl_surat); ?> </td> 
                              <th> Diteruskan Kepada   </th>
                              <td> <?php echo $lihat->penjabat_disposisi ?>   </td>
                            </tr>

                             <tr>
                              <th>Lampiran </th>
                              <td><?php echo $lihat->lampiran; ?> </td> 
                              <th>Sifat Surat </th>
                              <td><?php echo $lihat->sifat_surat; ?> </td> 
                            </tr>

                            <tr>
                                <th >Perihal : </th> 
                                <td colspan="3" ><?php echo $lihat->perihal; ?></td> 
                            </tr>  

                            <tr>
                                <th colspan="4">Diserahkan Kepada : </th> 
                            </tr>
                             

                            <tr>
                              <td height="50" colspan="4"  align=left valign=top> 
                                  <input style="width:30px" type="checkbox" value="Tata Usaha" name="disposisi[]" >Tata Usaha
                                  <input style="margin-left:200px; width:30px" type="checkbox" value="Kapok Datin" name="disposisi[]"  >Kapok Datin
                                  <input style="margin-left:150px ; width:30px" type="checkbox" value="Kapok Obs" name="disposisi[]" >Kapok Obs <br> <br>
                                  <input style="width:30px" type="checkbox" value="Kapok Forcaster" name="disposisi[]">Kapok Forcaster
                                  <input style="margin-left:169px; width:30px"type="checkbox" value="Kapok Teknisi" name="disposisi[]" >Kapok Teknisi
                                  <input style="margin-left: 139px ; width:30px" type="checkbox" value="PPK" name="disposisi[]" >PPK <br> <br>
                                  <input style="width:30px" type="checkbox" value="Bendahara Penerimaan" name="disposisi[]" >Bendahara Penerimaan
                                  <input style="margin-left:123px; width:30px" type="checkbox" value="Bendahara Pengeluaran" name="disposisi[]" >Bendahara Pengeluaran
                                  <input style="margin-left:75px; width:30px" type="checkbox" value="Pejabat ULP" name="disposisi[]" >Pejabat ULP <br> <br>
                                  <input style="width:30px" type="checkbox" value="PPABP" name="disposisi[]">PPABP
                                  <input style="margin-left:225px; width:30px" type="checkbox" value="Petugas SAIBA" name="disposisi[]" >Petugas SAIBA
                                  <input style="margin-left:130px; width:30px" type="checkbox" value="Petugas BMN" name="disposisi[]" >Petugas BMN
                              </td>
                            </tr> <br>

                           <tr>
                              <th colspan="4">Disposisi: </th> 
                          </tr>

                          <tr>
                              <td height="300" colspan="4" align=left valign=top><?php echo $lihat->informasi_disposisi; ?></td> 
                          </tr> 
                         </table> <br>
                        </div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             </td>                  		
                </tr>
                   <?php endforeach; ?>

                   <!--    <?php  
                          $no = 1;
                          foreach ($gambar as $lihat):
                          ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                            <td> <div style="width: 100px;"><?php echo $lihat->nama?></td>
                            <td> <div style="width: 100px;"><?php echo tgl_indo($lihat->tgl_surat)?></td>
                      
                          <td>  <img src="<?php echo base_url('upload/files/'.$lihat->gambar) ?>" width="64" ></td> </div>

                        <td  align="center">
                        <div class="btn-group" role="group">
                           <a href="<?php echo base_url(); ?>admin/delete/<?php echo $lihat->id_gambar ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                           <a href="<?php echo base_url(); ?>admin/edit/<?php echo $lihat->id_gambar ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-edit"></i> Edit</a>
                        </td>                     
                      </tr>
                      <?php endforeach ?> -->
            </tbody>
          </table>
        </div>
      </div><!-- /.box-body -->
    </div>

  </div>
  <span>* jika ingin mengubah data(edit) dimohon mengisi kembali file scan, kode arsip dan disposisi</span>
</div>
</section><!-- /.content -->

</div><!-- /.content-wrapper -->



<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "demo_surat";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
?>
 

<?php
$query = mysqli_query($koneksi,"SELECT * FROM tb_jenis_surat ORDER BY surat_id DESC");
?>
 <div id="lihatlaporan2" class="modal fade" role="dialog">
     <div class="modal-dialog" style="width: 80%">
                 <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div> 
               <div class="modal-body" > 
                 <div class="row">
                   <div class="col-lg-12" style="padding-left: 10%; padding-right: 10%">
                     <div class="row">
                       <div class="col-sm-2" style="text-align: center;">
                         <img src="<?php echo base_url() ?>logo_BMKG.png" style="width: 60%; height: auto;">
                       </div>
                          <div class="col-sm-10" style="text-align: center;">
                            BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                            <strong style="font-size: 150%">STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                            Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                            Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                            <br><br>
                          </div>
                        </div>
                        <div class="row" style="background-color: black; height: 4px;"></div> <br> <br>
                        
<form action="" method="post">
    <table table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
        

        <tr >
           <th style="background-color: yellow; text-align: center;" > No  </th>
           <th style="background-color: yellow; text-align: center;" > No Agenda  </th>
           <th style="background-color: #ADFF2F; text-align: center;"> Tanggal Diterima </th>
           <th style="background-color: yellow; text-align: center;"> Kode Arsip </th>
           <th style="background-color: #ADFF2F; text-align: center;"> No Surat </th>
           <th style="background-color: yellow; text-align: center;"> Tanggal Surat </th>
           <th style="background-color: #ADFF2F; text-align: center;"> Pengirim </th>
           <th style="background-color: yellow; text-align: center;">Perihal  </th>
        </tr>

  <?php 

    $data = mysqli_query($koneksi, "SELECT * from tb_jenis_surat");
    $no=1;
    foreach ($data as $lihat){
        echo "<tr>
           <td > ".$lihat['surat_id']."</td>
           <td > ".$lihat['no_agenda']."</td>
           <td> ".tgl_indo($lihat['tgl_terima'])." </td>
           <td > ".$lihat['kode_arsip']." </td>
           <td >".$lihat['no_surat']."</td> 
           <td> ".tgl_indo($lihat['tgl_surat'])."  </td>
           <td>".$lihat['pengirim']." </td> 
           <td > ".$lihat['perihal']."  </td>
         </tr> " ;
        $no++;
    }
    ?>
    </table>
</form>
       </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>



