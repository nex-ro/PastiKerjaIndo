<div class="container-md p-2">
    <div class="d-flex justify-content-center">
        <h1 class="h3 mb-0 text-gray-800">Edit Profil</h1>
    </div>
        
    <div class="" style="display: flex;justify-content: center;align-items: center;">
        <div class="" style="width: 80%;">
            <form method="POST" action="<?=site_url('company/update')?>" >
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" value="<?= $result['nama']?>">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="lokasi" class="form-control form-control-user" id="exampleInputEmail" placeholder="requiement" value="<?= $result['lokasi'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="noHp" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location" value="<?= $result['noHp']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" disabled name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location" value="<?= $result['email']; ?>">
                </div>
                <div class="form-group">
                    <div class="">
                        <textarea style="width: 100%; border: 1px solid grey;" name="desc" placeholder="Job Description" id="" cols="30" rows="10"><?=$result['desc']?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" hidden name="id_user" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location" value="<?= $result['id_user']; ?>">
                </div>
                <button type='submit' class="btn btn-primary btn-user btn-block">
                    Save
                </button>
                <hr>

            </form>
        </div>
    </div>
