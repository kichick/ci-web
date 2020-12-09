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
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $judul; ?></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('jual/tambah') ?>" method="POST" enctype="multipart/form-data">

                            <div class="col-sm-5">
                                <div class="col-12 mb-3 pt-3">
                                    <h3>Your Information</h3>
                                    <hr>
                                    <label for="first_name">Full Name <span>*</span></label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="" readonly>
                                </div>

                                <div class="form-row col-12 mb-3">
                                    <div class="col">
                                        <label for="account_name">Account Bank Name<span>*</span></label>
                                        <input type="text" class="form-control" id="nama_pemilik_rek" name="nama_pemilik_rek" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="bank_name">Bank Name<span>*</span></label>
                                        <input type="text" class="form-control" id="nama_bank" name="nama_bank" readonly>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="rek_number">Rekening Number</label>
                                    <input type="text" class="form-control" id="no_rek" name="no_rek" value="" readonly>
                                </div>

                                <div class="col-12 mb-5">
                                    <label for="new_password2">Phone Number</label>
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="" readonly>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="row card">
                                    <div class="col-12 mb-3 pt-3">
                                        <h3>Detail Item's</h3>
                                        <hr>
                                        <label for="first_name">Item Name <span>*</span></label>
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="company">Price<span>*</span></label>
                                        <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                                    </div>
                                    <div class="form-row col-12 mb-3">
                                        <div class="col-sm-5">
                                            <label for="gender">Gender Category <span>*</span></label>
                                            <select class="w-100" name="id_kategori_gender" id="id_kategori_gender">
                                                <?php foreach ($gender as $g) : ?>
                                                    <option value="<?= $g['id_kategori_gender']; ?>"><?= $g['nama_kategori_gender']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <label for="barang">Item Type <span>*</span></label>
                                            <select class="w-100" name="id_kategori_item" id="id_kategori_item">
                                                <?php foreach ($item as $i) : ?>
                                                    <option value="<?= $i['id_kategori_item']; ?>"><?= $i['nama_kategori_item']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="deskripsi">Description Item</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col-12 mb-5">
                                        <label for="image">Upload Photos</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <button id="submit" type="submit" class="btn btn-dark">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->