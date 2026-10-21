@extends('layouts.main')
@section('title', 'Tambah data')
@section('content')

<h1>Tambah Data Siswa</h1>

<form action="{{ route('siswa.store') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama" placeholder="Isikan nama anda"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:
                <select name="kelas" id="kelas">
                    <option value="X">Kelas X</option>
                    <option value="XI">Kelas XI</option>
                    <option value="XII">Kelas XII</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <input type="radio" name="jurusan" id="rpl" value="RPL">Rekayasa Perangkat Lunak <br>
                <input type="radio" name="jurusan" id="tkj" value="TKJ">Teknik Komputer dan Jaringan <br>
                <input type="radio" name="jurusan" id="akl" value="AKL">Akuntansi dan Keuangan Lembaga <br>
                <input type="radio" name="jurusan" id="tkr" value="TKR">Teknik Kendaraan Ringan <br>
                <input type="radio" name="jurusan" id="tb" value="TB">Tata Busana
            </td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>: <input type="text" name="email" placeholder="alamat email anda"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <input type="text" name="alamat" placeholder="isikan alamat anda"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>

@endsection