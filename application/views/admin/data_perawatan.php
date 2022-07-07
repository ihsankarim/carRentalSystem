<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Perawatan Mobil</h1>
        </div>
        <div class="insert">
            <a href="<?= base_url('admin/data_perawatan/create'); ?>" class="btn btn-success mb-2">Create</a>
        </div>
        <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Biaya</th>
                <th>KM Mobil</th>
                <th>Deskripsi</th>
                <th>Mobil ID</th>
                <th>Jenis Perawatan ID</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($perawatan as $prw) : ?>
                    <tr>
                        <td><?php echo $prw->id ?></td>
                        <td><?php echo $prw->tanggal ?></td>
                        <td><?php echo $prw->biaya ?></td>
                        <td><?php echo $prw->km_mobil ?></td>
                        <td><?php echo $prw->deskripsi ?></td>
                        <td><?php echo $prw->mobil_id ?></td>
                        <td><?php echo $prw->jenis_perawatan_id?></td>
                        <td>  
                        <a href="data_perawatan/edit?id=<?=$prw->id?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i></a>
                        <a href="data_perawatan/delete?id=<?=$prw->id?>" class="btn btn-danger btn-sm " onclick="if(!confirm('Apakah anda yakin ingin menghapus data ini?')) {return false}"><i class="fas fa-trash"></i></a>
                        </td>                
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>


