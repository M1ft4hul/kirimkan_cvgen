<?php echo $this->extend('super/profil_admin') ?>
<?php echo $this->section('content'); ?>
<div class="col-lg-9 feature-text wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <h3 class="mb-2">Ubah Data Profilku</h3>
    <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <form action="<?php echo base_url('update/' . $admin->id) ?>" method="post">
            <div class="row g-3">
                <div class="col-lg-6 form-floating">
                    <input type="text" class="form-control" id="nama_lama" name="nama" value="<?= $admin->nama ?>" />
                    <label for="nama_lama">Nama Lengkap</label>
                </div>
                <div class="col-lg-6 form-floating">
                    <input type="email" class="form-control" id="email_lama" name="email" value="<?= $admin->email ?>" />
                    <label for="email_lama">Email</label>
                </div>
                <div class="col-lg-6 form-floating">
                    <input type="number" class="form-control" id="wa_lama" name="wa" value="<?= $admin->wa ?>" />
                    <label for="wa_lama">Whatsapp</label>
                </div>
                <div class="col-lg-6 form-floating">
                    <input type="password" class="form-control" id="password" name="password" />
                    <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                    <label for="password">Password baru</label>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Edit Profil</button>
        </form>
    </div>
</div>
<?php echo $this->endSection(); ?>