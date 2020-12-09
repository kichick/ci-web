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
                                            <td>
                                                <?php if ($k['status_pembayaran'] == '1') { ?>
                                                    <label class="label label-info">Dikirim</label>
                                                <?php } elseif ($k['status_pembayaran'] == '2') { ?>
                                                    <label class="label label-success">Selesai</label>
                                                <?php } else { ?>
                                                    <label class="label label-warning">Proses</label>
                                                <?php } ?>
                                            </td>

                                            <td>
                                                <a href="#" class="btn btn-round btn-info btn-xs" data-toggle="modal" data-target="#update<?= $k['id_checkout'] ?>">Update</a>

                                                <a href="<?= base_url('konfirmasi/detail/') . $k['id_checkout']; ?>" class="btn btn-round btn-success btn-xs">Detail</a>

                                                <!-- modal update -->
                                                <div class="modal fade" id="update<?= $k['id_checkout'] ?>" tabindex="-1" role="dialog" aria-label="modalUpdate" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalUpdate">Form Update</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Closer">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <form class="konfirmasi" action="<?= base_url('konfirmasi/update_pembayaran')  ?>" method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label>Id Transaksi</label>
                                                                        <input type="text" class="form-control" id="id_checkout" name="id_checkout" value="<?= $k['id_checkout'] ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Nama</label>
                                                                        <input type="text" class="form-control" id="name_buy" name="name_buy" value="<?= $k['name_buy'] ?>" readonly>
                                                                    </div>

                                                                    <div class=" form-group">
                                                                        <label>Status Pembayaran</label>
                                                                        <select class="form-control" id="status_pembayaran" name="status_pembayaran">
                                                                            <option value="0">Proses</option>
                                                                            <option value="1">Dikirim</option>
                                                                            <option value="2">Selesai</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda ingin mengupdate pembayaran?');">UPDATE</button>
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /modal update -->

                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>