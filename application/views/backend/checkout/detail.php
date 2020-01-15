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
                            <div>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>