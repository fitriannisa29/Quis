<h3>
    Edit Data User
</h3>

<form action="<?php echo URL; ?>/user/update" method="POST">
    <input type="hidden" name="user_id" >
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="user_email" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" name="user_password">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="user_nama" >
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="user_alamat" >
    </div>
    <div class="mb-3">
        <label class="form-label">Hp</label>
        <input type="text" class="form-control" name="user_hp" >
    </div>
    <div class="mb-3">
        <label class="form-label">Pos</label>
        <input type="text" class="form-control" name="user_pos" >
    </div>
    <div class="mb-3">
        <label class="form-label">Role</label>
        <input type="text" class="form-control" name="user_role" >
    </div>
    <div class="mb-3">
        <label class="form-label">Aktif</label>
        <input type="text" class="form-control" name="user_aktif" >
    </div>
        <button type="submit" class="btn btn-success" name="btn_update">Update</button>
        <a href="<?php echo URL; ?>/user" class="btn btn-primary">Kembali</a>
</form>