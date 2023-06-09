<div class="row">
    <div class="col-6">
        <h3>Daftar Pemain</h3>

        <?php foreach($data['pemain'] as $pemain) : ?>
            <ul>
                <li>Nama : <?= $pemain['nama'] ?></li>
                <li>Posisi : <?= $pemain['posisi'] ?></li>
                <li>Asal : <?= $pemain['asal'] ?></li>
                <li>No Punggung : <?= $pemain['no_punggung'] ?></li>
                <li>gambar : <?= $pemain['gambar'] ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>