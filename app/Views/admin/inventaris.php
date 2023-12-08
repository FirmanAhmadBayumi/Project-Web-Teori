<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                        <a href="/admin/inventaris/create" class="btn btn-petcare">Create Inventaris</a>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-petcare">List Inventaris</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Inventaris</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($inventaris as $in) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $in['nama_inventaris']; ?></td>
                                        <td>
                                            <a href="<?= base_url('/admin/inventaris/'. $in['id'] . '/edit'); ?>" class="btn btn-warning btn-sm mr-2">
                                                <i class="fas fa-pencil"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm mr-2 delete-button" data-url="<?= base_url('/admin/inventaris/' . $in['id']) ?>"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?= $this->endSection(); ?> 