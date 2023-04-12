@extends('edit')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">UTS LARAVEL 10 CRUD BOOTSTRAP</h1>
    <h2 class="text-center">DATA MAHASISWA 2023</h2>
    <!-- Button trigger modal -->
    <h3>Tambahkan Data Mahasiswa
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
    </h3>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Mahasiswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url("masuk")}}">
                    {{csrf_field()}}
                    <div class="mb-3">
                      <label for="NIM" class="form-label">NIM</label>
                      <input type="text" class="form-control" id="nim" placeholder="example = 42030063" name="nim" >
                    </div>
                    <div class="mb-3">
                      <label for="NAMA" class="form-label">NAMA</label>
                      <input type="text" class="form-control" id="nama" placeholder="example = Ary" name="nama">
                    </div>
                    <div class="mb-3">
                      <label for="TANGGAL LAHIR" class="form-label">TANGGAL LAHIR</label>
                      <input type="text" class="form-control" id="tgllahir" placeholder="example = 2002-07-13" name="tgllahir">
                    </div>
                    <div class="mb-3">
                        <label for="ALAMAT" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" id="alamat" placeholder="example = JL.Nusa Indah no.10" name="alamat">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

  {{-- Tabel --}}
    <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        @php
            $number=1;
        @endphp
        @foreach ($mahasiswas as $mahasiswa)
        <tbody class="table-group-divider">
          <tr>
            <th>{{$number++}}</th>
            <td>{{$mahasiswa->nim}}</td>
            <td>{{$mahasiswa->nama}}</td>
            <td>{{$mahasiswa->tgllahir}}</td>
            <td>{{$mahasiswa->alamat}}</td>
            <td>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#edit{{$mahasiswa->id}}" data-bs-toggle="modal"><button class="btn btn-primary me-md-2" type="button">Edit</button></a>
                    <form action="{{url('delete',$mahasiswa->id)}}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin di hapus ?')">Delete</button>
                    </form>
                </div>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
</body>
</html>