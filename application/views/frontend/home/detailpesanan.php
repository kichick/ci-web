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
                <h3>Detail Checkout</h3>
            </div>
            <table class="table table-hover">
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