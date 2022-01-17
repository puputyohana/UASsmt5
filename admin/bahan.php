 <?php
 include "config.php";
 ?>

 <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Bahan Baku</h1>
                    <p class="mb-4"> <a href="index.php?page=tambahbahan">+ Tambah Data</a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Bahan Baku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Bahan</th>
                                            <th>Nama Bahan</th>
                                            <th>Jumlah Bahan</th>
                                            <th>Tanggal</th>
                                            <th colspan = 2>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>No.</th>
                                            <th>Id Bahan</th>
                                            <th>Nama Bahan</th>
                                            <th>Jumlah Bahan</th>
                                            <th>Tanggal</th>
                                            <th colspan = 2>Aksi</th>
                                    </tfoot>
                                    <?php 
                                        include 'config.php';
                                        $no = 1;
                                        $data = mysqli_query($conn,"select * from tb_bahanbaku");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['id_bhn']; ?></td>
                                            <td><?php echo $d['nm_bhn']; ?></td>
                                            <td><?php echo $d['jml_bhn']; ?></td>
                                            <td><?php echo $d['tgl']; ?></td>
                                            <td><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></td>
                                            <td><a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></td>
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
