<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $judul ?></h3>
                <br />
            </div>
        </div>

        <div class="clearfix">

            <div class="card mb-3" style="max-width: 520px;">
                <div class="row no-gutters">

                    <div class="col-md-4">
                        <img width="150" src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nama']; ?></h5>
                            <p class="card-text"><?= $user['email']; ?></p>
                            <p class="card-text"><small class="text-muted">Member Since
                                    <?= date('d F Y', $user['date_created']); ?></small></p>
                            <a class="btn btn-success" href="<?= base_url('profile/edit'); ?>"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->