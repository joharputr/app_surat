

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
                        </div> <br>


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
                            <td><?php echo tgl_indo($lihat->tgl_surat); ?></td> 
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
                                  <input style="margin-left:130px; width:30px" type="checkbox" value="Kapok Datin" name="disposisi[]"  >Kapok Datin
                                  <input style="margin-left:100px ; width:30px" type="checkbox" value="Kapok Obs" name="disposisi[]" >Kapok Obs <br> <br>

                                  <input style="width:30px" type="checkbox" value="Kapok Forcaster" name="disposisi[]">Kapok Forcaster
                                  <input style="margin-left:94px; width:30px"type="checkbox" value="Kapok Teknisi" name="disposisi[]" >Kapok Teknisi
                                  <input style="margin-left: 89px ; width:30px" type="checkbox" value="PPK" name="disposisi[]" >PPK <br> <br>

                                  <input style="width:30px" type="checkbox" value="Bendahara Penerimaan" name="disposisi[]" >Bendahara Penerimaan
                                  <input style="margin-left:42px; width:30px" type="checkbox" value="Bendahara Pengeluaran" name="disposisi[]" >Bendahara Pengeluaran
                                  <input style="margin-left:14px; width:30px" type="checkbox" value="Pejabat ULP" name="disposisi[]" >Pejabat ULP <br> <br>

                                  <input style="width:30px" type="checkbox" value="PPABP" name="disposisi[]">PPABP
                                  <input style="margin-left:158px; width:30px" type="checkbox" value="Petugas SAIBA" name="disposisi[]" >Petugas SAIBA
                                  <input style="margin-left:79px; width:30px" type="checkbox" value="Petugas BMN" name="disposisi[]" >Petugas BMN
                              </td>
                            </tr>
                         
                           <tr>
                              <th colspan="4">Disposisi: </th> 
                          </tr>

                          <tr>
                              <td height="150" colspan="4" align=left valign=top><?php echo $lihat->informasi_disposisi; ?></td> 

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
      </div>

<?php endforeach; ?>