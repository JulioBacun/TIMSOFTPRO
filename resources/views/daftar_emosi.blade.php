@extends('layouts.app')

@section('title', 'Daftar Emosi')

@section('content')

                <!-- Begin Page Content -->
                <div class="container">
            
                    <!-- create list of books -->
                    <div class="row">
                        <div class="col-12">
                            <h2>Daftar Emosi</h2>
                            <a class="btn btn-success justify-content-between" href="#">Tambah Data</a>
                        </div>
            
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>Pemrograman Web I</td>
                                            <td>Bachrul Uluum</td>
                                            <td>PT. Gramedia</td>
                                            <td>2024</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pemrograman Web I</td>
                                            <td>Bachrul Uluum</td>
                                            <td>PT. Gramedia</td>
                                            <td>2024</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pemrograman Web I</td>
                                            <td>Bachrul Uluum</td>
                                            <td>PT. Gramedia</td>
                                            <td>2024</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                            
                </div>

@endsection