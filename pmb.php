<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>PMB UPJ</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <img src="logo2.png" class="rounded" alt="Cinque Terre">
          <a class="navbar-brand" ></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>        
          </button>
      </nav>
      <div class="jumbotron text-center">
          <h1>PENDAFTARAN ONLINE CALON MAHASISWA UNIVERSITAS PEMBANGUNAN JAYA</h1>
      </div>
      <div class="container">
      <h2> Pendaftaran Online</h2>
      <form method="post" action="konfirmasipmb.php">
          <div class="row">
              <div class="col-sm-12">
                  <p>Jalur Penerimaan Mahasiswa Baru</p>
                  <p><select name="jalur" class="form-control">
                    <option value="Jalur Reguler"> Jalur Reguler</option>
                    <option value="Jalur Bidikmisi"> Jalur Bidikmisi</option>
                    <option value="Jalur Beasiswa Peringkat Raport"> Jalur Beasiswa Peringkat Raport</option>
                    <option value="Jalur Beasiswa Ujian Saringan Masuk"> Jalur Beasiswa Ujian Saringan Masuk</option>
                    <option value="Jalur Beasiswa ASAK"> Jalur Beasiswa ASAK</option>
                    <option value="Jalur Lulusan Terbaik di Sekolah"> Jalur Lulusan Terbaik di Sekolah</option>
                    <option value="Jalur Beasiswa Prestasi Akademik dan Non Akademik"> Jalur Beasiswa Prestasi Akademik dan Non Akademik</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
              <p>Nama Calon Mahasiswa</p>
                    <input type="text" class="form-control" name="nama"><br>
              </div>
              <div class="col-sm-6">
              <p>Tempat Tanggal Lahir</p>
                  <input type="text" class="form-control" name="tanggal"><br>
              </div>
              <div class="col-sm-4">
              <p>Jenis Kelamin</p>
                  <p><select name="gender" class="form-control">
                    <option value="Pria"> Pria</option>
                    <option value="Wanita"> Wanita</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-4">
              <p>Agama</p>
                    <p><select name="agama" class="form-control">
                    <option value="Islam"> Islam</option>
                    <option value="Kristen"> Kristen</option>
                    <option value="Hindu"> Hindu</option>
                    <option value="Budha"> Budha</option>
                    <option value="Lainnya"> Lainnya</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-4">
              <p>Status</p>
                  <p><select name="status" class="form-control">
                    <option value="belummenikah"> Belum Menikah</option>
                    <option value="menikah"> Menikah</option>
                    <option value="janda"> Janda</option>
                    <option value="duda"> Duda</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-12">
                  <p>Alamat</p>
                  <input type="text" class="form-control" name="alamat"><br>
              </div>
              <div class="col-sm-4">
              <p>Kode Pos</p>
                  <p><input type="text" class="form-control" name="kodepos"></p>
              </div>
              <div class="col-sm-4">
              <p>No. Handphone</p>
                  <p><input type="text" class="form-control" name="nomor"></p>
              </div>
              <div class="col-sm-4">
              <p>Email</p>
                  <p><input type="text" class="form-control" name="email"></p>
              </div>
              <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
              <div class="col-sm-12">
                  <p>Asal Sekolah</p>
                  <input type="text" class="form-control" name="asal"><br>
              </div>
              <div class="col-sm-12">
                  <p>Tahun Lulus</p>
                  <input type="text" class="form-control" name="lulus"><br>
              </div>
              <h2>DATA ORANG TUA CALON MAHASISWA</h2>
              <div class="col-sm-6">
                  <p>Nama Ayah</p>
                  <input type="text" class="form-control" name="namaayah"><br>
              </div>
              <div class="col-sm-6">
                  <p>Nama Ibu</p>
                  <input type="text" class="form-control" name="namaibu"><br>
              </div>
              <div class="col-sm-12">
                  <p>Alamat</p>
                  <input type="text" class="form-control" name="alamat2"><br>
              </div>
              <div class="col-sm-6">
              <p>Kode Pos</p>
                  <p><input type="text" class="form-control" name="kodepos2"></p>
              </div>
              <div class="col-sm-6">
              <p>No. Handphone</p>
                  <p><input type="text" class="form-control" name="nomor2"></p>
              </div>
              <div class="col-sm-6">
              <p>Pendidkan Terakhir Ayah</p>
                  <p><select name="pendidikanayah" class="form-control">
                    <option value="Tidak Taman SD">A - Tidak Tamat SD</option>
                    <option value="SD">B - Tamat SD</option>
                    <option value="SMP">C - Tamat SMP</option>
                    <option value="SMA">D - Tamat SMA</option>
                    <option value="Diploma">E - Diploma (D1/D2)</option>
                    <option value="Sarjana D3">F - Sarjana (D3)</option>
                    <option value="Sarjana S1">G - Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana">H - PascaSarjana (S2)</option>
                    <option value="Doctor">I - Doctor (S3)</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
              <p>Pendidkan Terakhir Ibu</p>
                  <p><select name="pendidikanibu" class="form-control">
                    <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
                    <option value="SD">B - Tamat SD</option>
                    <option value="SMP">C - Tamat SMP</option>
                    <option value="SMA">D - Tamat SMA</option>
                    <option value="Diploma">E - Diploma (D1/D2)</option>
                    <option value="Sarjana D3">F - Sarjana (D3)</option>
                    <option value="Sarjana S1">G - Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana">H - PascaSarjana (S2)</option>
                    <option value="Doctor">I - Doctor (S3)</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
              <p>Status Ayah</p>
                  <p><select name="statusayah" class="form-control">
                    <option value="hidup">Masih Hidup</option>
                    <option value="meninggal">Sudah Meninggal</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
              <p>Status Ibu</p>
                  <p><select name="statusibu" class="form-control">
                    <option value="hidup">Masih Hidup</option>
                    <option value="meninggal">Sudah Meninggal</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
                  <p>Pekerjaan Ayah</p>
                  <input type="text" class="form-control" name="pekerjaanayah"><br>
              </div>
              <div class="col-sm-6">
                  <p>Pekerjaan Ibu</p>
                  <input type="text" class="form-control" name="pekerjaanibu"><br>
              </div>
              <h2>PEMINATAN PROGRAM STUDI</h2>
              <div class="col-sm-4">
                  <p></p>
              </div>
              <div class="col-sm-6">
              <p>Pilihan Program Studi 1</p>
                  <p><select name="programstudi1" class="form-control">
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                    </select>
                    </p>
              </div>
              <div class="col-sm-6">
              <p>Pilihan Program Studi 2</p>
                  <p><select name="programstudi2" class="form-control">
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                    </select>
                    </p>
              </div>
              <h2>Ujian Saringan Masuk</h2>
              <div class="col-sm-12">
              <p>Lokasi: Kampus UPJ - Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413 Banten, Indonesia.</p>
              <p>Pilihan Gelombang</p>
                  <p><select name="ujianmasuk" class="form-control">
                    <option value="Gelombang 1">Gelombang 1</option>
                    <option value="Gelombang 2">Gelombang 2</option>
                    <option value="Gelombang 3">Gelombang 3</option>
                    <option value="Gelombang 4">Gelombang 4</option>
                    </select>
                    </p>
              </div>
              <input type="submit" value="Submit" name="tombol">
        </form>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>