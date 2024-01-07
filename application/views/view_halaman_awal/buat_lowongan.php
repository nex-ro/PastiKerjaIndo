<body class="bg-gradient-primary">
    <div class="" style="display: flex; justify-content: center; align-items: center;text-align: center; background-color: #937cff;border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; height: 200px;">
        <p style="color: white; font-size: 30px;">Make A vacancy</p>
    </div>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="flex justify-content-center">
                    <div class="col-lg-7">
                        <!-- <div class="p-5"> -->
                            <form method="POST" action="" novalidate>
                                <div class="form-group">
                                    <div class="form-group">
                                    <label for="">Nama Pekerjaan</label>
                                        <input type="text" name="lowongan" class="form-control form-control-user"
                                            id="exampleFirstName" placeholder="Nama"
                                            value="<?= set_value('lowongan'); ?>">
                                        <?= form_error('lowongan','<small class = "text-danger pl-3">','</small>');?>

                                    </div>

                                </div>
                                <div class="form-group">

                                <label for="">Requirement ex : (requiement 1, requiement 2)</label>
                                    <input type="text" name="requirement" class="form-control form-control-user"
                                        id="exampleInputEmail" placeholder="requiement"
                                        value="<?= set_value('requiement'); ?>">
                                    <?= form_error('requirement','<small class = "text-danger pl-3">','</small>');?>

                                </div>
                                <div class="form-group">
                                    <label for="">Type Pekerjaan</label>
                                    <select class="form-control" id="type" name="type">
                                    <option value="Full Time">Full Time</option>
                                        <option value="Paruh Waktu">Paruh Waktu</option>
                                       
                                        <option value="Full Time">Intern</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Status Pekerjaan</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="open">Open</option>
                                        <option value="closed">Closed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Kategori</label>
											<select class="form-control" name="kategori">
												<option value="">All Category</option>
												<option value="Bidang Teknologi">Bidang Teknologi</option>
												<option value="Bidang Pendidikan">Bidang Pendidikan</option>
												<option value="Bidang Hukum">Bidang Hukum</option>
												<option value="Bidang Ekonomi">Bidang Ekonomi</option>
												<option value="Bidang Seni Sastra">Bidang Seni Sastra </option>
												<option value="Bidang Teknik dan Industry ">Bidang Teknik dan Industry </option>
												<option value="Bidang Kesehatan">Bidang Kesehatan</option>
												<option value="Bidang Kesehatan">Wirausaha</option>
											</select>
										</div>	

                                <div class="form-group ">
                                <label for="">Lokasi Pekerjaan</label>
                                        <input type="text" name="lokasi" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="lokasi"
                                            value="<?= set_value('lokasi'); ?>">
                                        <?= form_error('lokasi','<small class = "text-danger pl-3">','</small>');?>
                                    </div>

                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Buat
                                </button>
                                <hr>

                            </form>
                            <hr>


                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>