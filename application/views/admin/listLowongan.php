<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
<!-- </div> -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form>
<div class="container-md p-2">
  <div class="d-flex justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Data Lowongan</h1>

    <a href="#"><button class='btn btn-primary mb-3 mt-3 d-flex justify-content-end'>Tambah Data</button></a>
  </div>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Job title</th>
        <th>Category</th>
        <th>Location</th>
        <th>Total applier</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        foreach ($lowongan as $row) {
          $no = 0;
          $no++;
          $pemberi = $this->user->getwhere('user','id_user',$row->id_user);
        ?>
          <td><?php echo $no ;?></td>
          <td><?php echo $pemberi->nama ?></td>
          <td><?php echo $row->lowongan ?></td>
          <td><?php echo $row->status ?></td>
          <td><?php echo $row->kategori ?></td>
          <td><?php echo $row->lokasi ?></td>
          <td><a href=""><button type='button' class='btn btn-danger'>Hapus</button></a></td>
        <?php
        }
        ?>
 
        
      </tr>
    <tfoot>
      <tr>
        <th>#</th>
        <th>Nama Pemberi</th>
        <th>Pekerjaan</th>
        <th>Kategori</th>
        <th>lokasi</th>
        <th>aksi</th>
      </tr>
    </tfoot>
    </tbody>
  </table>
  <div class="container-md p-2"></div>