@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-briefcase"><b> DATA PEMBELIAN</b></i></h3><br>
                            <i>Kotak pencarian untuk mencari username</i>
                            <div class="right">
                            <button type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="lnr lnr-plus-circle" style="padding:5px;"></i>
                          <b>TAMBAH DATA PEMBELIAN</b></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>USERNAME</th>
                                        <th>ID DATA</th>
                                        <th>MEDIA</th>
                                        <th>NAMA DATA</th>
                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data_pembelian as $data)
                                    <tr>
                                        <td>{{$data->id}}</a></td>
                                        <td>{{$data->username}}</a></td>
                                        <td>{{$data->id_data}}</td>
                                        <td>{{$data->media}}</td>
                                        <td>{{$data->nama}}</td>                                      
                                        <td>
                                            <a href="/rekening/{{$data->id}}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus?')">Delete</a>
                                        </td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-briefcase"><b> PEMBELIAN BARU</b></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/pembelian/create" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('nama_bank') ? ' has-error': ''}}">
                        <label for="inputusername">USERNAME</label>
                        <input name="username" type="text" class="form-control" id="inputusername"
                            placeholder="Masukkan username" value="{{old('username')}}">
                        @if($errors->has('username'))
                        <span class="help-block">{{$errors->first('username')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('nama_pemilik') ? ' has-error': ''}}">
                        <label for="inputid_data">ID DATA</label>
                        <input name="id_data" type="text" class="form-control" id="inputpemilik"
                            placeholder="Masukkan id data" value="{{old('id_data')}}">
                        @if($errors->has('id_data'))
                        <span class="help-block">{{$errors->first('id_data')}}</span>
                        @endif
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection