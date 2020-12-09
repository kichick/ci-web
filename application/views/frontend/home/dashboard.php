<div class="container contact_container">
    <div class="row">
        <div class="col">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="active"><a href="<?= base_url('home/dashboard'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row card">
        <div class="col-12 mb-3 pt-3">
            <div class=" cart_title">
                <h3>Jual</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Detail Barang</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jual as $j) : ?>
                        <?php if ($j['author'] == $user['email']) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $j['nama']; ?></td>
                                <td>
                                    <b>Nama Barang : </b><?= $j['nama_barang']; ?><br>
                                    <b>Harga : </b>Rp.<?= number_format($j['harga_barang']); ?><br>
                                    <b>Kategori Gender : </b><?= $j['nama_kategori_gender']; ?><br>
                                    <b>Kategori Item : </b><?= $j['nama_kategori_item']; ?><br>
                                </td>
                                <td><?= $j['deskripsi']; ?></td>
                                <td><img src="<?= base_url() ?>assets/images/jual/<?= $j['image']; ?>" class='img-thumbnail' style='width:100px;height:100px;'></td>
                                <td class=" ">
                                    <?php if ($j['status'] == 'aktif') : ?>
                                        <span class="btn btn-success"><?= $j['status']; ?></span>
                                    <?php else : ?>
                                        <span class="btn btn-danger"><?= $j['status']; ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="row card">
        <div class="col-12 mb-3 pt-3">
            <div class=" cart_title">
                <h3>Checkout</h3>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Detail Pembeli</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($checkout as $k) : ?>
                        <?php if ($k['email'] == $user['email']) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $k['name_buy']; ?></td>
                                <td>
                                    <b>Alamat : </b><?= $k['address']; ?><br>
                                    <b>Desa: </b><?= $k['village']; ?><br>
                                    <b>Kecamatan : </b><?= $k['disctrict']; ?><br>
                                    <b>Kabupaten : </b><?= $k['regency']; ?><br>
                                    <b>Provinsi : </b><?= $k['province']; ?><br>
                                    <b>Kode pos : </b><?= $k['zip']; ?><br>
                                    <b>Email : </b><?= $k['email']; ?><br>
                                    <b>No Telepon : </b><?= $k['phone']; ?><br>
                                </td>
                                <td>
                                    <?php if ($k['status_pembayaran'] == '1') { ?>
                                        <label class="btn btn-warning">Dikirim</label>
                                    <?php } elseif ($k['status_pembayaran'] == '2') { ?>
                                        <label class="btn btn-success">Selesai</label>
                                    <?php } else { ?>
                                        <label class="btn btn-danger">Proses</label>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('home/detailpesanan/') . $k['id_checkout']; ?>" class="btn btn-round btn-info btn-xs">Detail</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
    <br>


    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cach on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>opening all week</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>