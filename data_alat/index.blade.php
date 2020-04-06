@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-database"><b> DATA ALAT MUSIK</b></i></h3>
                            <div class="right">
                            <button type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="lnr lnr-plus-circle" style="padding:5px;"></i>
                          <b>TAMBAH ALAT MUSIK</b></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ALAT MUSIK</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data_alat as $data)
                                    <tr>
                                        <td>{{$data->alat_musik}}</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-sm delete" buku-id="{{$data->id}}">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-database"><b> ALAT MUSIK</b></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- INPUT DATA -->
            <div class="modal-body">
                <form action="/data_alat/create" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('alat_musik') ? ' has-error': ''}}">
                        <label for="inputnama">NAMA ALAT MUSIK</label>
                        <input name="alat_musik" type="text" class="form-control" id="inputalat_musik"
                            placeholder="Masukkan nama alat musik" value="{{old('alat_musik')}}">
                        @if($errors->has('alat_musik'))
                        <span class="help-block">{{$errors->first('alat_musik')}}</span>
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