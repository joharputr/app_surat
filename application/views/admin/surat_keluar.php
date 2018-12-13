<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Keluar
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Keluar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_surat_keluar" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                  </h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Agenda</th>
                        <th>Tanggal Surat</th>
                        <th>Kode Arsip</th>
                        <th>No Surat</th>
                        <th>Tujuan</th>
                        <th>Perihal</th>
                        <th>Surat Asli/copy</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                      	$no = 1;
                      	foreach ($data as $lihat):
                      	?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                    	<td><?php echo $lihat->no_agenda?></td>
                        <td><?php echo tgl_indo($lihat->tgl_surat) ?></td> 
                    	<td><?php echo ucwords($lihat->kode_arsip) ?></td> 
                      <td><?php echo ucwords($lihat->no_surat) ?></td> 
                      <td><?php echo ucfirst($lihat->tujuan) ?></td> 
                      <td><?php echo ucfirst($lihat->perihal) ?></td>  
                      <td><?php echo ucwords($lihat->asli_copy) ?></td>  
                      <td><?php echo ucwords($lihat->keterangan) ?></td>  
                        <td  align="center">
                          <div class="btn-group" role="group" style="width: 350px;">
                            <a href="<?php echo base_url(); ?>admin/edit_surat_keluar/<?php echo $lihat->surat_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_surat_keluar/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                           
                        </td>                  		
                    	</tr>
                    	<?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
