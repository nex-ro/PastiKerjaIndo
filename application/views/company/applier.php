<div class="container-md p-2">
    <div class="d-flex justify-content-between" style="margin-bottom: 30px;">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar <?= $pekerjaan['lowongan'] ?></h1>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr style="text-align: center;">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">gmail</th>
                <th scope="col">Status</th>
                <th scope="col">cv</th>
                <th scope="col">view profile</th>
                <th scope="col">contact</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($pelamar) <= 0) {
                echo "<td colspan='8' style='text-align:center;'>No Applier</td>";
            } else {
                foreach ($pelamar as $row) {
                    $no = 0;
                    $no++;
                    $infoPelamar = $this->db->get_where('user', array('id_user' => $row->id_pengambil))->row_array();;
            ?>
                    <tr style="text-align: center;">
                        <th scope="row"><?= $no ?></th>
                        <td><?= $infoPelamar['nama'] ?></td>
                        <td><?= $infoPelamar['email'] ?></td>
                        <td><?= $row->status ?></td>
                        <td><a href=""><button type="button" class="btn btn-info"><i style="font-size: 20px;" class='bx bxs-file'></i></button></a></td>
                        <td><a href="<?=site_url('Company/view_profil')?>?id=<?= $infoPelamar['id_user'] ?>"><button type="button" class="btn btn-info"><i style="font-size: 20px;" class='bx bxs-user-rectangle'></i></button></a></td>
                        <td><a target="_blank" href="https://wa.me/<?= $infoPelamar['noHp'] ?>"><button type="button" class="btn btn-info"><i style="font-size: 20px;" class='bx bxs-message'></i></button></a></td>
                        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?= $row->id_apply ?>">Action</button></td>
                    </tr>
                    <div class="modal fade" id="exampleModal<?= $row->id_apply ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pengelolahan Pelamar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?=site_url("Company/notif")?>" method="post">
                                    <div class="modal-body">
                                    <input type="hidden" name="idambil" value="<?php echo $infoPelamar['id_user']; ?>">
                                    <input type="hidden" name="low" value="<?php echo $row->id_lowongan; ?>">
                                    <input type="hidden" name="pel" value="<?php echo $row->id_apply; ?>">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="requiement" value="<?= $infoPelamar['nama'] ?>">

                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="status" name="status">
                                                <option value="<?= $row->status ?>"><?= $row->status ?></option>
                                                <option value="Ditolak">Ditolak</option>
                                                <option value="closed">Diterima</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" hidden name="id" class="form-control form-control-user" id="exampleInputEmail" placeholder="requiement" value="<?= $row->id_apply ?>">
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
            } ?>



        </tbody>
    </table>


    <div class="container-md p-2" style="margin-top: 30px;"></div>