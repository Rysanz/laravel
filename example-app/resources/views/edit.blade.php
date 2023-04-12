@foreach ($mahasiswas as $mahasiswa)
<!-- Modal -->
<div class="modal fade" id="edit{{$mahasiswa->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url("change",$mahasiswa->id)}}">
          {{csrf_field()}}
          <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" placeholder="example = 42030063" name="nim" value="{{$mahasiswa->nim}}">
          </div>
          <div class="mb-3">
            <label for="NAMA" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="nama" placeholder="example = Ary" name="nama" value="{{$mahasiswa->nama}}">
          </div>
          <div class="mb-3">
            <label for="TANGGAL LAHIR" class="form-label">TANGGAL LAHIR</label>
            <input type="text" class="form-control" id="tgllahir" placeholder="example = 2002-07-13" name="tgllahir" value="{{$mahasiswa->tgllahir}}">
          </div>
          <div class="mb-3">
              <label for="ALAMAT" class="form-label">ALAMAT</label>
              <input type="text" class="form-control" id="alamat" placeholder="example = JL.Nusa Indah no.10" name="alamat" value="{{$mahasiswa->alamat}}">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

