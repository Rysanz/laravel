<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body><table class="table">
  <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nim</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="ps-1">Action</th>
      </tr>
  </thead>
  @php
    $num =1;
  @endphp
  @foreach ($mahasiswas as $mahasiswa)
  <tbody>
      <tr>
          <th>{{$num++}}</th>
          <td>{{$mahasiswa->nim}}</td>
          <td>{{$mahasiswa->nama}}</td>
          <td>{{$mahasiswa->alamat}}</td>
      <td style="display: flex;">
          <a href="{{url('update',$mahasiswa->id)}}"><button type="button" style="margin-right: 20px" class="btn btn-secondary">Ubah</button></a>
          <form action="{{ url('delete', $mahasiswa->id) }}" method="POST">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin Menghapus Ini?')">Hapus</button>
          </form>
      </td>
      </tr>
  </tbody>
  @endforeach
</table>
<form action="{{url('change',$ubah->id)}}" method="post">
              {{ csrf_field() }}
            <div class="mb-3">
              <label for="nim" class="form-label"><h5>Nim</h5></label>
              <input type="text" class="form-control" id="nim" placeholder="Nim" value="{{$ubah->nim}}" name="nim">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label"><h5>Nama</h5></label>
              <input type="text" class="form-control" id="nama" placeholder="Nama" value="{{$ubah->nama}}" name="nama">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label"><h5>Alamat</h5></label>
              <input type="text" class="form-control" id="Alamat" placeholder="Alamat" value="{{$ubah->alamat}}" name="alamat">
            </div>
          <button type="submit" class="btn btn-success">Simpan</button></a>
          <a href="{{url("/")}}"><button type="button" class="btn btn-danger">Batal</button></a>
          </form>
</body>
</html>