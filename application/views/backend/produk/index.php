<!-- page content -->
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
                        <h2>Produk</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div>
                                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <a class="btn btn-primary" href="<?= base_url('produk/tambah'); ?>">Tambah Produk</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Kategori Gender</th>
                                        <th scope="col">Kategori Item</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($product as $pr) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $pr['name']; ?></td>
                                            <td>Rp.<?= number_format($pr['harga']); ?></td>
                                            <td><?= $pr['nama_kategori_gender']; ?></td>
                                            <td><?= $pr['nama_kategori_item']; ?></td>
                                            <td><?= $pr['deskripsi']; ?></td>
                                            <td><img src="<?= base_url() ?>assets/images/produk/<?= $pr['image_produk']; ?>" class='img-thumbnail' style='width:100px;height:100px;'></td>
                                            <td>
                                                <a href="<?= base_url('produk/editdata/') . $pr['id_produk']; ?>"  class="btn btn-round btn-primary btn-xs">edit</a>
                                                <a href="<?= base_url('produk/deleteProduct/') . $pr['id_produk']; ?>" onclick="return confirm('yakin data mau dihapus?');" class="btn btn-round btn-danger btn-xs">delete</a>
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