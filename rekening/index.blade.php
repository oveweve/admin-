@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-briefcase"><b> REKENING SEKOLAH MUSIK INDONESIA</b></i></h3>
                            <br><i>Kotak pencarian untuk mencari nama pemilik bank</i>
                            <div class="right">
                            <button type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="lnr lnr-plus-circle" style="padding:5px;"></i>
                          <b>TAMBAH REKENING</b></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA BANK</th>
                                        <th>NAMA PEMILIK</th>
                                        <th>NOMOR REKENING</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data_rekening as $data)
                                    <tr>
                                        <td>{{$data->nama_bank}}</a></td>
                                        <td>{{$data->nama_pemilik}}</a></td>
                                        <td>{{$data->nomor_rekening}}</td>
                                        <td>
                                            <a href="/rekening/{{$data->id}}/edit"
                                                class="btn btn-warning btn-sm">Edit</a>
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
                <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-briefcase"><b> REKENING</b></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/rekening/create" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('nama_bank') ? ' has-error': ''}}">
                        <label for="nama_bank">NAMA BANK</label>
                        <input name="nama_bank" type="text" class="form-control" id="inputbank"
                            placeholder="Masukkan nama bank" value="{{old('nama_bank')}}">
                        @if($errors->has('nama_bank'))
                        <span class="help-block">{{$errors->first('nama_bank')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('nama_pemilik') ? ' has-error': ''}}">
                        <label for="inputnama">PEMILIK REKENING</label>
                        <input name="nama_pemilik" type="text" class="form-control" id="inputpemilik"
                            placeholder="Masukkan nama pemilik" value="{{old('nama_pemilik')}}">
                        @if($errors->has('nama_pemilik'))
                        <span class="help-block">{{$errors->first('nama_pemilik')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('nomor_rekening') ? ' has-error': ''}}">
                        <label for="inputnama">NOMOR REKENING</label>
                        <input name="nomor_rekening" type="text" class="form-control" id="inputrekening"
                            placeholder="Masukkan nomor rekening" value="{{old('nomor_rekening')}}">
                        @if($errors->has('nomor_rekening'))
                        <span class="help-block">{{$errors->first('nomor_rekening')}}</span>
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