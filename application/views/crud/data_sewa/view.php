<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>View</h1>
          </div>

          <table class="table tabel-hover tabel-striped table-borderd">
            <thead>
                <th>ID</th>
                <th>Tanggal mulai</th>
                <th>Tanggal Akhir</th>
                <th>Tujuan</th>
                <th>No KTP</th>
                <th>USER ID</th>
                <th>MOBIL ID</th>
            </thead>
            <tbody>
                        <tr>
                        <td><?= $sewa->id ?></td>
                        <td><?= $sewa->tanggal_mulai ?></td>
                        <td><?= $sewa->tanggal_akhir ?></td>
                        <td><?= $sewa->tujuan ?></td>
                        <td><?= $sewa->noktp ?></td>
                        <td><?= $sewa->users_id ?></td>
                        <td><?= $sewa->mobil_id ?></td>
                        </tr>
            </tbody>
        </table>

          <div class="section-body">
          </div>
        </section>
      </div>