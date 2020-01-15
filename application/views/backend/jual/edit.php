<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title px-3">
            <div class="title_left">
                <h3><?= $judul ?></h3>
                <br />
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $judul; ?></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <?= $this->session->flashdata('message'); ?>

                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_jual" id="id_jual" value="<?= $jual['id_jual'] ?>">
                            
                            <div class=" form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $jual['nama_barang'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $jual['harga_barang'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="form-grup col-sm-5">
                                    <select name="id_kategori_gender" id="id_kategori_gender" class="form-control" >
                                        <option value="">Category Gender</option>
                                        <?php foreach ($gender as $g) : ?>
                                            <option value="<?= $g['id_kategori_gender']; ?>"><?= $g['nama_kategori_gender']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-grup col-sm-5 ">
                                    <select name="id_kategori_item" id="id_ketogori_item" class="form-control">
                                        <option value="">Category Item</option>
                                        <?php foreach ($item as $i) : ?>
                                            <option value="<?= $i['id_kategori_item']; ?>"><?= $i['nama_kategori_item']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $jual['deskripsi'] ?>">
                                </div>
                            </div>
                          
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->