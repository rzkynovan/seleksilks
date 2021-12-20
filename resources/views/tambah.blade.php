<x-app-layout>
    @include('script.scriptindex')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-8">
        <h1 class="title">Tambah Data Siswa</h1>
        <form action="{{ route('simpan') }}" method="post">
            {{ csrf_field() }}
            <ul class="list-unstyled">
                <li>
                    <label for="nama_siswa">Nama :</label>
                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control mb-2">
                </li>
                <li>
                    <label for="email_siswa">Email :</label>
                    <input type="email" name="email_siswa" id="email_siswa" class="form-control mb-2">
                </li>
                <li>
                    <label for="alamat_siswa">Alamat :</label>
                    <input type="text" name="alamat_siswa" id="alamat_siswa" class="form-control mb-2">
                </li>
                <li>
                    <label for="notlp_siswa">No Telp :</label>
                    <input type="number" name="notlp_siswa" id="notlp_siswa" class="form-control mb-2">
                </li>
                <li>
                    <label for="kelas_siswa">Kelas :</label>
                    <input type="text" name="kelas_siswa" id="kelas_siswa" class="form-control mb-2">
                </li>
                <li>
                    <button type="submit" class="button btn-dark px-4 py-2 mt-4 rounded">Tambah!</button>
                </li>
            </ul>
        </form>
    </div>
</x-app-layout>