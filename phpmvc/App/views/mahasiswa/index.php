<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary buttonTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data
        </button>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group-mb-3">
          <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Cari Mahasiswa.." autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="tombolCari" >cari</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
            <li class="list-group-item  justify-content-between ">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin');">hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah"  data-toggle="modal" data-target="#formModal" data-id="<?=
            $mhs['id']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
            </li>
            <?php endforeach; ?>
        </ul>  
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" type="id">
    <div class="form-group">
        <label for="nama">nama</label>
        <input type="text"  class="form-control" id="nama" name="nama" placeholder="name">
    </div>
    <div class="form-group">
        <label for="nrp">nrp</label>
        <input type="text" name="nrp" class="form-control" id="nrp" placeholder="nrp">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email">
    </div>
    <div class="form-group">
    <label for="jurusan">jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Industri">Teknik Industri</option>
      <option value="Teknik Pangan">Teknik Pangan</option>
      <option value="Teknik Planologi">Teknik Planologi</option>
      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
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