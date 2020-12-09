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
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Sub Total</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php
                                    $total = 0;
                                    foreach ($pesanan as $p) :
                                        $subtotal = $p['qty'] * $p['harga_barang'];
                                        $total += $subtotal;
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td>
                                                <h2 class="h5 text-black"><?= $p['nama_barang'] ?></h2>
                                            </td>
                                            <td>
                                                <img width="100px" src="<?= base_url(''); ?>assets/images/jual/<?= $p['image']; ?>" alt="Image" class="img-fluid">
                                            </td>
                                            <td><?= $p['qty'] ?></td>
                                            <td>Rp.<?= number_format($p['harga_barang'], 0, ',', '.') ?></td>
                                            <td>Rp.<?= number_format($subtotal, 0, ',', '.') ?></td>


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