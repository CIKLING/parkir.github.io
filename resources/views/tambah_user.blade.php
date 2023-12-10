<div class="row">
    <div class="col s12">
    <div class="card-panel">
    <h3>Tambah User</h3>
    
    <form method="get" action="user/add_user">
    {{csrf_field()}}
    <label style="color:black;font-size:100%" for="desc">username</label>
    <div class="input-field">
    <input type="text" name="username" id="username" required>
    </div>
    <label style="color:black;font-size:100%" for="desc">password</label>
    <div class="input-field">
    <input type="password" name="password" id="password" required>
    </div>
    <label style="color:black;font-size:100%" for="desc">Nama Lengkap</label>
    <div class="input-field">
    <input type="text" name="nama" id="nama" required>
    </div>
    <label style="color:black;font-size:100%" for="desc">Alamat</label>
    <div class="input-field">
    <input type="text" name="alamat" id="alamat" required>
    </div>
    <label style="color:black;font-size:100%" for="desc">Nomor Telp</label>
    <div class="input-field">
    <input type="text" name="nomor" id="nomor" required>
    </div>
    <label style="color:black;font-size:100%" for="desc">Bagian</label>
    <br>
    <select name="role" id="role" class="browser-default">
    <option value="PMasuk">Petugas Masuk</option>
    <option value="PKeluar">Petugas Keluar</option>
    <option value="PRuang">Petugas Ruang</option>
    </select>
    <br>
    <button class="btn waves-effect green">Add</button>
    </form>
    </div>
    </div>