<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title px-3">
            <div class="title_left">
                <h3><?= $judul; ?></h3>
                <br />
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Konfirmasi Checkout</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <!-- <div>
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                </div> -->
                            <div>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Detail Pembeli</th>
                                        <th scope="col">Bukti Pembayaran</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($checkout as $k) : ?>
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
                                            <td><img src="<?= base_url() ?>assets/images/bukti/<?= $k['image_out']; ?>" class='img-thumbnail' style='width:100px;height:100px;'></td>
                                            <td><?= $k['total_harga']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-round btn-info btn-xs">Belum Dikonfirmasi</a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('konfirmasi/detail/') . $k['id_checkout']; ?>" class="btn btn-round btn-success btn-xs">detail barang</a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>