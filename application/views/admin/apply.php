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
        <?php $lowongan  = $this->user->getwhere('lowongan','id_lowongan',$row->$id_lowongan);?>
        <?php $nama_ap  = $this->user->getwhere('user','id_user',$lowongan->$id_user);?>
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