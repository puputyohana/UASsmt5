 <div class="col-lg-8 card o-hidden shadow-lg my-4">
            <div class="card-body p-0">
                    <div class="col">
                            <div class="text-center">
                                <h2>Tambah Data Produk </h2>
                            </div>
                              <form method="POST" action="t_produk.php" class="user" enctype="multipart/form-data">
                                
                                        <div class="form-group">
                                        ID Produk :
                                            <input type="text" name="id_produk"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                        Nama Produk :
                                             <input type="text" name="nm_produk"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                        Jumlah :
                                            <input type="text" name="jml_produk" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                        Keterangan :
                                           <textarea name="keterangan" class ="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                        Preorder :
                                            <input type="text" name="preorder" class="form-control" > Hari
                                        </div>

                                        <div class="form-group">
                                        Harga :
                                            <input type="text" name="harga" class="form-control" >
                                        </div>
                                        Gambar Produk :
                                        <input type="file" name="gambar" required ="" />

                                        <input type="submit" value="Tambah Data" class="btn btn-primary btn-user btn-block">
                                
                            </form>
                            <hr>
                           
                    </div>

                </div>
                </div>