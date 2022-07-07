<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Users</h1>
        </div>
        <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Last_login</th>
                <th>Status</th>
                <th>Role</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($users as $us) : ?>
                        <tr>
                        <td><?php echo $us->id ?></td>
                        <td><?php echo $us->username ?></td>
                        <td><?php echo $us->password ?></td>
                        <td><?php echo $us->email ?></td>
                        <td><?php echo $us->created_at ?></td>
                        <td><?php echo $us->last_login ?></td>
                        <td><?php echo $us->status ?></td>
                        <td><?php echo $us->role ?></td>
                        <td>  
                        <a href="data_users/edit?id=<?= $us->id ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="data_users/delete?id=<?= $us->id ?>" onclick="if(!confirm('Anda Yakin Hapus Sewa ID <?=$us->id?>?')) {return false}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>