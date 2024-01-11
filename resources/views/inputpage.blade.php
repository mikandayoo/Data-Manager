<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <title>InputPage</title>
</head>

<body>
  <header>
    <h1>masukan data anda</h1>
    <nav>
      <ul>
        <li><a href="{{ route('index.page') }}">Home</a></li>
        <li><a href="{{ route('input.page') }}">Input Page</a></li>
        <li><a href="{{ route('output.page') }}">Output Page</a></li>
      </ul>
    </nav>
  </header>

  <div class="content" id="inputPageContainer" style="display: block">
    <form action="{{ route('data.create') }}" method="post" enctype="multipart/form-data">
      <!-- <form action="/data" method="post"> -->
      @csrf
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" />

      <label for="nip">NIP:</label>
      <input type="text" id="nip" name="nip" />

      <label for="nomor_seri_kartu_pegawai">Nomor Seri Kartu Pegawai:</label>
      <input type="text" id="nomor_seri_kartu_pegawai" name="nomor_seri_kartu_pegawai" />

      <label for="tempat_tanggal_lahir">Tempat dan Tanggal Lahir:</label>
      <input type="text" id="tempat_lahir" name="tempat_lahir" />
      <input type="date" id="tanggal_lahir" name="tanggal_lahir" />

      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

      <label for="pendidikan">Pendidikan:</label>
      <input type="text" id="pendidikan" name="pendidikan" />

      <label for="jabatan">Jabatan Akademi Dosen/TMT:</label>
      <input type="text" id="jabatan_akademi_dosen_tmt" name="jabatan_akademi_dosen_tmt" />

      <label for="masa_kerja_lama">Masa Kerja Golongan Lama:</label>
      <input type="date" id="masa_kerja_golongan_lama" name="masa_kerja_golongan_lama" />

      <label for="masa_kerja_baru">Masa Kerja Golongan Baru:</label>
      <input type="date" id="masa_kerja_golongan_baru" name="masa_kerja_golongan_baru" />

      <label for="unit_kerja">Unit Kerja:</label>
      <input type="text" id="unit_kerja" name="unit_kerja" />

      <label for="file_upload">Upload berkas anda disini (max size 2mb):</label>
      <input type="file" id="file_upload" name="file_upload">

      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>