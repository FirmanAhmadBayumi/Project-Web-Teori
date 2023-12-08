<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-petcare">List Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('admin/akun-pegawai/add') ?>" class="btn btn-primary" style="margin-bottom:15px;">Add Pegawai</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Usename</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($data as $d) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $d['username']; ?></td>
                                        <td><?= $d['email']; ?></td>
                                        <td><?= $d['password_hash']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/akun-pegawai/'.$d['id'].'/edit') ?>" class="btn btn-warning btn-sm mr-2">
                                                <i class="fas fa-pencil"></i> Edit
                                            </a>
                                            <form action="<?= base_url('admin/akun-pegawai/'.$d['id']) ?>" method="post" style="display: inline-block;">
                                                <input type="hidden" name='_method' value="DELETE">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?= $this->endSection(); ?> 