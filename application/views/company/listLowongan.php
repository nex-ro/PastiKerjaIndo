<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
<!-- </div> -->

<?php if($this->session->flashdata('message')): ?>
    <script>
      
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "Signed in successfully"
        });
    </script>
<?php endif; ?>
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
    <a href="<?= site_url('company/buatLowongan') ?>"><button class='btn btn-primary mb-3 mt-3 d-flex justify-content-end'>Tambah Data</button></a>
  </div>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Company</th>
        <th>Job title</th>
        <th>category</th>
        <th>lokasi</th>
        <th>status</th>
        <th>applier</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $no = 0;
      foreach ($lowongan as $row) {
        $no = $no + 1;
        // Di dalam model atau controller
        

        $this->db->where('id_lowongan', $row->id_lowongan);
        $query = $this->db->get('apply');
        $count = $query->num_rows();

        

      ?>
        <tr>
          <td><?php echo $no;  ?></td>
          <td><?php echo  $this->session->userdata('nama') ?></td>
          <td><?php echo $row->lowongan ?></td>
          <td><?php echo $row->kategori ?></td>
          <td><?php echo $row->lokasi ?></td>
          <td><?php echo $row->status ?></td>
          <td><?=$count?></td>
          <td>
            <a href="<?= site_url('Company/applier') ?>?id=<?= $row->id_lowongan ?>"><button type='button' class='btn btn-success'>Check Applier</button></a>
            <a><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?= $row->id_lowongan ?>">Edit</button></a>
            <a href="<?= site_url('Company/delateLowongan') ?>?id=<?= $row->id_lowongan ?>"><button type='button' class='btn btn-danger'>Hapus</button></a>
          </td>
        </tr>

        <div class="modal fade" id="exampleModalCenter<?= $row->id_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= site_url("Company/editLowongan") ?>" method="post">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="form-group">
                      <input type="text" name="lowongan" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" value="<?= $row->lowongan ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" name="requirement" class="form-control form-control-user" id="exampleInputEmail" placeholder="requiement" value="<?= $row->requirement ?>">
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="status" name="status">
                      <option value="<?= $row->status ?>"><?= $row->status ?></option>
                      <option value="open">Open</option>
                      <option value="closed">Closed</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" name="lokasi" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location" value="<?= $row->lokasi ?>">
                  </div>
                  <div class="form-group">
                    <div class="">
                      <select class="form-control" id="kategori" name="kategori" require>
                        <option selected value="<?= $row->kategori ?>"><?= $row->kategori ?></option>
                        <option value="Bidang Teknologi">Bidang Teknologi</option>
                        <option value="Bidang Pendidikan">Bidang Pendidikan</option>
                        <option value="Bidang Hukum">Bidang Hukum</option>
                        <option value="Bidang Ekonomi">Bidang Ekonomi</option>
                        <option value="Bidang Seni Sastra">Bidang Seni Sastra </option>
                        <option value="Bidang Teknik dan Industry">Bidang Teknik dan Industry </option>
                        <option value="Bidang Kesehatan">Bidang Kesehatan</option>
                        <option value="Wirausaha">Wirausaha</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <select class="form-control" id="type" name="type" require>
                        <option selected value="<?= $row->type ?>"> <?= $row->type ?></option>
                        <option value="Fulltime">Full Time</option>
                        <option value="Part time">Part Time</option>
                        <option value="Intern">Intern</option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <select class="form-control" id="salary" name="salary" require>
                        <option selected value="<?= $row->salary ?>"><?= $row->salary ?></option>
                        <option value=" < Rp.1.0000.000 ">
                          < Rp.1.0000.000 </option>
                        <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                        <option value="Rp.2.000.000 - Rp.3.000.000">Rp.2.000.000 - Rp.3.000.000</option>
                        <option value="Rp.3.000.000 - Rp.4.000.000">Rp.3.000.000 - Rp.4.000.000</option>
                        <option value="Rp.4.000.000 - Rp.5.000.000">Rp.4.000.000 - Rp.5.000.000</option>
                        <option value="> Rp.5.000.000"> > Rp.5.000.000</option>

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="">
                      <textarea style="width: 100%; border-radius: 10px; border: 1px solid grey;" name="desc" placeholder="Job Description" id="" cols="30" rows="10"><?= $row->desc ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" hidden name="id_lowongan" class="form-control form-control-user" id="exampleInputEmail" placeholder="requiement" value="<?= $row->id_lowongan ?>">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      <?php
      }
      ?>



    <tfoot>
      <tr>
        <th>#</th>
        <th>Company</th>
        <th>Job title</th>
        <th>category</th>
        <th>lokasi</th>
        <th>status</th>
        <th>applier</th>
        <th>aksi</th>
      </tr>
    </tfoot>
    </tbody>
  </table>
  <div class="container-md p-2"></div>