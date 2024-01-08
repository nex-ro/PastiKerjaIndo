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
<div class="container-md p-2">
    <div class="d-flex justify-content-center">
        <h1 class="h3 mb-0 text-gray-800">Make A new Vacany</h1>
    </div>
    <div class="" style="display: flex;justify-content: center;align-items: center;">
        <div class="" style="width: 80%;">
            <form method="POST" action="" novalidate>
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" name="lowongan" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" value="<?= set_value('lowongan'); ?>">
                        <?= form_error('lowongan', '<small class = "text-danger pl-3">', '</small>'); ?>
                    </div>

                </div>
                <div class="form-group">
                    <input type="text" name="requirement" class="form-control form-control-user" id="exampleInputEmail" placeholder="requiement" value="<?= set_value('requirement'); ?>">
                    <?= form_error('requirement', '<small class = "text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <select class="form-control" id="status" name="status">
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="lokasi" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location" value="<?= set_value('lokasi'); ?>">
                    <?= form_error('lokasi', '<small class = "text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="">
                        <select class="form-control" id="kategori" name="kategori" require>
                        <option value="">All Category</option>
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
                            <option selected disabled>Type of work</option>
                            <option value="Fulltime">Full Time</option>
                            <option value="Part time">Part Time</option>
                            <option value="Intern">Intern</option>

                        </select>
                    </div>
                    <div class="col-sm-6" >
                        <select class="form-control" id="salary" name="salary" require>
                            <option selected disabled>Salary</option>
                            <option value=" < Rp.1.0000.000 "> < Rp.1.0000.000 </option>
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
                        <textarea style="width: 100%; border-radius: 10px; border: 1px solid grey;" name="desc" placeholder="Job Description" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                
                <button class="btn btn-primary btn-user btn-block">
                    Create
                </button>
                <hr>

            </form>
        </div>
    </div>
    <div class="container-md p-2"></div>