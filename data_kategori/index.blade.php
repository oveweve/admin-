@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-database"><b> DATA KATEGORI</b></i></h3>
                            <div class="right">
                            <button type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="lnr lnr-plus-circle" style="padding:5px;"></i>
                          <b>TAMBAH KATEGORI</b></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>KATEGORI</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data_kategori as $data)
                                    <tr>
                                        <td>{{$data->kategori}}</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-sm delete" buku-id="{{$data->kategori}}">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-database"><b> KATEGORI</b></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- INPUT DATA -->
            <div class="modal-body">
                <form action="/data_kategori/create" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('kategori') ? ' has-error': ''}}">
                        <label for="inputnamakategori">NAMA KATEGORI</label>
                        <input name="kategori" type="text" class="form-control" id="inputkategori"
                            placeholder="Masukkan nama kategori" value="{{old('kategori')}}">
                        @if($errors->has('kategori'))
                        <span class="help-block">{{$errors->first('kategori')}}</span>
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

@section('footer')
@stop