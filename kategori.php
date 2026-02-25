<?php 
session_start();
include 'koneksi.php';
?>              
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                        
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tables</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                            <?php if($_SESSION['user']['level'] == 'admin'): ?>
                                                <th>Aksi</th>
                                            <?php endif; ?>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM kategori");
                                        while($data=mysqli_fetch_array($query)) :
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td>
                                               <a href="?page=kategori_ubah&&id=<?= $data['id_kategori']; ?>" class="btn btn-info">Ubah</a>
                                               <a href="?page=kategori_hapus&&id=<?= $data['id_kategori']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>