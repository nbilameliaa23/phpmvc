<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

   <div class="row">
    <div class="col-6">
     <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
         Tambah Data Mahasiswa
        </button>
        <br><br>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ): ?>
        <li class="list-group-item ">
        <?= $mhs['nama']; ?>
        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-warning float-right tampilModalUbah ml-1" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
              </li>
       </li>
      <?php endforeach; ?>
    </ul>
           
   </div>
 </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ubah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
       <form action="<?= BASEURL; ?>/mahasiswa/tambah  " method="post">
     <div class="form-group">
       <label for="nama">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama">
     </div>

     <div class="form-group">
       <label for="absen">Absen</label>
       <input type="number" class="form-control" id="absen" name="absen">
     </div>

     <div class="form-group">
       <label for="kelas">Kelas</label>
       <input type="text" class="form-control" id="kelas" name="kelas">
     </div>
      
     <div class="form-group">
        <label for=jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
         <option value="rekayasa perangkat lunak">REKAYASA PERANGKAT LUNAK</option>
         <option value="akutansi">AKUTANSI</option>
         <option value="rekayasa perangkat lunak">REKAYASA PERANGKAT LUNAK</option>
    </select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>