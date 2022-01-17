<?php
 include "config.php";
 ?>

 <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran</h1>
                    <p class="mb-4"> <a href="index.php?page=tambahbyr">+ Tambah Data</a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Pembayaran</th>
                                            <th>Id  Trans</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Pembayaran</th>
                                            <th>Id  Trans</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <?php 
                                        include 'config.php';
                                        $no = 1;
                                        $data = mysqli_query($conn,"select * from tb_bayar");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['id_byr']; ?></td>
                                            <td><?php echo $d['id_trans']; ?></td>
                                            <td><?php echo $d['tgl_byr']; ?></td>
                                            <td><?php echo $d['status']; ?></td>
                                           
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
