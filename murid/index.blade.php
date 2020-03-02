@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-users"><b> DATA PENGGUNA</b></i></h3>
                            <br><i>Kotak pencarian untuk mencari username</i>
                            <div class="right">
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>No. Telp</th>
                                        <!-- <th width="10%">Aksi</th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data_murid as $data)
                                    <tr>
                                        <td>{{$data->username}}</td>
                                        <td>{{$data->nama}}</a></td>
                                        <td><?php if($data->jenis_kelamin == "L"){echo "Laki-laki";} else {echo "Perempuan";} ?></td>
                                        <td>{{$data->alamat}}</a></td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->no_telp}}</td>
                                        <!-- <td>
                                            <a href="/murid/{{$data->username}}/edit"
                                                    class="btn btn-danger btn-sm">Reset Password</a>
                                        </td> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection