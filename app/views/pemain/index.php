<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash() ?>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
        <button type="button" class="btn btn-primary tambahDataPemain" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data pemain
        </button>
  </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <h3>Daftar Pemain</h3>

        <div class="row">
          <form method="post" action="<?= BASEURL ?>/pemain/cari">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari pemain" name="keyword" autofocus autocomplete="off">
              <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
            </div>
          </form>
        </div>

        <?php foreach($data['pemain'] as $pemain) : ?>
            <ul class="list-group">
                <li class="list-group-item">
                    Nama : <?= $pemain['nama'] ?> 
                    <a href="<?= BASEURL ?>/pemain/hapus/<?= $pemain['id'] ?>" class="badge text-bg-danger text-decoration-none float-end me-3" onclick="return confirm('yakin dihapus..?')">Hapus</a>
                    
                    <a href="<?= BASEURL ?>/pemain/ubah/<?= $pemain['id'] ?>" class="badge text-bg-success text-decoration-none float-end me-3 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pemain["id"] ?>">Ubah</a>
                    
                    <a href="<?= BASEURL ?>/pemain/detail/<?= $pemain['id'] ?>" class="badge text-bg-primary text-decoration-none float-end me-3">Detail</a>

                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data pemain</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL; ?>/pemain/tambah" enctype="multipart/form-data">

        <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama pemain</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            
            <div class="mb-3">
                <label for="posisi" class="form-label">Posisi</label>
                <select class="form-select" name="posisi" id="posisi">
                    <!-- <option selected>Posisi</option> -->
                    <option value="Penyerang">Penyerang</option>
                    <option value="Pemain Sayap Kanan">Pemain Sayap Kanan</option>
                    <option value="Pemain Sayap kiri">Pemain Sayap kiri</option>
                    <option value="Gelandang Serang">Gelandang Serang</option>
                    <option value="Gelandang Bertahan">Gelandang Bertahan</option>
                    <option value="Tengah">Tengah</option>
                    <option value="Bek Tengah">Bek Tengah</option>
                    <option value="Bek Sayap Kiri">Bek Sayap Kiri</option>
                    <option value="Bek Sayap Kanan">Bek Sayap Kanan</option>
                    <option value="Kiper">Kiper</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="asal" class="form-label">Negara asal</label>
                <input type="text" class="form-control" id="asal" name="asal">
            </div>
            
            <div class="mb-3">
                <label for="no_punggung" class="form-label">No Punggung</label>
                <input type="number" class="form-control" id="no_punggung" name="no_punggung">
            </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>