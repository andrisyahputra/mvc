<div class="row">
    <div class="col-6">
        <h3>Daftar Pemain</h3>

        <?php foreach($data['pemain'] as $pemain) : ?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    Nama : <?= $pemain['nama'] ?> 
                    <a href="<?= BASEURL ?>/pemain/detail/<?= $pemain['id'] ?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>