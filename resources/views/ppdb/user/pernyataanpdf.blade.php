
<html>
<head>
	<title>Laporan Tahun Pelajaran</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 12px;
            font-family: Georgia, 'Times New Roman', Times, serif;
		}
        td{
            height:10px;
        }
        body {
            font-size: 12px;
            font-family:Georgia, 'Times New Roman', Times, serif;
            }
        h1 h2 h3 h4 h5{
            line-height: 1.2;
        }
        .spa{
          letter-spacing:3px;
        }
	</style>
    <table width="100%" border="0">
        <tr>
        <td width="13%" align="right"><img src="../download.jpeg" width="110" height="110"></td>
        <td width="80%" align="center"><p><b><font size="28px">SMK DHARMA WANITA KROMENGAN</font><br>
                                      <font size="20px">STATUS : TERAKREDITASI "A" </font></b><br>
                                      KOMPETENSI KEAHLIAN<BR>
                                        1. TEKNIK OTOMOTIF &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. TEKNIK KOMPUTER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  3. PEMASARAN
                                        <BR>
                                        NSS. 322051818001&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN. 20517715
                                        <br>Jl.NAILUN SELATAN NO 22 P 085-100-454-667 KROMENGAN - MALANG<BR>
                                        Email: smk_kromengan0735@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;http://smkdwkromengan.sch,id
                                    </p>

                                    </td>
        <td widht="7%"></td>
        </tr>
        <tr>
            <td colspan="3"><hr style="border:2px;">
            </td>
        </tr>
        </table>
		<center><h1>Surat Pernyataan</h1></center>

  Saya yang bertanda tangan dibawah ini :<br>
  <table width="100%" border="0">


              {{-- {{dd($tapels)}} --}}
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td width="20%">Nama Lengkap</td>
                  <td width="1%">:</td>
                  <td width="79%" class="spa">{{ ($pernyataan->nama) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->tl) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Tanggal lahir</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->tgl_l) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->jk) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Nama Orang Tua</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->ayah_n) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Pekerjaan Orang Tua</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->job) }}</td>

                </tr>
              @endforeach
              {{-- @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td style="vertical-align:top;">Alamat Orang Tua</td>
                  <td style="vertical-align:top;">:</td>
                  <td class="spa">{{ ($pernyataan->alamat)." RT : ".($pernyataan->rt)." RW : ".
                                    ($pernyataan->rw)}}<br>
                                    {{ " Kelurahan/Desa : ".($pernyataan->keldes)
                                    ." Kecamatan : ".($pernyataan->kec)." Kodepos : ".($pernyataan->kodpos) }}

                  </td>

                </tr>
              @endforeach --}}
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>No. Telp</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->hp) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Nama Wali</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->wali_n) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Pekerjaan Wali</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->wali_job) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>No Telp</td>
                  <td>:</td>
                  <td class="spa">{{ ($pernyataan->hp) }}</td>

                </tr>
              @endforeach


                <tr>

                </tr>
              </tfoot>
            </table>
            <br>
            <div align="center"><b><font size="18px">Menyatakan</font></b></div><br>
            Bahwa jika saya dinyatakan diterima sebagai siswa SMK Dhama Wanita Kromengan, maka Saya
            <table>
                <tr>
                    <td>1</td>
                    <td>
                        Akan belajar dengan tekun dan penuh semangat.
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Akan menjaga nama baik diri sendiri, keluarga dan sekolah.
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        Sanggup mentaati dan mematuhi pelaksanaan Wiyatamandala termasuk pakaian seragam sekolah, OSIS dan kegiatan-kegiatan sekolah serta tata tertib sekolah.
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        Akan mengikuti Mata Pelajaran seluruhnya dan termasuk pelajaran Agama <b>@foreach ($pernyataans as $pernyataan) {{$pernyataan->agama}}  @endforeach</b> Sesuai keyakinan saya
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        Sanggup tidak melanggar peraturan sekolah dalam waktu minimal satu tahun
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        Sanggup tidak menikah selama menjadi siswa SMK Dharmia Wanita Kromengan
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        Apabila saya tidak mentaati ketentuan yang ditetapkan oleh sekolah, saya sanggup menerima sanksi yaitu
  a. Tidak diperkenankan mengikuti pelajaran selama janka waktu tertentu
  b Dikembalikan ke Orang Tua/Wali saya
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        Akan merigikuti kegiatan Ekstrakurikuler yang dilaksanakan oleh sekolah yaitu Pramuka/ PMR / UKS-KKR / KIR / Sispala / Rohis/ Seni Prestasi / Olahraga Prestasi / Paskibra/dllnya )
                    </td>
                </tr>
            </table>
<br><br>
Pernyataan ini saya buat dengan sebenar-benarnya dan dengan penuh tanggung jawab serta diketahui orang tua/wali saya
<br><br><br><br><br>
<table width="100%" border="0">
    <tr>
        <th width="3%"></th>
        <th width="30%" align="center">
            Mengetahui, <br>
            Orang Tua / Wali<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br><br><br><br><br><br>
            <hr style="width:70%; border-top:2px dotted; border-style: none none dotted;  ">

        </th>

        <th width="34%"></th>

        <th width="30%" align="center">.........,..............................20

            <br>Yang Membuat Pernyataan,<br>
            <br><br>
            <img src="data:image/png;base64, {!! $qrcode !!}">
            <hr style="width:80%; border-top:2px dotted; border-style: none none dotted;  ">
            <b>@foreach ($pernyataans as $pernyataan) {{$pernyataan->nama}}  @endforeach</b>
        </th>
        <th width="3%"></th>

    </tr>
</table>
</body>
</html>
