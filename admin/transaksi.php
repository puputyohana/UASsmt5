 <?php
 include "config.php";
 ?>

 <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Transaksi</h1>
                    <p class="mb-4"> <a href="index.php?page=tambahtrans">+ Tambah Data</a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Trans</th>
                                            <th>Id Produk</th>
                                            <th>Id Pelanggan</th>
                                            <th>Tanggal</th>
                                            <th>Jml</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Pengiriman</th>
                                            <th>Pembayaran</th>
                                            <th colspan = 2 >Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Trans</th>
                                            <th>Id Produk</th>
                                            <th>Id Pelanggan</th>
                                            <th>Tanggal</th>
                                            <th>Jml</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Pengiriman</th>
                                            <th>Pembayaran</th>
                                            <th colspan = 2 >Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <?php 
                                        include 'config.php';
                                        $no = 1;
                                        $data = mysqli_query($conn,"select * from tb_transaksi");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['id_trans']; ?></td>
                                            <td><?php echo $d['id_produk']; ?></td>
                                            <td><?php echo $d['id_plgn']; ?></td>
                                            <td><?php echo $d['tgl_trans']; ?></td>
                                            <td><?php echo $d['jml_trans']; ?></td>
                                            <td><?php echo $d['harga']; ?></td>
                                            <td><?php echo $d['total']; ?></td>
                                            <td><?php echo $d['metode_pengiriman']; ?></td>
                                            <td><?php echo $d['metode_pembayaran']; ?></td>
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
