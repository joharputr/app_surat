

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script>
$(document).ready(function(){
  window.print();
  });
</script>


  <?php  foreach ($data as $lihat): ?>

 <!-- lihat laporan --> 
               
                 
              <div class="modal-body" > 
                    <div class="row">
                      <div class="col-lg-12" style="padding-left: 5%; padding-right: 5%">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2 col-xl-2" style="text-align: center;">
                      <img src="<?php echo base_url() ?>logo_BMKG.png "
                            style="width: 80%; height: auto;">
                      </div>
                      
                          <div class="col-sm-10" style="text-align: center;">
                            BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                            <strong style="font-size: 150%">STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                            Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                            Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                            <br>
                            <hr width="100%" noshade style="border-top: 2px solid #000;">
                          </div>
                        </div> 
                      
                        <div class="row" style="text-align: center;  "> 
                          <h3><strong>SURAT PERINTAH TUGAS </strong> </h3>
                          <h3><strong>Nomor :  </strong> </h3>
                          <br>
                        </div>

                        <div class="row">

                           <div style="padding-left: 100px; font-size: 150%">
                            <br>
                            Yang bertanda tangan di bawah ini : <br>
                            Nama &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->pengirim; ?><br>
                            NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $lihat->pengirim; ?><br>
                            Pangkat/Gol &nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $lihat->pengirim; ?><br>
                            Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?php echo $lihat->pengirim; ?><br>
                            Unit Organisasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $lihat->pengirim; ?><br><br>

                            Dengan ini memberikan tugas kepada : <br>

                            Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php echo $lihat->pengirim; ?><br>
                            NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $lihat->pengirim; ?><br>
                            Pangkat/Gol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?php echo $lihat->pengirim; ?><br>
                            Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $lihat->pengirim; ?><br> <br>
                           
                            Demikian, untuk dilaksanakan sebagaimana mestinya. 

                           <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col-xl-6" align="center" style="float: right;">
                              <br>
                                Sleman, <?php echo $lihat->pengirim; ?> <br><br><br>
                                <u><?php echo $lihat->pengirim; ?></u><br>
                                <u><?php echo $lihat->pengirim; ?></u><br>
                                <u><?php echo $lihat->pengirim; ?></u><br>
                          </div>     

                            <br></div>
                        </div>
                                            Yang bertanda tangan di bawah ini :
                                            Nama : <?php echo $lihat->pengirim; ?>
                                NIP : <?php echo $lihat->pengirim; ?>
                                Pangkat/Gol.ruang : <?php echo $lihat->pengirim; ?>
                                Jabatan : <?php echo $lihat->pengirim; ?>
                                Unit Organisasi : Stasiun Klimatologi Kelas IV Mlati


                                Dengan ini memberikan tugas kepada :

                                Nama : <?php echo $lihat->pengirim; ?>
                                NIP : <?php echo $lihat->pengirim; ?>
                                Pangkat/Gol.ruang :<?php echo $lihat->pengirim; ?>
                                Jabatan : <?php echo $lihat->pengirim; ?>

                                Untuk melaksanakan :
                                Tugas : <?php echo $lihat->pengirim; ?>
                                Selama : <?php echo $lihat->pengirim; ?>
                                Lokasi : <?php echo $lihat->pengirim; ?>
                                Tanggal : <?php echo $lihat->pengirim; ?>


                               
                                Sleman, 4 Januari 2019
                                Kepala,

                                Agus Sudaryatno, S.Kom, MM
                                NIP 196101201980031001

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

<?php endforeach; ?>