@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-camera-video"><B> EDIT DATA VIDEO</B></i></h3>
                        </div>
                        <div class="panel-body">
                            <form action="/video/{{$video->id}}/update" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputnama">NAMA</label>
                                    <input name="nama" type="text" class="form-control" id="inputnama"
                                        placeholder="Masukkan nama" value="{{$video->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputhalaman_durasi">DURASI (Menit)</label>
                                    <input name="halaman_durasi" type="text" class="form-control" id="inputhalaman_durasi"
                                        placeholder="Masukkan durasi" value="{{$video->halaman_durasi}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputketerangan">KETERANGAN</label>
                                    <input name="keterangan" type="text" class="form-control" id="inputketerangan"
                                        placeholder="Masukkan keterangan" value="{{$video->keterangan}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputalatmusik">ALAT MUSIK</label><br>
                                    <select name="alat_musik" id="alat_musik" class="selectpicker form-control" data-style="select-with-transition" style="width: 100;" >
                                    <option value="{{ $video->alat_musik }}"> {{$video->alat_musik}}</option>
                                    @foreach ($alat_array as $data)
                                    <option value="{{ $data->alat_musik }}"> {{$data->alat_musik}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputkategori">KATEGORI</label><br>
                                    <select name="kategori" id="kategori" class="selectpicker form-control" data-style="select-with-transition" style="width: 100;" >
                                        <option value="{{ $video->kategori }}"> {{$video->kategori}}</option>
                                        @foreach ($kategori_array as $data)
                                        <option value="{{ $data->kategori }}"> {{$data->kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputtingkatan">TINGKATAN</label>
                                    <select name="tingkatan" class="form-control" id="inputtingkatan" >
                                        <option value="{{$video->tingkatan}}">{{$video->tingkatan}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                                <!-- BERBAYAR atau GRATIS -->
                                <label for="inputstatus">STATUS</label>
                                <div class="form-group{{$errors->has('harga') ? ' has-error': ''}}">
                                    <input type="radio" name="status" id="0" value="0" <?php if($video->status==0) {echo 'checked="checked"';} ?>> Gratis <br>
                                    <input type="radio" name="status" id="1" value="1" <?php if($video->status==1) {echo 'checked="checked"';} ?>> Berbayar
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputharga">HARGA</label>
                                    <input name="harga" type="text" class="form-control" id="inputnama1"
                                        placeholder="Masukkan harga" value="{{$video->harga}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputvideo">FILE VIDEO</label>
                                    <input name="filevideo" type="file" class="form-control" value="{{$video->filevideo}}">
                                    <i>*Kosongkan jika tidak diubah*</i>
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
