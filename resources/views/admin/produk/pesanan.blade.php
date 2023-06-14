@extends('admin.layout.appadmin')
@section('content')

<h1>ini Hindun</h1>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Pemesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>tanggal</th>
                                            <th>Nama_pesanan</th>
                                            <th>Alamat_pesanan</th>
                                            <th>No_Hp</th>
                                            <th>Email</th>
                                            <th>Jumlah_pesanan</th>
                                            <th>Deskripsi</th>
                                            <th>Produk_id</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>tanggal</th>
                                            <th>Nama_pesanan</th>
                                            <th>Alamat_pesanan</th>
                                            <th>No_Hp</th>
                                            <th>Email</th>
                                            <th>Jumlah_pesanan</th>
                                            <th>Deskripsi</th>
                                            <th>Produk_id</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($pesanan as $ps)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <td>{{$ps->tanggal}}</td>
                                            <td>{{$ps->Nama_pesanan}}</td>
                                            <td>{{$ps->Alamat_psanan}}</td>
                                            <td>{{$ps->No_Hp}}</td>
                                            <td>{{$ps->Email}}</td>
                                            <td>{{$ps->Jumlah_pesanan}}</td>
                                            <td>{{$ps->Deskripsi}}</td>
                                            <td>{{$ps->Produk_id}}</td>
                                        </tr>
                                        @php $no++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection