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
                        <h2>Kategori</h2>
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
                                <a href="" class="btn btn-danger mb-3 " data-toggle="modal" data-target="#exampleModal">Print </a>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Detail Pembeli</th>
                                        <th scope="col">Detail Produk</th>
                                        <th scope="col">Bukti Pembayaran</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($laporan as $l) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>

                                            <td>
                                                <b>Nama : </b><?= $l['name_buy']; ?><br>
                                                <b>Alamat : </b><?= $l['address']; ?><br>
                                                <b>Desa: </b><?= $l['village']; ?><br>
                                                <b>Kecamatan : </b><?= $l['disctrict']; ?><br>
                                                <b>Kabupaten : </b><?= $l['regency']; ?><br>
                                                <b>Provinsi : </b><?= $l['province']; ?><br>
                                                <b>Kode pos : </b><?= $l['zip']; ?><br>
                                                <b>Email : </b><?= $l['email']; ?><br>
                                                <b>No Telepon : </b><?= $l['phone']; ?><br>
                                            </td>
                                            <td>
                                                <b>Nama Produk : </b><?= $l['name']; ?><br>
                                                <b>Harga : </b><?= $l['harga']; ?><br>
                                                <b>Gambar: </b><img src="<?= base_url() ?>assets/images/produk/<?= $l['image_produk']; ?>" class='img-thumbnail' style='width:100px;height:100px;'><br>
                                            </td>
                                            <td><img src="<?= base_url() ?>assets/images/bukti/<?= $l['image_out']; ?>" class='img-thumbnail' style='width:100px;height:100px;'></td>
                                            <td><?= $l['total_harga']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-round btn-info btn-xs">Belum Dikonfirmasi</a>
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