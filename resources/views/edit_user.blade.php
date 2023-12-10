<div class="container">
    <div class="row">
    <div class="col s10">
    <div class="card-panel">
    <h3>Edit User</h3>
    @foreach($data as $user)
    <form method="get" action="/user/update">
   <label for="desc">Username :</label>
    <div class="input-field">
    <input type="text" name="username" id="username" readonly value="{{$user->username}}"
   required>
    </div>
   <label for="desc">Password :</label>
    <div class="input-field">
    <input type="Password" name="password" id="pass" required>
    </div>
   <label for="desc">Nama :</label>
    <div class="input-field">
    <input type="text" name="nama" id="nama" value="{{$user->name}}" required>
    </div>
   <label for="desc">Alamat :</label>
    <div class="input-field">
    <input type="text" name="alamat" id="alamat" value="{{$user->alamat}}" required>
    </div>
   <label for="desc">Nomor Telp :</label>
    <div class="input-field">
    <input type="text" name="nomor" id="nomor" value="{{$user->no_telp}}" required>
    </div>
   <label for="desc">Bagian</label>
   <br>
   <select name="role" id="role" class="browser-default">
   <option value="PMasuk">Petugas Masuk</option>
   <option value="PKeluar">Petugas Keluar</option>
   <option value="PRuang">Petugas Ruang</option>
   </select>
   <br>
    <button class="btn waves-effect green">Edit</button>
    </form>
    @endforeach
    </div>
    </div>
    </div>
    </div>