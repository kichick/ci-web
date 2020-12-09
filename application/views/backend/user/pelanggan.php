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
                        <h2><?= $judul ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($member as $m) : ?>
                                            <tr>
                                                <th><?= $i++; ?> </th>
                                                <td><?= $m['nama']; ?></td>
                                                <td><?= $m['email']; ?></td>
                                                <td><img src="<?= base_url('assets/images/profile/') . $m['image'];  ?>" alt="" class="img-thumbnail" width="100"></td>
                                                <td>
                                                    <?php if ($m['role_id'] == '1') { ?>
                                                        <label class="label label-success">Admin</label>
                                                    <?php } else { ?>
                                                        <label class="label label-info">Member</label>
                                                    <?php } ?>
                                                </td>

                                            </tr>
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
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add New Kategori item</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kategori'); ?>" method="post">
                <div class="modal-body">
                    <input type="text" class="form-control" id="nama_kategori_item" name="nama_kategori_item" placeholder="Nama Kategori Item">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>