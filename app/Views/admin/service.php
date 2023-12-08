<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                    <a href="/admin/service/create" class="btn btn-petcare">Create Service</a>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-petcare">List Service</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Service</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($service as $s) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $s['nama_service']; ?></td>
                                        <td>
                                            <a href="<?= base_url('/admin/service/'. $s['id'] . '/edit'); ?>" class="btn btn-warning btn-sm mr-2">
                                                <i class="fas fa-pencil"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm mr-2 delete-button" data-url="<?= base_url('/admin/service/' . $s['id']) ?>"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?= $this->endSection(); ?> 