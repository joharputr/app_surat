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
                  <body>

                 <div class="" id="">  <label for="exampleInputEmail1">nama pengirim</label>
                  <br>
            <select name="nama1" class="form-control" id="nama1" onchange="javascript: dynamicdropdown1(this.options[this.selectedIndex].value);">
                <option value="">pilih nama</option>
                <option value="AGUS SUDARYATNO, S.Kom, MM">AGUS SUDARYATNO, S.Kom, MM</option>
                   <option value="SUTAMSI, SP">SUTAMSI, SP</option>
                  <option value="ANDRIYAS ARYO PRABOWO, M.Si">ANDRIYAS ARYO PRABOWO, M.Si</option>
                  <option value="SIGIT HADI PRAKOSA, S.P.,M.Si">SIGIT HADI PRAKOSA, S.P.,M.Si</option>
                  <option value="DJOKO BUDIYONO, SP,S.Si M.Si">DJOKO BUDIYONO, SP,S.Si</option>
                 <option value="ETIK SETYANINGRUM, S,Si.,M.Si">ETIK SETYANINGRUM, S,Si.,M.Si</option>
                   <option value="SUBANDI, SP">SUBANDI, SP</option>
                 <option value="ROMADI, S.Si">ROMADI, S.Si, S.Si</option>
                   <option value="AGUSTA KURNIAWAN,S.Si"> KURNIAWAN,S.Si </option>
                  <option value="ELVERA L">ELVERA L</option>
                   <option value="SUCIYATI RUBIKAYATUN">SUCIYATI RUBIKAYATUN</option>
                 <option value="NUGROHO PURWANTORO, SH">NUGROHO PURWANTORO, SH</option>
                  <option value="ELIYAH ULFAH ROHMAWATI, SP">ELIYAH ULFAH ROHMAWATI, SP</option>
                  <option value="GIYARTO, ST">GIYARTO, ST</option>
                   <option value="INDAH RETNO WULAN, SP">INDAH RETNO WULAN, SP</option>
                  <option value="FITRIANI, S.Si">FITRIANI, S.Si</option>
                   <option value="HARYATI, S.P, M.Sc">HARYATI, S.P, M.Si</option>
                 <option value="ENDAH KURNIASIH, S.P., M.Si">ENDAH KURNIASIH, S.P., M.Si</option>
                   <option value="ANUR FAJAR ASTUTI">ANUR FAJAR ASTUTI</option>
                 <option value="MUHAMMAD ROMLI">MUHAMMAD ROMLI</option>
                   <option value="YUDHA TINTANA MARGANISWATI">YUDHA TINTANA MARGANISWATI</option>
                  <option value="INTAN WILUJENG FAJARIANTY, S.Si, M.Sc">INTAN WILUJENG FAJARIANTY, S.Si, M.Sc</option>
                    <option value="FERDINANDUS EDWIN PENALUN, ST">FERDINANDUS EDWIN PENALUN, ST</option>
                  <option value="ARI RISNANTO, S.Kom">ARI RISNANTO, S.Kom</option>
                 <option value="EMMY PURNASHOLIHA, SST">EMMY PURNASHOLIHA, SST</option>
                   <option value="ANANG ARIANE, S,Si, M.Sc">ANANG ARIANE, S,Si, M.Sc</option>
                 <option value="ITTAKA ALDINI T., S.Tr">ITTAKA ALDINI T., S.Tr</option>
                   <option value="ISTI WAHYUNINGSIH, SE">ISTI WAHYUNINGSIH, SE</option>
                  <option value="DESY RUMAYANTI SETYO">DESY RUMAYANTI SETYO</option>
                    <option value="LISA AGUSTINA, A.P">LISA AGUSTINA, A.P</option>

              
            </select>
        </div>
        <br>
                  <div class="" id=""> 
                    <label for="exampleInputEmail1">nip Pengirim</label>
                    <br>
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="nip1" id="nip1" class="form-control" onchange="javascript: dynamicdropdownone1(this.options[this.selectedIndex].value);"><option value="">Pilih NIP</option></select>')
            </script>
            
        </div>
        <br>
                  <div class="" id=""> <label for="exampleInputEmail1">pangkat golongan pengirim</label><br>
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="pangkat1" class="form-control" onchange="javascript: this.options[this.selectedIndex].value;" id="pangkat1"><option value="">Pilih  Pangkat </option></select>')
            </script>
          
        </div>
        <br>
                     <div class="" id=""> <label for="exampleInputEmail1">jabatan pengirim</label><br>
         <!--    <script type="text/javascript" language="JavaScript">
                document.write('<select name="jabatan1" class="form-control" onchange="javascript: this.options[this.selectedIndex].value;" id="jabatan1"><option value="">Pilih Jabatan </option></select>')
            </script> -->
            <select id="jabatan1" name="jabatan1" class="form-control">
              <option>Kepala </option>
              <option>PMG Madya</option>
              <option>PMG Muda</option>
              <option>Peneliti Muda</option>
              <option>PMG Penyelia</option>
              <option>PMG Pertama</option>
              <option>PMG Pelaksana Lanjutan</option>
              <option>Pengadministrasian Keu</option>
              <option>Pengadministrasian Umum</option>
              <option>PMG Pelaksana </option>
            </select>
            <br>
            </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Unit Organisasi</label>
                      <input type="text" class="form-control" name="unit" placeholder="Unit Organisasi"/>
                  </div>


                    <div class="category_div" id="category_div">  <label for="exampleInputEmail1">nama penerima</label>
                  <br>
            <select name="nama2" class="form-control" id="nama2" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                <option value="">pilih nama</option>
                <option value="AGUS SUDARYATNO, S.Kom, MM">AGUS SUDARYATNO, S.Kom, MM</option>
                   <option value="SUTAMSI, SP">SUTAMSI, SP</option>
                  <option value="ANDRIYAS ARYO PRABOWO, M.Si">ANDRIYAS ARYO PRABOWO, M.Si</option>
                  <option value="SIGIT HADI PRAKOSA, S.P.,M.Si">SIGIT HADI PRAKOSA, S.P.,M.Si</option>
                  <option value="DJOKO BUDIYONO, SP,S.Si M.Si">DJOKO BUDIYONO, SP,S.Si</option>
                 <option value="ETIK SETYANINGRUM, S,Si.,M.Si">ETIK SETYANINGRUM, S,Si.,M.Si</option>
                   <option value="SUBANDI, SP">SUBANDI, SP</option>
                 <option value="ROMADI, S.Si">ROMADI, S.Si, S.Si</option>
                   <option value="AGUSTA KURNIAWAN,S.Si"> KURNIAWAN,S.Si </option>
                  <option value="ELVERA L">ELVERA L</option>
                   <option value="SUCIYATI RUBIKAYATUN">SUCIYATI RUBIKAYATUN</option>
                 <option value="NUGROHO PURWANTORO, SH">NUGROHO PURWANTORO, SH</option>
                  <option value="ELIYAH ULFAH ROHMAWATI, SP">ELIYAH ULFAH ROHMAWATI, SP</option>
                  <option value="GIYARTO, ST">GIYARTO, ST</option>
                   <option value="INDAH RETNO WULAN, SP">INDAH RETNO WULAN, SP</option>
                  <option value="FITRIANI, S.Si">FITRIANI, S.Si</option>
                   <option value="HARYATI, S.P, M.Sc">HARYATI, S.P, M.Si</option>
                 <option value="ENDAH KURNIASIH, S.P., M.Si">ENDAH KURNIASIH, S.P., M.Si</option>
                   <option value="ANUR FAJAR ASTUTI">ANUR FAJAR ASTUTI</option>
                 <option value="MUHAMMAD ROMLI">MUHAMMAD ROMLI</option>
                   <option value="YUDHA TINTANA MARGANISWATI">YUDHA TINTANA MARGANISWATI</option>
                  <option value="INTAN WILUJENG FAJARIANTY, S.Si, M.Sc">INTAN WILUJENG FAJARIANTY, S.Si, M.Sc</option>
                    <option value="FERDINANDUS EDWIN PENALUN, ST">FERDINANDUS EDWIN PENALUN, ST</option>
                  <option value="ARI RISNANTO, S.Kom">ARI RISNANTO, S.Kom</option>
                 <option value="EMMY PURNASHOLIHA, SST">EMMY PURNASHOLIHA, SST</option>
                   <option value="ANANG ARIANE, S,Si, M.Sc">ANANG ARIANE, S,Si, M.Sc</option>
                 <option value="ITTAKA ALDINI T., S.Tr">ITTAKA ALDINI T., S.Tr</option>
                   <option value="ISTI WAHYUNINGSIH, SE">ISTI WAHYUNINGSIH, SE</option>
                  <option value="DESY RUMAYANTI SETYO">DESY RUMAYANTI SETYO</option>
                    <option value="LISA AGUSTINA, A.P">LISA AGUSTINA, A.P</option>

              
            </select>
        </div>
        <br>
                  <div class="sub_category_div" id="sub_category_div"> 
                    <label for="exampleInputEmail1">nip Pengirim</label>
                    <br>
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="nip2" id="nip2" class="form-control" onchange="javascript: dynamicdropdownone(this.options[this.selectedIndex].value);"><option value="">Pilih NIP</option></select>')
            </script>
            
        </div>
        <br>
                  <div class="pangkat1_div" id="pangkat1_div"> <label for="exampleInputEmail1">pangkat golongan pengirim</label><br>
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="pangkat2" class="form-control" onchange="javascript: this.options[this.selectedIndex].value;" id="pangkat2"><option value="">Pilih  Pangkat </option></select>')
            </script>
          
        </div>
        <br>
                     <div class="jabatan1_div" id="jabatan1_div"> <label for="exampleInputEmail1">jabatan pengirim</label><br>
         <!--    <script type="text/javascript" language="JavaScript">
                document.write('<select name="jabatan1" class="form-control" onchange="javascript: this.options[this.selectedIndex].value;" id="jabatan1"><option value="">Pilih Jabatan </option></select>')
            </script> -->
            <select id="jabatan2" name="jabatan2" class="form-control">
              <option>Kepala </option>
              <option>PMG Madya</option>
              <option>PMG Muda</option>
              <option>Peneliti Muda</option>
              <option>PMG Penyelia</option>
              <option>PMG Pertama</option>
              <option>PMG Pelaksana Lanjutan</option>
              <option>Pengadministrasian Keu</option>
              <option>Pengadministrasian Umum</option>
              <option>PMG Pelaksana </option>
            </select>
            <br>
            </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tugas</label>
                      <input type="text" class="form-control" name="tugas" placeholder="Tugas"/>
                  </div>
              
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                      <input type="text" class="form-control" name="tanggal"  id="tgl_terima" data-date-format="yyyy-mm-dd" placeholder="Tanggal"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Selama</label>
                      <input type="text" class="form-control" name="waktu" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi</label>
                      <input type="text" class="form-control" name="lokasi" />
                  </div>

                  
    <head>
                
                  <script language="javascript" type="text/javascript">
     
      function dynamicdropdown1(listindex1)
            {
              
                switch (listindex1)
                {
                    case "AGUS SUDARYATNO, S.Kom, MM" :
                        
                        document.getElementById("nip1").options[1]=new Option("196101201980031001","196101201980031001"); //kiri = value , kanan = yg ditampilkan
                        break;

                        case "SUTAMSI, SP" :
                        document.getElementById("nip1").options[1]=new Option("196702171991021001","196702171991021001");
                        break;
                    
                     case "ANDRIYAS ARYO PRABOWO, M.Si" :
                        document.getElementById("nip1").options[1]=new Option("197906102001121001","197906102001121001");
                        break;

                    case "SIGIT HADI PRAKOSA, S.P.,M.Si" :
                     document.getElementById("nip1").options[1]=new Option("197705252000121001","197705252000121001");
                        break;

                        case "DJOKO BUDIYONO, SP,S.Si M.Si" :
                     document.getElementById("nip1").options[1]=new Option("197106211995031001","197106211995031001");
                        break;

                           case "ETIK SETYANINGRUM, S,Si.,M.Si" :
                     document.getElementById("nip1").options[1]=new Option("197610091999032001","197610091999032001");
                        break;

                         case "SUBANDI, SP" :
                     document.getElementById("nip1").options[1]=new Option("197603242000121001","197603242000121001");
                        break; 

                           case "ROMADI, S.Si" :
                     document.getElementById("nip1").options[1]=new Option("197509011999031001","197509011999031001");
                        break; 

                        case "AGUSTA KURNIAWAN,S.Si" :
                     document.getElementById("nip1").options[1]=new Option("197908202008011018","197908202008011018");
                        break; 

                         case "ELVERA L" :
                     document.getElementById("nip1").options[1]=new Option("196112131981032004","196112131981032004");
                        break; 

                        case "SUCIYATI RUBIKAYATUN" :
                     document.getElementById("nip1").options[1]=new Option("197409181997032001","197409181997032001");
                        break; 

                        case "NUGROHO PURWANTORO, SH" :
                     document.getElementById("nip1").options[1]=new Option("197411201996031001","197411201996031001");
                        break; 

                        case "ELIYAH ULFAH ROHMAWATI, SP" :
                     document.getElementById("nip1").options[1]=new Option("198402142008012010","198402142008012010");
                        break; 

                        case "GIYARTO, ST" :
                     document.getElementById("nip1").options[1]=new Option("197606101998031001","197606101998031001");
                        break;

                        case "INDAH RETNO WULAN, SP" :
                     document.getElementById("nip1").options[1]=new Option("198003152008012028","198003152008012028");
                        break;

                         case "FITRIANI, S.Si" :
                     document.getElementById("nip1").options[1]=new Option("198307072004122002","198307072004122002");
                        break;

                        case "HARYATI, S.P, M.Sc" :
                     document.getElementById("nip1").options[1]=new Option("198104102004122001","198104102004122001");
                        break;

                        case "ENDAH KURNIASIH, S.P., M.Si" :
                     document.getElementById("nip1").options[1]=new Option("197902222008012019","197902222008012019");
                        break;

                        case "ANUR FAJAR ASTUTI" :
                     document.getElementById("nip1").options[1]=new Option("197808162000122001","197808162000122001");
                        break;

                        case "MUHAMMAD ROMLI" :
                     document.getElementById("nip1").options[1]=new Option("197103151993011001","197103151993011001");
                        break;

                         case "YUDHA TINTANA MARGANISWATI" :
                     document.getElementById("nip1").options[1]=new Option("198310292004122001","198310292004122001");
                        break;

                        case "INTAN WILUJENG FAJARIANTY, S.Si, M.Sc" :
                     document.getElementById("nip1").options[1]=new Option("198603312008012005","198603312008012005");
                        break;

                        case "FERDINANDUS EDWIN PENALUN, ST" :
                     document.getElementById("nip1").options[1]=new Option("198708152009111001","198708152009111001");
                        break;

                        case "ARI RISNANTO, S.Kom" :
                     document.getElementById("nip1").options[1]=new Option("198411282008011005","198411282008011005");
                        break;

                        case "EMMY PURNASHOLIHA, SST" :
                     document.getElementById("nip1").options[1]=new Option("198707302009112001","198707302009112001");
                        break;

                        case "ANANG ARIANE, S.Si, M.Sc" :
                     document.getElementById("nip1").options[1]=new Option("198706112008121001","198706112008121001");
                        break;

                        case "ITTAKA ALDINI T., S.Tr" :
                     document.getElementById("nip1").options[1]=new Option("199010212012102001","199010212012102001");
                        break;

                        case "ISTI WAHYUNINGSIH, SE" :
                     document.getElementById("nip1").options[1]=new Option("198406132009112001","198406132009112001");
                        break;

                        case "DESY RUMAYANTI SETYO" :
                     document.getElementById("nip1").options[1]=new Option("198312142008122001","198312142008122001");
                        break;

                        case "LISA AGUSTINA, A.P" :
                     document.getElementById("nip1").options[1]=new Option("199608212016012001","199608212016012001");
                        break;

                    default:
                        document.getElementById("nip1").options[0]=new Option("Pilih NIP","");
                        break;
                }
                return true;
            }
            
            function dynamicdropdownone1(listindex1)
            {

                switch (listindex1)
                {
                    case "196101201980031001" :
                        document.getElementById("pangkat1").options[1]=new Option("Pembina/IV.a","Pembina/IV.a");
                        break;
                    case "196702171991021001" :
                        document.getElementById("pangkat1").options[1]=new Option("Pembina/IV.a","Pembina/IV.a");
                        break;
                    case "197906102001121001" :
                        document.getElementById("pangkat1").options[1]=new Option("Pembina/IV.a","Pembina/IV.ab");
                        break;
                    case "197705252000121001" : //SIGIT HADI PRAKOSA, S.P.,M.Si
                        document.getElementById("pangkat1").options[1]=new Option("Pembina/IV.a(1)","Pembina/IV.a");
                        break;
                    case "197106211995031001" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197610091999032001" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197603242000121001" : //SUBANDI, S
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197509011999031001" : 
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197908202008011018" : 
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "196112131981032004" : //elvera
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                     case "197409181997032001" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d(2)");
                         break;
                     case "197411201996031001" : //nugroho
                        document.getElementById("pangkat1").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                     case "198402142008012010" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197606101998031001" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198003152008012028" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198307072004122002" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198104102004122001" : //haryati
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197902222008012019" :
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197808162000122001" : //annur
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197103151993011001" : 
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198310292004122001" : 
                        document.getElementById("pangkat1").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198603312008012005" :  //intan
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198708152009111001" :  
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198411282008011005" :  
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198707302009112001" : //EMMY PURNASHOLIHA, SST 
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198706112008121001" :  
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I, III/b");
                        break;
                    case "199010212012102001" :  
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I(2), III/b");
                        break;
                     case "198406132009112001" :  //ISTI
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I(3), III/b");
                        break;
                     case "198312142008122001" :  
                        document.getElementById("pangkat1").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I(3), III/b");
                        break;
                     case "199608212016012001" :  
                        document.getElementById("pangkat1").options[1]=new Option("Pengatur Muda, II / a","Pengatur Muda, II / a");
                        break;

                    default:
                        document.getElementById("pangkat1").options[0]=new Option("Pilih Pangkat","");
                        break;
                }
                return true;
            }
          /*   function dynamicdropdowntwo(listindex)
            {
             
                switch (listindex)
                {
                    case "Pembina/IV.a" :
                        document.getElementById("jabatan1").options[1]=new Option("Kepala","Kepala ");
                        break;
                   case "Pembina/IV.a(1)" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Madya","PMG Madya");
                        break;
                    case "Penata Tk.I   III / d" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Muda ","PMG Muda");
                        break;
                    case "Penata Tk.I   III / d(1)" :
                        document.getElementById("jabatan1").options[1]=new Option("Peneliti Muda ","Peneliti Muda");
                        break;
                    case "Penata Tk.I   III / d(2)" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Penyelia ","PMG Penyelia");
                        break;
                    case "Penata, III / c" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Muda ","PMG Muda");
                        break;
                    case "Penata, III / c(2)" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Penyelia ","PMG Penyelia");
                        break;
                    case "Penata Muda Tk.I, III/b" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Pertama","PMG Pertama");
                        break;
                    case "Penata Muda Tk.I, III/b(2)" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Pelaksana Lanjuta","PMG Pelaksana Lanjutan");
                        break;
                    case "Penata Muda Tk.I, III/b(3)" :
                        document.getElementById("jabatan1").options[1]=new Option("Pengadministrasian Keu","Pengadministrasian Keu");
                        break;
                    case "Pengatur Muda, II / a" :
                        document.getElementById("jabatan1").options[1]=new Option("PMG Pelaksana ","PMG Pelaksana ");
                        break;
                    
               
                    default:
                        document.getElementById("jabatan1").options[0]=new Option("Pilih jabatan","");
                        break;
                }
                return true;
            }*/
       </script>

                  <script language="javascript" type="text/javascript">
     
      function dynamicdropdown(listindex)
            {
              
                switch (listindex)
                {
                    case "AGUS SUDARYATNO, S.Kom, MM" :
                        
                        document.getElementById("nip2").options[1]=new Option("196101201980031001","196101201980031001"); //kiri = value , kanan = yg ditampilkan
                        break;

                        case "SUTAMSI, SP" :
                        document.getElementById("nip2").options[1]=new Option("196702171991021001","196702171991021001");
                        break;
                    
                     case "ANDRIYAS ARYO PRABOWO, M.Si" :
                        document.getElementById("nip2").options[1]=new Option("197906102001121001","197906102001121001");
                        break;

                    case "SIGIT HADI PRAKOSA, S.P.,M.Si" :
                     document.getElementById("nip2").options[1]=new Option("197705252000121001","197705252000121001");
                        break;

                        case "DJOKO BUDIYONO, SP,S.Si M.Si" :
                     document.getElementById("nip2").options[1]=new Option("197106211995031001","197106211995031001");
                        break;

                           case "ETIK SETYANINGRUM, S,Si.,M.Si" :
                     document.getElementById("nip2").options[1]=new Option("197610091999032001","197610091999032001");
                        break;

                         case "SUBANDI, SP" :
                     document.getElementById("nip2").options[1]=new Option("197603242000121001","197603242000121001");
                        break; 

                           case "ROMADI, S.Si" :
                     document.getElementById("nip2").options[1]=new Option("197509011999031001","197509011999031001");
                        break; 

                        case "AGUSTA KURNIAWAN,S.Si" :
                     document.getElementById("nip2").options[1]=new Option("197908202008011018","197908202008011018");
                        break; 

                         case "ELVERA L" :
                     document.getElementById("nip2").options[1]=new Option("196112131981032004","196112131981032004");
                        break; 

                        case "SUCIYATI RUBIKAYATUN" :
                     document.getElementById("nip2").options[1]=new Option("197409181997032001","197409181997032001");
                        break; 

                        case "NUGROHO PURWANTORO, SH" :
                     document.getElementById("nip2").options[1]=new Option("197411201996031001","197411201996031001");
                        break; 

                        case "ELIYAH ULFAH ROHMAWATI, SP" :
                     document.getElementById("nip2").options[1]=new Option("198402142008012010","198402142008012010");
                        break; 

                        case "GIYARTO, ST" :
                     document.getElementById("nip2").options[1]=new Option("197606101998031001","197606101998031001");
                        break;

                        case "INDAH RETNO WULAN, SP" :
                     document.getElementById("nip2").options[1]=new Option("198003152008012028","198003152008012028");
                        break;

                         case "FITRIANI, S.Si" :
                     document.getElementById("nip2").options[1]=new Option("198307072004122002","198307072004122002");
                        break;

                        case "HARYATI, S.P, M.Sc" :
                     document.getElementById("nip2").options[1]=new Option("198104102004122001","198104102004122001");
                        break;

                        case "ENDAH KURNIASIH, S.P., M.Si" :
                     document.getElementById("nip2").options[1]=new Option("197902222008012019","197902222008012019");
                        break;

                        case "ANUR FAJAR ASTUTI" :
                     document.getElementById("nip2").options[1]=new Option("197808162000122001","197808162000122001");
                        break;

                        case "MUHAMMAD ROMLI" :
                     document.getElementById("nip2").options[1]=new Option("197103151993011001","197103151993011001");
                        break;

                         case "YUDHA TINTANA MARGANISWATI" :
                     document.getElementById("nip2").options[1]=new Option("198310292004122001","198310292004122001");
                        break;

                        case "INTAN WILUJENG FAJARIANTY, S.Si, M.Sc" :
                     document.getElementById("nip2").options[1]=new Option("198603312008012005","198603312008012005");
                        break;

                        case "FERDINANDUS EDWIN PENALUN, ST" :
                     document.getElementById("nip2").options[1]=new Option("198708152009111001","198708152009111001");
                        break;

                        case "ARI RISNANTO, S.Kom" :
                     document.getElementById("nip2").options[1]=new Option("198411282008011005","198411282008011005");
                        break;

                        case "EMMY PURNASHOLIHA, SST" :
                     document.getElementById("nip2").options[1]=new Option("198707302009112001","198707302009112001");
                        break;

                        case "ANANG ARIANE, S.Si, M.Sc" :
                     document.getElementById("nip2").options[1]=new Option("198706112008121001","198706112008121001");
                        break;

                        case "ITTAKA ALDINI T., S.Tr" :
                     document.getElementById("nip2").options[1]=new Option("199010212012102001","199010212012102001");
                        break;

                        case "ISTI WAHYUNINGSIH, SE" :
                     document.getElementById("nip2").options[1]=new Option("198406132009112001","198406132009112001");
                        break;

                        case "DESY RUMAYANTI SETYO" :
                     document.getElementById("nip2").options[1]=new Option("198312142008122001","198312142008122001");
                        break;

                        case "LISA AGUSTINA, A.P" :
                     document.getElementById("nip2").options[1]=new Option("199608212016012001","199608212016012001");
                        break;

                    default:
                        document.getElementById("nip2").options[0]=new Option("Pilih NIP","");
                        break;
                }
                return true;
            }
            
            function dynamicdropdownone(listindex)
            {

                switch (listindex)
                {
                    case "196101201980031001" :
                        document.getElementById("pangkat2").options[1]=new Option("Pembina/IV.a","Pembina/IV.a");
                        break;
                    case "196702171991021001" :
                        document.getElementById("pangkat2").options[1]=new Option("Pembina/IV.a","Pembina/IV.a");
                        break;
                    case "197906102001121001" :
                        document.getElementById("pangkat2").options[1]=new Option("Pembina/IV.a","Pembina/IV.ab");
                        break;
                    case "197705252000121001" : //SIGIT HADI PRAKOSA, S.P.,M.Si
                        document.getElementById("pangkat2").options[1]=new Option("Pembina/IV.a(1)","Pembina/IV.a");
                        break;
                    case "197106211995031001" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197610091999032001" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197603242000121001" : //SUBANDI, S
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197509011999031001" : 
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "197908202008011018" : 
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                    case "196112131981032004" : //elvera
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                     case "197409181997032001" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d(2)");
                         break;
                     case "197411201996031001" : //nugroho
                        document.getElementById("pangkat2").options[1]=new Option("Penata Tk.I   III / d","Penata Tk.I   III / d");
                        break;
                     case "198402142008012010" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197606101998031001" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198003152008012028" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198307072004122002" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198104102004122001" : //haryati
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197902222008012019" :
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197808162000122001" : //annur
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "197103151993011001" : 
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198310292004122001" : 
                        document.getElementById("pangkat2").options[1]=new Option("Penata, III / c","Penata, III / c");
                        break;
                    case "198603312008012005" :  //intan
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198708152009111001" :  
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198411282008011005" :  
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198707302009112001" : //EMMY PURNASHOLIHA, SST 
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda Tk.I, III/b","Penata Muda Tk.I, III/b");
                        break;
                    case "198706112008121001" :  
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I, III/b");
                        break;
                    case "199010212012102001" :  
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I(2), III/b");
                        break;
                     case "198406132009112001" :  //ISTI
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I(3), III/b");
                        break;
                     case "198312142008122001" :  
                        document.getElementById("pangkat2").options[1]=new Option("Penata Muda, III / a","Penata Muda Tk.I(3), III/b");
                        break;
                     case "199608212016012001" :  
                        document.getElementById("pangkat2").options[1]=new Option("Pengatur Muda, II / a","Pengatur Muda, II / a");
                        break;

                    default:
                        document.getElementById("pangkat2").options[0]=new Option("Pilih Pangkat","");
                        break;
                }
                return true;
            }
          /*   function dynamicdropdowntwo(listindex)
            {
             
                switch (listindex)
                {
                    case "Pembina/IV.a" :
                        document.getElementById("jabatan2").options[1]=new Option("Kepala","Kepala ");
                        break;
                   case "Pembina/IV.a(1)" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Madya","PMG Madya");
                        break;
                    case "Penata Tk.I   III / d" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Muda ","PMG Muda");
                        break;
                    case "Penata Tk.I   III / d(1)" :
                        document.getElementById("jabatan2").options[1]=new Option("Peneliti Muda ","Peneliti Muda");
                        break;
                    case "Penata Tk.I   III / d(2)" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Penyelia ","PMG Penyelia");
                        break;
                    case "Penata, III / c" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Muda ","PMG Muda");
                        break;
                    case "Penata, III / c(2)" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Penyelia ","PMG Penyelia");
                        break;
                    case "Penata Muda Tk.I, III/b" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Pertama","PMG Pertama");
                        break;
                    case "Penata Muda Tk.I, III/b(2)" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Pelaksana Lanjuta","PMG Pelaksana Lanjutan");
                        break;
                    case "Penata Muda Tk.I, III/b(3)" :
                        document.getElementById("jabatan2").options[1]=new Option("Pengadministrasian Keu","Pengadministrasian Keu");
                        break;
                    case "Pengatur Muda, II / a" :
                        document.getElementById("jabatan2").options[1]=new Option("PMG Pelaksana ","PMG Pelaksana ");
                        break;
                    
               
                    default:
                        document.getElementById("jabatan2").options[0]=new Option("Pilih jabatan","");
                        break;
                }
                return true;
            }*/
       </script>
       <div class="form-group">
                    <label for="exampleInputEmail1">keterangan</label>
                      <input type="text" class="form-control" name="keterangan" />
                  </div>
                  <!--    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2mdxRiklWzVlrI9yj5SK9cPQwxj6GbG%2bCoaliQ2DDJMJd%2bclSLQeFoxIBToIDTyHObfRn0cqH8es%2bpNoPEVKLO8Mb6u85eSvEpUP2RHBH5lwnzDTtuqG2W3xRjWMZNShWpgctfJ78YFgMXGaaWQhr4Qszwp1EU6bPBUuc4qiMXRxpe1TnAdSfuPtBvvIsEEkf3MqKtrXFgCte%2fJxN%2fimly7H4h9tIywZRg5s9AkbELK8R%2bwVMOcx7LJSskEAtdhGgYdxZSceuxrXE2PFfz6%2bkYSMJT64zVUZDSQVsG9dbV7biu1sGG7ewBeCT8NUvGhyzVZgSIuTlWL3tPn0HqV%2fH2nvd3JHLdXcvxKxfukjkgooJHDpDmKLAA8qzZItS5iUZqx47%2fmEyQ8%2bumHr%2fN3yDpC%2bSmPOvpk1VtXxcw1CqGJs8N0pqn%2fVn6W3KIviBVo1BRAkS7Bcx%2bm5uQ1rkFS2LutURzFSeK3Owu5wSxSNlGN7rKsUMYYIs3VivKLEUpkEAowuvnCZ4o5rRXWPW0LZQiONdwNkeJv2cYXUeWJ2D8Rt7DAl92f2v75dV2ncWV6pSvMfBj5vn29wHnMpBd45LLnmlVJ0GewW62zw2wFmcQMg3%2fremHhTE52QoY2jXBSXHHXbipkMTncE%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script> -->
          </body>

                  <a href="<?php echo base_url(); ?>admin/buat_surat" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>