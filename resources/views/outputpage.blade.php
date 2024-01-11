<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <title>OutputPage</title>
</head>

<body>
  <header>
    <h1>Data</h1>
    <nav>
      <ul>
        <li><a href="{{ route('index.page') }}">Home</a></li>
        <li><a href="{{ route('input.page') }}">Input Page</a></li>
        <li><a href="{{ route('output.page') }}">Output Page</a></li>
      </ul>
    </nav>
  </header>

  <table>
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIP</th>
        <th>Nomor Seri <br> Kartu Pegawai</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pendidikan</th>
        <th>Jabatan Akademi <br> Dosen/TMT</th>
        <th>Masa Kerja <br> Golongan Lama</th>
        <th>Masa Kerja <br> Golongan Baru</th>
        <th>Unit Kerja</th>
        <th>File Upload</th>
      </tr>
    </thead>
    <tbody>
      @foreach($datas as $data)
      <tr>
        <td>{{$data['nama']}}</td>
        <td>{{$data['nip']}}</td>
        <td>{{$data['nomor_seri_kartu_pegawai']}}</td>
        <td>{{$data['tempat_lahir']}}</td>
        <td>{{$data['tanggal_lahir']}}</td>
        <td>{{$data['jenis_kelamin']}}</td>
        <td>{{$data['pendidikan']}}</td>
        <td>{{$data['jabatan_akademi_dosen_tmt']}}</td>
        <td>{{$data['masa_kerja_golongan_lama']}}</td>
        <td>{{$data['masa_kerja_golongan_baru']}}</td>
        <td>{{$data['unit_kerja']}}</td>
        <td>
          @if ($data['file_upload'])
          <a href="{{Storage::url($data['file_upload'])}}" target="_blank">Download file</a>
          @else 
          No file uploaded
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>