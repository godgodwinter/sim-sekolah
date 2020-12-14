
<html>
<head>
	<title>Laporan Tahun Pelajaran</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
		}
        body {
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            }
	</style>
    <table width="100%">
        <tr>
        <td width="25" align="center"></td>
        <td width="50" align="center"><h1>Gemscool Game Portal Pertama Indonesia</h1><br><h2>Jakarta</h2></td>
        <td width="25" align="center"></td>
        </tr>
        </table>
		<h1>Surat Pernyataan</h1>

  Saya yang bertanda tangan dibawah ini :<br>
  <table>


              {{-- {{dd($tapels)}} --}}
              @foreach ($pernyataans as $pernyataan)
                <tr height="20px">
                  <td width="130px">Nama Lengkap</td>
                  <td width="5px">:</td>
                  <td width="100px">{{ ($pernyataan->nama) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->tl) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Tanggal lahir</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->tgl_l) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->jk) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Nama Orang Tua</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->ayah_n) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Pekerjaan Orang Tua</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->job) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Alamat Orang Tua</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->alamat) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>No. Telp</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->hp) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Nama Wali</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->wali_n) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>Pekerjaan Wali</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->wali_job) }}</td>

                </tr>
              @endforeach
              @foreach ($pernyataans as $pernyataan)
                <tr>
                  <td>No Telp</td>
                  <td>:</td>
                  <td>{{ ($pernyataan->hp) }}</td>

                </tr>
              @endforeach


                <tr>

                </tr>
              </tfoot>
            </table>
            <br>
            <div align="center"><b><font size="18px">Menyatakan</font></b></div>
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

Pernyataan ini saya buat dengan sebenar-benarnya dan dengan penuh tanggung jawab serta diketahui orang tua/wali saya
</body>
</html>
