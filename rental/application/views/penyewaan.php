
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Penyewaan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Detail Penyewaan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Penyewaan
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3 mb-4">
                                    <!-- TAMBAH TRANSAKSI -->
                                    <form action="<?php echo base_url('index.php/admin/dashboard/urutkan'); ?>" method="post" class="d-flex align-items-center gap-2">
                                        
                                        <button type="submit" class="btn btn-primary text-white fw-bold rounded-pill">Tambah Transaksi</button>
                                    </form>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama customer</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>No Kendaraan</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jokowi</td>
                                            <td>Solo</td>
                                            <td>08080808</td>
                                            <td>AD5052</td>
                                            <td>1/1/2024</td>
                                            <td>2/1/2025</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
               