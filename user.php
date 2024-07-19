<?php
include "proses/connect.php";
$query = mysqli_query($conn,"SELECT * FROM tb_user");
$result = [];
while($record = mysqli_fetch_assoc($query)){
  $result[] = $record;
}
?>
<div class="col-lg-9 rounded mt-2">
    <div class="card">
        <div class="card-header">
            halaman user
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaladduser">add user</button>
                </div>
            </div>
            <!-- Modal add user-->
            <div class="modal fade" id="modaladduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">tambah user</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal add user-->

            <!-- Modal view -->
            <div class="modal fade" id="modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">data user</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal view -->

            <?php
            if(empty($result)){
                echo "data user tidak ada";
            } else {
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Rumah</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">level</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($result as $row) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['No.rumah']; ?></td>
                            <td><?php echo $row['Nomor telepon']; ?></td>
                            <td><?php echo $row['level']; ?></td>
                            <td class="d-flex">
                                <button class="btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalview"><i class="bi bi-eye-fill"></i></button>
                                <button class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
