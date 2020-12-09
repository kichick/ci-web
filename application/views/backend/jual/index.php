<!-- page content -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title px-3">
            <div class="title_left">
                <h3>Tambah Produk</h3>
                <br />
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Produk</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <a class="btn btn-primary" href="<?= base_url('jual/tambah'); ?>">Tambah Produk</a>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Detail Penjual</th>
                                        <th scope="col">Detail Barang</th>

                                        <th scope="col">Foto</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($jual as $j) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $j['nama']; ?></td>
                                            <td>
                                                <b>Nama Pemilik Rekening : </b><?= $j['nama_pemilik_rek']; ?><br>
                                                <b>Nama Bank : </b><?= $j['nama_bank']; ?><br>
                                                <b>No Rekening : </b><?= $j['no_rek']; ?><br>
                                                <b>No Telepon : </b><?= $j['no_telepon']; ?><br>
                                            </td>
                                            <td>
                                                <b>Nama Barang : </b><?= $j['nama_barang']; ?><br>
                                                <b>Harga : </b>Rp.<?= number_format($j['harga_barang']); ?><br>
                                                <b>Kategori Gender : </b><?= $j['nama_kategori_gender']; ?><br>
                                                <b>Kategori Item : </b><?= $j['nama_kategori_item']; ?><br>
                                            </td>
                                            <td><img src="<?= base_url() ?>assets/images/jual/<?= $j['image']; ?>" class='img-thumbnail' style='width:100px;height:100px;'></td>
                                            <td class=" ">
                                                <?php if ($j['status'] == 'aktif') : ?>
                                                    <span class="label label-success"><?= $j['status']; ?></span>
                                                <?php else : ?>
                                                    <span class="label label-danger"><?= $j['status']; ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('jual/editdata/') . $j['id_jual']; ?>" class="btn btn-round btn-primary btn-xs">edit</a>
                                                <a href="<?= base_url('jual/deleteJual/') . $j['id_jual']; ?>" onclick="return confirm('yakin data mau dihapus?');" class="btn btn-round btn-danger btn-xs">delete</a>
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