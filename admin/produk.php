 <?php
 include "config.php";
 ?>

 <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
                    <p class="mb-4"> <a href="index.php?page=tambahproduk">+ Tambah Data</a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Produk</th>
                                            <th>Nama produk</th>
                                            <th>Jumlah Produk</th>
                                            <th>Keterangan</th>
                                            <th>Pre Order</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th colspan = 2 >Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <?php 
                                        include 'config.php';
                                        $no = 1;
                                        $data = mysqli_query($conn,"select * from tb_produk order by id_produk DESC");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['id_produk']; ?></td>
                                            <td><?php echo $d['nm_produk']; ?></td>
                                            <td><?php echo $d['jml_produk']; ?></td>
                                            <td><?php echo $d['keterangan']; ?></td>
                                            <td><?php echo $d['preorder']; ?> Hari</td>
                                            <td><?php echo $d['harga']; ?></td>
                                            <td><img src ="assets/<?php echo $d['gambar']; ?>" width = "100%"></td>
                                            <td><a href="editproduk.php?id_produk=<?php echo $d['id_produk']; ?>">EDIT</a></td>
                                            <td><a href="h_produk.php?id_produk=<?php echo $d['id_produk']; ?>">HAPUS</a></td>
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
