@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-music-note"><B> BUKTI TRANSFER</B></i></h3>
                        </div>
                        <div class="panel-body">
                                <form action="/bukti_transfer/{{$bukti_transfer->id}}/update" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputusername">USERNAME</label>
                                    <input name="username" type="text" class="form-control" id="inputusername"
                                        placeholder="Masukkan durasi" value="{{$bukti_transfer->username}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputnama_bank">NAMA BANK</label>
                                    <input name="nama_bank" type="text" class="form-control" id="inputnama_bank"
                                        placeholder="Masukkan durasi" value="{{$bukti_transfer->nama_bank}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputnama_pemilik">NAMA PEMILIK</label>
                                    <input name="nama_pemilik" type="text" class="form-control" id="inputnama_pemilik"
                                        placeholder="Masukkan durasi" value="{{$bukti_transfer->nama_pemilik}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputnomor_rekening">NOMOR REKENING</label>
                                    <input name="nomor_rekening" type="text" class="form-control" id="inputnomor_rekening"
                                        placeholder="Masukkan durasi" value="{{$bukti_transfer->nomor_rekening}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputnominal">NOMINAL</label>
                                    <input name="nominal" type="text" class="form-control" id="inputnominal"
                                        placeholder="Masukkan durasi" value="{{$bukti_transfer->nominal}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputjudul">JUDUL</label>
                                    <input name="judul" type="text" class="form-control" id="inputjudul"
                                        placeholder="Masukkan durasi" value="{{$bukti_transfer->judul}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="inputketerangan">KETERANGAN</label>
                                    <input name="keterangan" type="text" class="form-control" id="inputketerangan"
                                    placeholder="Masukkan keterangan" value="{{$bukti_transfer->keterangan}}">
                                </div>
                                <!-- BERBAYAR atau GRATIS -->
                                <label for="inputstatus">STATUS</label>
                                <div class="form-group{{$errors->has('status') ? ' has-error': ''}}">
                                    <input type="radio" name="status" id="1" value="1" <?php if($bukti_transfer->status==1) {echo 'checked="checked"';} ?>> Diterima
                                    <input type="radio" name="status" id="-1" value="-1" <?php if($bukti_transfer->status==-1) {echo 'checked="checked"';} ?>> Ditolak
                                </div>
                                <div class="form-group">
                                    <label for="inputaudio">FOTO BUKTI</label>
                                    <input name="audio" type="file" class="form-control" value="{{$bukti_transfer->file}}">
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
