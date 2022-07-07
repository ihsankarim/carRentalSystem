<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Merk Mobil</h1>
        </div>
        <div class="insert">
            <a href="<?= base_url('admin/data_merk/create'); ?>" class="btn btn-success mb-2">Create</a>
        </div>
        <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($merk as $mrk) : ?>
                        <tr>
                        <td><?php echo $mrk->id ?></td>
                        <td><?php echo $mrk->nama ?></td>
                        <td><?php echo $mrk->produk ?></td>
                        <td> 
                        <a href="data_merk/edit?id=<?=$mrk->id?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i></a>
                        <a href="data_merk/delete?id=<?=$mrk->id?>" class="btn btn-danger btn-sm " onclick="if(!confirm('Apakah anda yakin ingin menghapus data ini?')) {return false}"><i class="fas fa-trash"></i></a>
                        </td> 
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>