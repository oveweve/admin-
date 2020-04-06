@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-users"><b> DATA TRANSFER</b></i></h3>
                            <br><i>Kotak pencarian untuk mencari username</i>
                            <div class="right">
                                <button type="button" data-toggle="modal" data-target="#exampleModal">
                                <i class="lnr lnr-plus-circle" style="padding:5px;"></i>
                              <b>TAMBAH DATA</b></button>
                                </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Nama Bank</th>
                                        <th>Nama Pemilik</th>
                                        <th>No Rekening</th>
                                        <th>Nominal</th>
                                        <th>File yang ingin dibeli</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data_transfer as $data)
                                    <tr>
                                        <td>{{$data->username}}</td>
                                        <td>{{$data->nama_bank}}</td>
                                        <td>{{$data->nama_pemilik}}</td>
                                        <td>{{$data->nomor_rekening}}</td>
                                        <td>{{$data->nominal}}</td>
                                        <td>{{$data->judul}}</td>
                                        <td><a href="{{url('/datatransfer/'.$data->file)}}"><img src="{{url('/datatransfer/'.$data->file)}}" width="50"></a></td>
                                        <td><?php if($data->status == 1){echo "<font color='blue'>Diterima</font>";}
                                                  else if($data->status == -1) {echo "<font color='red'>Ditolak</font>";} 
                                                  else  {echo "Menunggu Konfirmasi";}  ?></td>
                                        <td>{{$data->keterangan}}</td>
                                        <td>
                                                <a href="/bukti_transfer/{{$data->id}}/edit"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/bukti_transfer/{{$data->id}}/delete" class="btn btn-danger btn-sm"
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
                    <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-camera-video"><b> TRANSFER</b></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/bukti_transfer/create" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group{{$errors->has('username') ? ' has-error': ''}}">
                            <label for="inputusername">USERNAME</label>
                            <input name="username" type="text" class="form-control" id="inputnama1"
                                placeholder="Masukkan Usename" value="{{old('username')}}">
                            @if($errors->has('username'))
                            <span class="help-block">{{$errors->first('username')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('nama_bank') ? ' has-error': ''}}">
                        <label for="inputnamabank">NAMA BANK</label>
                        <input name="nama_bank" type="text" class="form-control" id="inputnamabank"
                            placeholder="Masukkan Nama Bank" value="{{old('nama_bank')}}">
                        @if($errors->has('nama_bank'))
                        <span class="help-block">{{$errors->first('nama_bank')}}</span>
                        @endif
                    </div>
                        <div class="form-group{{$errors->has('nama_pemilik') ? ' has-error': ''}}">
                            <label for="inputnamapemililk">NAMA PEMILIK</label>
                            <input name="nama_pemilik" type="text" class="form-control" id="inputnamapemilik"
                                placeholder="Masukkan Nama Pemilik" value="{{old('nama_pemilik')}}">
                            @if($errors->has('nama_pemilik'))
                            <span class="help-block">{{$errors->first('nama_pemilik')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('nomor_rekening') ? ' has-error': ''}}">
                            <label for="inputnomorrekening">NOMOR REKENING</label>
                            <input name="nomor_rekening" type="text" class="form-control" id="inputnomorrekening"
                                placeholder="Masukkan Nomor Rekening" value="{{old('nomor_rekening')}}">
                            @if($errors->has('nomor_rekening'))
                            <span class="help-block">{{$errors->first('nomor_rekening')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('nominal') ? ' has-error': ''}}">
                            <label for="inputnamapemililk">NOMINAL</label>
                            <input name="nominal" type="text" class="form-control" id="inputnamapemilik"
                                placeholder="Masukkan nominal" value="{{old('nominal')}}">
                            @if($errors->has('nominal'))
                            <span class="help-block">{{$errors->first('nominal')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('judul') ? ' has-error': ''}}">
                            <label for="inputjudul">File yang ingin dibeli(Format:media-judul)</label>
                            <input name="judul" type="text" class="form-control" id="inputjudul"
                                placeholder="media-judul" value="{{old('judul')}}">
                            @if($errors->has('judul'))
                            <span class="help-block">{{$errors->first('judul')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('file') ? ' has-error': ''}}">
                            <label for="inputbuktitransfer">FILE TRANSFER</label>
                            <input name="file" type="file" class="form-control" value="{{old('file')}}">
                            @if($errors->has('file'))
                            <span class="help-block">{{$errors->first('file')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('status') ? ' has-error': ''}}">
                            <label for="inputtingkatan">STATUS</label>
                            <select name="status" class="form-control" id="inputtingkatan">
                                <option value=""{{(old('tingkatan') == '') ? ' selected' : ''}}>Pilih Status</option>
                                <option value="1"{{(old('tingkatan') == '1') ? ' selected' : ''}}>Diterima</option>
                                <option value="-1"{{(old('tingkatan') == '-1') ? ' selected' : ''}}>Ditolak</option>
                                <option value="0"{{(old('tingkatan') == '0') ? ' selected' : ''}}>Menunggu konfirmasi</option>
                            </select>
                            @if($errors->has('status'))
                            <span class="help-block">{{$errors->first('status')}}</span>
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

