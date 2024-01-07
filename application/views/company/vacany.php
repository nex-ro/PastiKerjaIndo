<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
<!-- </div> -->
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
                            <option selected disabled>Category</option>
                            <option value="Education">Education</option>
                            <option value="Health ">Health </option>
                            <option value="Business,management and administration">Business, management and administration</option>
                            <option value="Law enforcement">Law enforcement </option>
                            <option value="Architecture and Engineering ">Architecture and Engineering </option>
                            <option value="Arts , culuture and entertainment">Arts , culuture and entertainment </option>
                            <option value="Community and social services">Community and social services</option>
                            <option value="Science and technology">Science and technology </option>
                            <option value=" Farming, fishing and forestry">Farming, fishing and forestry</option>
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