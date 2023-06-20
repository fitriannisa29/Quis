<h3>
    Edit Data Pelanggan
</h3>

<form action="<?php echo URL; ?>/pelanggan/update" method="POST">
    <input type="hidden" name="pel_id" >
    <div class="mb-3">
        <label class="form-label">Golongan Id</label>
        <input type="text" class="form-control" name="pel_id_gol"required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nomor</label>
        <input type="text" class="form-control" name="pel_no" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="pel_nama" >
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="pel_alamat">
    </div>
    <div class="mb-3">
        <label class="form-label">Hp</label>
        <input type="text" class="form-control" name="pel_hp" >
    </div>
    <div class="mb-3">
        <label class="form-label">KTP</label>
        <input type="text" class="form-control" name="pel_ktp" >
    </div>
    <div class="mb-3">
        <label class="form-label">Seri</label>
        <input type="text" class="form-control" name="pel_seri" >
    </div>
    <div class="mb-3">
        <label class="form-label">Meteran</label>
        <input type="text" class="form-control" name="pel_meteran" >
    </div>
    <div class="mb-3">
        <label class="form-label">Aktif</label>
        <input type="text" class="form-control" name="user_aktif" >
    </div>
    <div class="mb-3">
        <label class="form-label">User Id</label>
        <input type="text" class="form-control" name="pel_id_user" required>
    </div>
        <button type="submit" class="btn btn-success" name="btn_update">Update</button>
        <a href="<?php echo URL; ?>/pelanggan" class="btn btn-primary">Kembali</a>
</form>