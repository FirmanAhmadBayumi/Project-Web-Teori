<?= $this->extend('admin/template/app'); ?>
<?=$this->section('content') ?>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Pegawai</h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form class="user" action="<?= base_url('admin/akun-pegawai/store') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                                name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" >
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                               name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                            name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style="margin-top: 50px;">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>