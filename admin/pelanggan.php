<?php
 include "config.php";
 ?>

 <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>
                    <p class="mb-4"> <a href="index.php?page=tambahplgn">+ Tambah Data</a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Pelanggan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No. telp</th>
                                            <th>Username</th>
                                            <th colspan = 2>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php 
                                        include 'config.php';
                                        $no = 1;
                                        $data = mysqli_query($conn,"select * from tb_pelanggan");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['id_plgn']; ?></td>
                                            <td><?php echo $d['nm_plgn']; ?></td>
                                            <td><?php echo $d['email']; ?></td>
                                            <td><?php echo $d['alamat']; ?></td>
                                            <td><?php echo $d['no_telp']; ?></td>
                                            <td><?php echo $d['username']; ?></td>
                                            <td><a href="editplgn.php?id_plgn=<?php echo $d['id_plgn']; ?>">EDIT</a></td>
                                            <td><a href="h_plgn.php?id_plgn=<?php echo $d['id_plgn']; ?>">HAPUS</a></td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

               
                <!-- /.container-fluid -->
