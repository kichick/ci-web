        <div class="page-title text-center" style="margin-top:200px">
            <h2>SELL ITEM</h2>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 mx-5">
                    <form action="<?= base_url('home/jual') ?>" method="POST" enctype="multipart/form-data">

                        <div class="row card">
                            <div class="col-12 mb-3 pt-3">
                                <h3>Your Information</h3>
                                <hr>
                                <label for="first_name">Full Name <span>*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" value="">
                            </div>

                            <div class="form-row col-12 mb-3">
                                <div class="col">
                                    <label for="account_name">Account Bank Name<span>*</span></label>
                                    <input type="text" class="form-control" id="nama_pemilik_rek" name="nama_pemilik_rek">
                                </div>
                                <div class="col">
                                    <label for="bank_name">Bank Name<span>*</span></label>
                                    <input type="text" class="form-control" id="nama_bank" name="nama_bank">
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="rek_number">Rekening Number</label>
                                <input type="text" class="form-control" id="no_rek" name="no_rek" value="">
                            </div>

                            <div class="col-12 mb-5">
                                <label for="new_password2">Phone Number</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="">
                            </div>
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
                            <div class="col">
                                <label for="gender">Gender Category <span>*</span></label>
                                <select class="w-100" name="id_kategori_gender" id="id_kategori_gender">
                                    <?php foreach ($gender as $g) : ?>
                                        <option value="<?= $g['id_kategori_gender']; ?>"><?= $g['nama_kategori_gender']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
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

                    </form>
                </div>
            </div>

            <!-- Benefit -->

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
        </div>
        <!-- ##### Checkout Area End ##### -->