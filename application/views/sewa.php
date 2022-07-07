<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>

        <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>Foto</th>
                <th>Id Mobil</th>
                <th>Warna</th>
                <th>CC</th>
                <th>Tahun</th>
                <th>Deskripsi</th>
                <th>Biaya Sewa</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($mobil as $mbl) : ?>
                        <tr>
                        <td><img src="<?= base_url('foto').'/'.$mbl->foto ?>" width="100" height="100"></td>
                        <td><?php echo $mbl->merk_id ?> </td>
                        <td><?php echo $mbl->warna ?></td>
                        <td><?php echo $mbl->cc ?></td>
                        <td><?php echo $mbl->tahun ?></td>
                        <td><?php echo $mbl->deskripsi ?></td>
                        <td><?php echo $mbl->biaya_sewa ?></td>
                        
                        
                        <td>   
                        <a href="<?= base_url('admin/data_sewa/create') ?>" class="nav-link btn btn-warning">Pilih</a>         
                        </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>