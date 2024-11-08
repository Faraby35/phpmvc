<div class="container mt-5">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"   data-bs-target="#formModal">
          Tambah data 
      </button>
  </div>
</div>

<div class="row mt-3">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
      <div class="input-group">
          <input type="text" class="form-control" placeholder="cari mahasiswa.." aria-label="Recipient's username" name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
    </div>
    </form>
  </div>
</div>

<div class="row">
    <div class="col-lg-6">

        <h3 class="mt-4">Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs ) :  ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
              <?= $mhs['nama']; ?>
                <span>
                  <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">detail</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin ?')">hapus</a>
                </span>
              </li>

            <?php endforeach; ?>
        </ul>

    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" name="jurusan" id="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Sipil">Teknik Sipil</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
