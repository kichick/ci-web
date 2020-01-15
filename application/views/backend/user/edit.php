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
                       
                        <form action="<?= base_url('profile/edit'); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="nama" value="<?= $user['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label"> Current Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="new_password1" class="col-sm-2 col-form-label"> New Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="new_password2" class="col-sm-2 col-form-label"> Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Picture </div>
                                <div class="col-sm-10">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">

                                        </div>
                                    </div>
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