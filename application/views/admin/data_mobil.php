<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>
        <div class="insert">
            <a href="<?= base_url('admin/data_mobil/create') ?>" class="btn btn-success mb-2">Create</a>
        </div>
        <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>ID</th>
                <th>Nopol</th>
                <th>Warna</th>
                <th>Biaya Sewa</th>
                <th>Deskripsi</th>
                <th>CC</th>
                <th>Tahun</th>
                <th>Merk Id</th>
                <th>Foto</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($mobil as $mbl) : ?>
                        <tr>
                        <td><?php echo $mbl->id ?></td>
                        <td><?php echo $mbl->nopol ?></td>
                        <td><?php echo $mbl->warna ?></td>
                        <td><?php echo $mbl->biaya_sewa ?></td>
                        <td><?php echo $mbl->deskripsi ?></td>
                        <td><?php echo $mbl->cc ?></td>
                        <td><?php echo $mbl->tahun ?></td>
                        <td><?php echo $mbl->merk_id ?></td>
                        <td><?php echo $mbl->foto ?></td>
                        <td>  
                        <a href="data_mobil/edit?id=<?= $mbl->id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="data_mobil/delete?id=<?= $mbl->id ?>" onclick="if(!confirm('Anda Yakin Hapus Sewa ID <?=$mbl->id?>?')) {return false}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>