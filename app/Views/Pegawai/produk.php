<?= $this->extend('Pegawai/layouts/app'); ?>
<?= $this->section('content'); ?>

                    

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Produk</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
             
            <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">List Produk</h6>
                    <form action="<?= base_url('/pegawai/createproduct') ?>">
                    <button type="submit" class="btn btn-primary  btn-sm">Tambah produk</button>
                    </form>
                </div>
            <div class="card-body">
                <div class="table-responsive">
  <table
        class="table table-bordered"
        id="dataTable"
        width="100%"
        cellspacing="0"
        >
    <tr>
      <th>Id</th>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Foto</th>
      <th>Aksi</th>
    </tr>
        <tr>
            <td>1</td>
            <td>Whiska</td>
            <td>Rp. 20.000</td>
            <td>15</td>
            <td>15</td>
            <td>
            <form action="<?= base_url('pegawai/updateproduct') ?>">
            <button class="btn btn-success  btn-sm">Update</button></form>
            <button class="btn btn-danger  btn-sm">Delete</button>
            </td>
        </tr>
  </table>
  </div>
    </div>
        </div>
        <!-- End of Main Content -->
        

<?= $this->endSection(); ?>