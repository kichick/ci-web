<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="active"><a href="<?= base_url('home/profil'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Profil</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-5">
                <!-- <form action="<?= base_url('home/profil') ?>"> -->
                <?= form_open_multipart('home/profil'); ?>
                <div class="row card">
                    <div class="col-12 mb-3 pt-3">
                        <h3>Personal Information</h3>
                        <hr>
                        <label for="first_name">Name <span>*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="email">Email<span>*</span></label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="current_password">Current Password<span>*</span></label>
                        <input type="password" class="form-control" id="current_password" name="current_password" value="">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="new_password1">New Password</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1" value="">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="new_password2">Confirm Password</label>
                        <input type="password" class="form-control" id="new_password2" name="new_password2" value="">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-12 mb-3">
                        <button id="submit" type="submit" class="btn btn-danger" value="Submit">Save</button>
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