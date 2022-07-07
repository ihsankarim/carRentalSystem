<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Referensi Jenis Perawatan</h1>
        </div>
        <div class="insert">
            <a href="<?= base_url('admin/jenis_perawatan/create'); ?>" class="btn btn-success mb-2">Create</a>
        </div>
        <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>ID</th>
                <th>Nama Perawatan</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($jenis_perawatan as $jnp) : ?>
                        <tr>
                        <td><?php echo $jnp->id ?></td>
                        <td><?php echo $jnp->nama ?></td>
                        <td>
                        <a href="data_merk/edit?id=<?=$jnp->id?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i></a>
                        <a href="data_merk/delete?id=<?=$jnp->id?>" class="btn btn-danger btn-sm " onclick="if(!confirm('Apakah anda yakin ingin menghapus data ini?')) {return false}"><i class="fas fa-trash"></i></a>
                        </li>
                        </ul>
                        </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>