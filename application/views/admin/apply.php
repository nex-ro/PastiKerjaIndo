<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" onclick="window.print()"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                jumlah yang telah diterima</div>
                                                <?php $data = $this->db->get('apply');  $this->db->where('status','diterima');
                                                if ($data->num_rows() > 0) {
                                                  $count = $data->num_rows();
                                              } else {
                                                $count = 0;
                                              }
                                              $this->db->reset_query(); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                rata-rata pelamar</div>
                                                <?php $data = $this->db->get('apply');  
                                                if ($data->num_rows() > 0) {
                                                  $count = $data->num_rows();
                                              } else {
                                                $count = 0;
                                              }
                                              $this->db->reset_query(); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
<div class="container-md p-2">
    <div class="d-flex justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Data Apply</h1>
        <!-- <a href="#"><button class='btn btn-primary mb-3 mt-3 d-flex justify-content-end'>Tambah Data</button></a> -->
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Pekerjaan Apply</th>
                <th>Kategori</th>
                <th>status</th>
                <!-- <th>lokasi</th> -->
                <!-- <th>aksi</th> -->
            </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        foreach ($apply as $row) {
          $no = 0;
          $no++;
        ?>
        <?php 
        $lowongan  = $this->user->getwhere('lowongan','id_lowongan',$row->$id_lowongan);
        if ($pemberi !== null) {
          
        } else {
            echo "No user found"; // Or handle empty case accordingly
        }
        $nama_ap  = $this->user->getwhere('user','id_user',$lowongan->$id_user);
        if ($nama_ap !== null) {
            
        } else {
            echo "No user found"; // Or handle empty case accordingly
        }
        ?>
          <td><?php echo $no ;?></td>
          <td><?php echo $nama_ap->nama; ?></td>
          <td><?php echo $lowongan->lowongan; ?></td>
          <td><?php echo $apply->status; ?></td>
        <?php
        }
        ?>
 

      </tr>
        <tfoot>
        <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Pekerjaan Apply</th>
                <th>Kategori</th>
                <th>status</th>
                <!-- <th>lokasi</th> -->
                <!-- <th>aksi</th> -->
            </tr>
        </tfoot>
        </tbody>
    </table>
    <div class="container-md p-2"></div>