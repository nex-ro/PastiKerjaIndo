<div class="headProfile w-100 d-flex flex-row animate__animated  animate__fadeIn  align-items-center mb-3" style="background-color: white; border-radius: 30px; padding: 30px;">
    <img src="<?=base_url() ?><?php echo $result['profilePicture']?>" style="border-radius: 50%; margin-right: 20px; width: 80px;">
    <div class="captProfile">
        <h4 style="margin: 0px;"><?= $result['nama']?> </h4>
        <h6 style="margin: 0px; opacity: 0.7;">Company </h6>
        <h6 style="margin: 0px; opacity: 0.7;">Rating : </h6>

    </div>
</div>
<div class="bottomProfile w-100 animate__animated  animate__fadeIn" style="background-color: white; padding: 40px; border-radius: 30px;">
    <div class="textProfil d-flex flex-row justify-content-between">
        <h5>Detail Profil</h5>
        <a href="<?=site_url('company/editCompany')?>"><button type="button" class="btn btn-outline-secondary"><i class='bx bx-pencil'></i> Edit</button>
        </a>
    </div>
    <div class="d-flex w-100">
        <div class="row w-100">
            <div class="col-md-6" style="padding :20px;">
                <h5 style="margin:0px;">Nama lengkap :</h5>
                <h5 style="margin:0px;"><?= $result['nama'] ?></h5>
            </div>
            <div class="col-md-6" style="padding :20px;">
                <h5 style="margin:0px;">lokasi :</h5>
                <h5 style="margin:0px;"><?= $result['lokasi'] ?></h5>
            </div>
            <div class="col-md-6" style="padding :20px;">
                <h5 style="margin:0px;">Contact Person :</h5>
                <h5 style="margin:0px;"><?= $result['noHp'] ?></h5>
            </div>
            <div class="col-md-6" style="padding :20px;">
                <h5 style="margin:0px;">Email :</h5>
                <h5 style="margin:0px;"><?= $result['email'] ?></h5>
            </div>
            <div class="col-md-6" style="padding :20px;">
                <h5 style="margin:0px;">Desc :</h5>
                <h5 style="margin:0px;"><?= $result['desc'] ?></h5>
            </div>


        </div>
    </div>
</div>
</div>
