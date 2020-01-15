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
                        <h2>Kategori</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <a href="" class="btn btn-primary mb-5 " data-toggle="modal" data-target="#exampleModal">Add Kategori Item </a>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kategori_item as $ki) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $ki['nama_kategori_item']; ?></td>
                                                <td>
                                                    
                                                    <a href="<?= base_url('kategori/deleteKategori_i/') . $ki['id_kategori_item']; ?>" onclick="return confirm('yakin data mau dihapus?');" class="btn btn-round btn-danger btn-xs">delete</a>
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