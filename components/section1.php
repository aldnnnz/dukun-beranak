<table id="tabel" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Pasien</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
                <th>Obat</th>
                <th>Dokter</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                include ('../config/db.php');
                $db = new database();
                $no = 1;
                foreach($db->getAllPerawatan() as $a){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $a['nama_pasien']; ?></td>
                <td><?= $a['keluhan']; ?></td>
                <td><?= $a['diagnosa']; ?></td>
                <td><?= $a['tindakan']; ?></td>
                <td><?= $a['obat']; ?></td>
                <td><?= $a['nama_dokter']; ?></td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                </td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
