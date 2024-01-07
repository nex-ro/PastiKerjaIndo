<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
<!-- </div> -->
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="" onclick="window.print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                total Lowongan tersedia</div>
                                                <?php $data = $this->db->get('lowongan');$this->db->where('status', 'open');
                                                if ($data->num_rows() > 0) {
                                                  $count = $data->num_rows();
                                              } else {
                                                $count = 0;
                                              }
                                              $this->db->reset_query(); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                jumlah user</div>
                                                <?php $data = $this->db->get('user');
                                                if ($data->num_rows() > 0) {
                                                  $count = $data->num_rows();
                                              } else {
                                                $count = 0;
                                              }
                                              $this->db->reset_query(); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                 

                    <!-- Content Row -->
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

  </div>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Pemberi</th>
        <th>Pekerjaan</th>
        <th>status</th>
        <th>Kategori</th>
        <th>Type</th>
        <th>lokasi</th>

        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        foreach ($lowongan as $row) {
          $no = 0;
          $no++;

          $id_user = '';
        ?>
        <?php 
        $pemberi = $this->user->getwhere('user', 'id_user', $row->id_user);
        if ($pemberi !== null) {
      
        } else {
            echo "No user found"; // Or handle empty case accordingly
        }

        ?>
          <td><?php echo $no ;?></td>
          <td><?php echo $pemberi->nama ?></td>
          <td><?php echo $row->lowongan ?></td>
          <td><?php echo $row->status ?></td>
          <td><?php echo $row->kategori ?></td>

          <td><?php echo $row->type?></td>
          <td><?php echo $row->lokasi ?></td>
          <td><a href=""><button type='button' class='btn btn-danger'>Hapus</button></a></td>
          </tr>
        <?php
        
        }
        
        ?>
 
        
    
    <tfoot>
      <tr>
        <th>#</th>
        <th>Nama Pemberi</th>
        <th>Pekerjaan</th>
        <th>status</th>
        <th>Kategori</th>
        <th>Type</th>
        <th>lokasi</th>
        <th>aksi</th>
      </tr>
    </tfoot>
    </tbody>
  </table>
  <div class="container-md p-2"></div>