<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Buat Surat</a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Pembuatan Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_buat_surat'); ?>
                  

                   <div class="form-group">
                    <label for="exampleInputEmail1">No Surat </label>
                      <input type="text" class="form-control" name="no_surat" placeholder="No Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penanda Tangan </label>
                      <input type="text" class="form-control" name="nama1" placeholder="Nama"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP Penanda Tangan  </label>
                      <input type="text" class="form-control" name="nip1" placeholder="NIP"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pangkat/Gol.ruang Penanda Tangan </label>
                      <input type="text" class="form-control" name="pangkat1" placeholder="Pangkat/Gol.ruang"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan Penanda Tangan </label>
                      <input type="text" class="form-control" name="jabatan1" placeholder="Jabatan"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Unit Organisasi</label>
                      <input type="text" class="form-control" name="unit" placeholder="Unit Organisasi"/>
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penerima</label>
                      <input type="text" class="form-control" name="nama2" placeholder="Nama"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP Penerima</label>
                      <input type="text" class="form-control" name="nip2" placeholder="NIP"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pangkat/Gol.ruang Penerima</label>
                      <input type="text" class="form-control" name="pangkat2" placeholder="Pangkat/Gol.ruang"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan Penerima</label>
                      <input type="text" class="form-control" name="jabatan2" placeholder="Jabatan"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tugas</label>
                      <input type="text" class="form-control" name="tugas" placeholder="Tugas"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Selama</label>
                      <input type="text" class="form-control" name="waktu" placeholder="Selama"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi</label>
                      <input type="text" class="form-control" name="lokasi" placeholder="Lokasi"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                      <input type="text" class="form-control" name="tanggal"  id="tgl_terima" data-date-format="yyyy-mm-dd" placeholder="Tanggal"/>
                  </div>
                   <div class="form-group">
                       <label for="exampleInputEmail1">Kepala / PLH</label>
                         <select name="plh" required="required" class="form-control col-md-8">
                                <option value="Kepala,">Kepala</option>
                                <option value="PLH. Kepala,">PLH. Kepala</option>
                          </select>
                             
                  </div> <br><br>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Keterangan (Khusus Surat Keterangan)</label>
                    <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>
                  </div>

                  
                   
                   

                  <a href="<?php echo base_url(); ?>admin/buat_surat" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>