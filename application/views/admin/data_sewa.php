<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Sewa</h1>
        </div>
        <div class="container">
        <table class="table tabel-hover tabel-striped table-borderd" style="overflow: auto;">
            <thead>
                <th>ID</th>
                <th>Tanggal mulai</th>
                <th>Tanggal Akhir</th>
                <th>Tujuan</th>
                <th>noktp</th>
                <th>users_id</th>
                <th>mobil_id</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($sewa as $sw) : ?>
                        <tr>
                        <td><?php echo $sw->id ?></td>
                        <td><?php echo $sw->tanggal_mulai ?></td>
                        <td><?php echo $sw->tanggal_akhir ?></td>
                        <td><?php echo $sw->tujuan ?></td>
                        <td><?php echo $sw->noktp ?></td>
                        <td><?php echo $sw->users_id ?></td>
                        <td><?php echo $sw->mobil_id ?></td>

                        <td>  
                        <a href="data_sewa/edit?id=<?= $sw->id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="data_sewa/view?id=<?= $sw->id ?>" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                        <a href="data_sewa/delete?id=<?= $sw->id ?>" onclick="if(!confirm('Anda Yakin Hapus Sewa ID <?=$sw->id?>?')) {return false}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
                    </div>