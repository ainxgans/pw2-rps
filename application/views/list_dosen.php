<section class="section">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end pb-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDosen">
                        <i class="bi bi-person-fill-add"></i>Tambah Dosen
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-lg" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($dosen as $value) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td>
                                    <a href="<?= base_url('/Admin/editDosen/' . $value['id']) ?>" class="btn btn-primary"><span class="mb-3"><i class="bi bi-pencil-fill"></span></i></a>
                                    <a href="<?= base_url('/Admin/hapusDosen/' . $value['id']) ?>" class="btn btn-danger tombol-hapus"><span class="mb-3"><i class="bi bi-trash-fill"></span></i></a>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>
                <div class="modal modal-lg fade text-left" id="tambahDosen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahDosen">
                                    Tambah Dosen
                                </h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('/Admin/tambahDosen') ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="id">NIK</label>
                                                <input type="text" class="form-control" placeholder="NIK" name="id" />
                                                <?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama" name="nama" />
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="tgl_penyusun">Email</label>
                                                <input type="email" class="form-control" placeholder="E-mail" name="email" />
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="no_doc">Password</label>
                                                <input type="password" id="no_doc" class="form-control" placeholder="Password" name="password" />
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tutup</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tambah</span>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>