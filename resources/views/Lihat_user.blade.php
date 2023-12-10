<!doctype html>
<html>
<div class="row">
 <div class="col s12">
 <br/>
<a href="/tambah"><button class="btn waves-effect orange white-text">Tambah
Data</button></a> <br>
 <div class="card-panel white-text blue">
 <h3>Daftar User</h3>
 </br>
 <table>
 <tr>
 <td>Username</td>
 <td>Nama</td>
 <td>No_Telp</td>
 <td>Bagian</td>
 <td>Action</td>
 </tr>
 </thead>
 @foreach($data as $usr)
 <tr>
 <td>
 {{$usr->username}}
 </td>
 <td>
 {{$usr->name}}
 </td>
 <td>
 {{$usr->no_telp}}
 </td>
 <td>
 {{$usr->role}}
 </td>
 <td>
<a href="/user/delete/{{$usr->id}}" onclick="return confirm('Admin Yakin ingin
menghapusnya?');"><button class="btn waves-effect red white-text">Hapus</button></a>
 <a href="/user/edit/{{$usr->id}}"><button class="btn waves-effect orange whitetext">Edit</button></a>
 </td>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>