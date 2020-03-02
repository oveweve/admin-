@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-camera-video"><B> EDIT DATA REKENING</B></i></h3>
                        </div>
                        <div class="panel-body">
                            <form action="/rekening/{{$rekening->id}}/update" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputbank">NAMA BANK</label>
                                    <input name="nama_bank" type="text" class="form-control" id="inputbank"
                                        placeholder="Masukkan nama bank" value="{{$rekening->nama_bank}}">
                                </div>
                                <div class="form-group">
                                    <label for="inpunamapemilik">NAMA PEMILIK</label>
                                    <input name="nama_pemilik" type="text" class="form-control" id="inputnamapemilik"
                                        placeholder="Masukkan nama pemilik" value="{{$rekening->nama_pemilik}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputrekening">NOMOR REKENING</label>
                                    <input name="nomor_rekening" type="text" class="form-control" id="inputrekening"
                                        placeholder="Masukkan nomor rekening" value="{{$rekening->nomor_rekening}}">
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@stop
