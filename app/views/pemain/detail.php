<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/random/800×800/?anime=1" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nama :<?= $data['pemain']['nama'] ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Posisi :<?= $data['pemain']['posisi'] ?></h6>
    <p class="card-text">Asal Negara : <?= $data['pemain']['asal'] ?></p>
    <p class="card-text">No Punggung : <?= $data['pemain']['no_punggung'] ?></p>
    <a href="<?= BASEURL; ?>/pemain" class="btn btn-primary">Kembali</a>
  </div>
</div>