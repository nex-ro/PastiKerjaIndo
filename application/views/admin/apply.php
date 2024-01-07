<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    <a href="#" onclick="window.print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

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
                        <?php $data = $this->db->get('apply');
                        $this->db->where('status', 'diterima');
                        if ($data->num_rows() > 0) {
                            $count = $data->num_rows();
                        } else {
                            $count = 0;
                        }
                        $this->db->reset_query(); ?>

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $count ?>
                        </div>
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

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $count ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
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
        <h1 class="h3 mb-0 text-gray-800">Data Apply</h1>
        <!-- <a href="#"><button class='btn btn-primary mb-3 mt-3 d-flex justify-content-end'>Tambah Data</button></a> -->
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#No</th>
                <th>Nama</th>
                <th>Pekerjaan Apply</th>
                <th>Kategori</th>
                <th>status</th>
                <th>CV</th>
                <!-- <th>lokasi</th> -->
                <!-- <th>aksi</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php $no = 1;
                foreach ($apply as $row) : ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php
                    $applicant = $this->user->getwhere('user', 'id_user', $row->id_pengambil);
                    if ($applicant !== null) {
                        echo $applicant->nama;
                    } else {
                        echo "User Not Found";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $applicationId = $row->id_apply;
                        $status = $_POST['status'];
                        $description = $_POST['description'];
                        $data = array(
                            'status' => $status,
                        );
                        $this->db->where('id_apply', $applicationId);
                        $this->db->update('apply', $data);
                        $notificationData = array(
                            'id_apply' => $applicationId,
                            'title' => $status,
                            'desc' => $description
                        );
                        $this->db->insert('notif', $notificationData);

                        if ($status === 'accepted') {
                            $job = $this->user->getwhere('lowongan', 'id_lowongan', $row->id_lowongan);
                            if ($job !== null) {
                                $newLowonganValue = $job->lowongan + 1;
                                $this->db->set('lowongan', $newLowonganValue);
                                $this->db->where('id_lowongan', $row->id_lowongan);
                                $this->db->update('lowongan');
                            }
                        }
                    }
                    ?>
                    <?php if ($row->status === 'pending') : ?>
                        <form method="post" action="">
                            <input type="hidden" name="id_apply" value="<?php echo $row->id_apply; ?>">
                            <input type="hidden" name="status" value="rejected">
                            <input type="text" name="description" placeholder="Enter reason for rejection" required>
                            <button type="submit" class="btn btn-danger" name="reject">Reject</button>
                        </form>
                        <form method="post" action="">
                            <input type="hidden" name="id_apply" value="<?php echo $row->id_apply; ?>">
                            <input type="hidden" name="status" value="accepted">
                            <input type="text" name="description" placeholder="Enter reason for acceptance" required>
                            <button type="submit" class="btn btn-success" name="accept">Accept</button>
                        </form>
                    <?php else : ?>
                        <?php
                        $job = $this->user->getwhere('lowongan', 'id_lowongan', $row->id_lowongan);
                        if ($job !== null) {
                            echo $job->lowongan;
                        } else {
                            echo "Job Not Found";
                        }
                        ?>
                    <?php endif; ?>
                </td>
                <td>
                    <?php $kat = $this->user->getwhere('lowongan', 'id_lowongan', $row->id_lowongan);
                    if ($kat !== null) {
                        echo $kat->kategori;
                    } else {
                        echo "No Category";
                    } ?>
                </td>
                <td>
                    <?php echo $row->status; ?>
                </td>
                <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#viewCVModal_<?php echo $row->id_apply; ?>">
                        View CV
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>

        </tr>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Pekerjaan Apply</th>
                <th>Kategori</th>
                <th>status</th>
                <th>CV</th>
                <!-- <th>lokasi</th> -->
                <!-- <th>aksi</th> -->
            </tr>
        </tfoot>
        </tbody>
    </table>
    <?php foreach ($apply as $row) : ?>
        <div class="modal fade" id="viewCVModal_<?php echo $row->id_apply; ?>" tabindex="-1" role="dialog" aria-labelledby="viewCVModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewCVModalLabel">View CV</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Applicant Name:</strong>
                            <?php echo $applicant->nama; ?>
                        </p>
                        <img src="<?php echo base_url($row->cv); ?>" alt="CV Image" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>