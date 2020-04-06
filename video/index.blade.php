    @extends('layouts.master')

    @section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="cool-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="lnr lnr-camera-video"><b> DATA VIDEO</b></i></h3>
                                <br><i>Kotak pencarian untuk mencari nama video</i>
                                <div class="right">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal">
                                        <i class="lnr lnr-plus-circle" style="padding:5px;"></i>
                                        <b>TAMBAH VIDEO</b></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%">ID</th>
                                            <th width="12%">NAMA</th>
                                            <th width="15%">KETERANGAN</th>
                                            <th width="10%">ALAT MUSIK</th>
                                            <th width="10%">KATEGORI</th>
                                            <th width="10%">HARGA</th>
                                            <th width="5%">TINGKAT</th>
                                            <th width="6%">HAL./DUR.</th>
                                            <th width="5%">STATUS</th>
                                            <th width="10%">NAMA FILE</th>
                                            <th width="12%">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($data_video as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->nama}}</a></td>
                                            <td>{{$data->keterangan}}</a></td>
                                            <td>{{$data->alat_musik}}</td>
                                            <td>{{$data->kategori}}</td>
                                            <td>@rupiah($data->harga)</td>
                                            <td>{{$data->tingkatan}}</td>
                                            <th>{{$data->halaman_durasi}} Menit</th>
                                            <td><?php if($data->status == 1){echo "<font color='red'>Berbayar</font>";} else {echo "<font color='blue'>Gratis</font>";} ?>
                                            </td>
                                            <td><a href="video/{{$data->id}}/viewfile">{{$data->file}}</td>
                                            <td>
                                                <a href="/video/{{$data->id}}/edit"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm delete" video-id="{{$data->id}}">Delete</a>
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
                    <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-camera-video"><b> VIDEO</b></i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="/video/create" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group{{$errors->has('media') ? ' has-error': ''}}">
                            <input name="media" type="hidden" class="form-control" id="inputmedia" value="video"
                                readonly>
                            @if($errors->has('media'))
                            <span class="help-block">{{$errors->first('media')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('nama') ? ' has-error': ''}}">
                            <label for="inputnama">NAMA</label>
                            <input name="nama" type="text" class="form-control" id="inputnama1"
                                placeholder="Masukkan nama video" value="{{old('nama')}}">
                            @if($errors->has('nama'))
                            <span class="help-block">{{$errors->first('nama')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('halaman_durasi') ? ' has-error': ''}}">
                            <label for="inputhalaman_durasi">DURASI (Menit)</label>
                            <input name="halaman_durasi" type="text" class="form-control" id="inputhalaman_durasi"
                                placeholder="Masukkan durasi" value="{{old('halaman_durasi')}}">
                            @if($errors->has('halaman_durasi'))
                            <span class="help-block">{{$errors->first('halaman_durasi')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('keterangan') ? ' has-error': ''}}">
                            <label for="inputketerangan">KETERANGAN</label>
                            <input name="keterangan" type="text" class="form-control" id="inputketerangan"
                                placeholder="Masukkan keterangan" value="{{old('keterangan')}}">
                            @if($errors->has('keterangan'))
                            <span class="help-block">{{$errors->first('keterangan')}}</span>
                            @endif
                        </div>
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="form-group{{$errors->has('alat_musik') ? ' has-error': ''}}">
                                        <label for="inputalatmusik">ALAT MUSIK</label><br>
                                        <select name="alat_musik" id="alat_musik" class="selectpicker"
                                            data-style="select-with-transition" style="width: 250px;">
                                            @foreach ($alat_array as $data)
                                            <option value="{{ $data->alat_musik }}"> {{$data->alat_musik}}</option>
                                            @endforeach
                                        </select>
                                </td>
                                <td>
                </div>
                <div class="form-group{{$errors->has('kategori') ? ' has-error': ''}}">
                    <label for="inputkategori">KATEGORI</label><br>
                    <select name="kategori" id="kategori" class="selectpicker" data-style="select-with-transition"
                        style="width: 250px;">
                        @foreach ($kategori_array as $data)
                        <option value="{{ $data->kategori }}"> {{$data->kategori}}</option>
                        @endforeach
                    </select>
                </div>
                </td>
                </tr>
                </table>
                <div class="form-group{{$errors->has('tingkatan') ? ' has-error': ''}}">
                    <label for="inputtingkatan">TINGKATAN</label>
                    <select name="tingkatan" class="form-control" id="inputtingkatan">
                        <option value="" {{(old('tingkatan') == '') ? ' selected' : ''}}>Pilih Jenis Tingkatan</option>
                        <option value="1" {{(old('tingkatan') == '1') ? ' selected' : ''}}>1</option>
                        <option value="2" {{(old('tingkatan') == '2') ? ' selected' : ''}}>2</option>
                        <option value="3" {{(old('tingkatan') == '3') ? ' selected' : ''}}>3</option>
                        <option value="4" {{(old('tingkatan') == '4') ? ' selected' : ''}}>4</option>
                        <option value="5" {{(old('tingkatan') == '5') ? ' selected' : ''}}>5</option>
                        <option value="6" {{(old('tingkatan') == '6') ? ' selected' : ''}}>6</option>
                        <option value="7" {{(old('tingkatan') == '7') ? ' selected' : ''}}>7</option>
                    </select>
                    @if($errors->has('tingkatan'))
                    <span class="help-block">{{$errors->first('tingkatan')}}</span>
                    @endif
                </div>
                <!-- BERBAYAR atau GRATIS -->
                <label for="inputstatus">STATUS</label>
                <div class="form-group{{$errors->has('harga') ? ' has-error': ''}}">
                    <input type="radio" name="status" id="0" value="0"> Gratis<br>
                    <input type="radio" name="status" id="1" value="1"> Berbayar
                </div>
                <div class="form-group{{$errors->has('harga') ? ' has-error': ''}}">
                    <label for="inputharga">HARGA</label> <i>*kosongkan jika gratis*</i>
                    <input name="harga" type="text" class="form-control" id="inputharga" placeholder="Masukkan harga">
                    @if($errors->has('harga'))
                    <span class="help-block">{{$errors->first('harga')}}</span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('file') ? ' has-error': ''}}">
                    <label for="inputvideo">FILE VIDEO</label>
                    <input name="file" type="file" class="form-control" value="{{old('file')}}">
                    @if($errors->has('file'))
                    <span class="help-block">{{$errors->first('file')}}</span>
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
    <script>
        $('.delete').click(function () {

            var video_id = $(this).attr('video-id');
            swal({
                    title: "Yakin?",
                    text: "mau dihapus data siswa dengan id " + video_id + " ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    console.log("willDelete")
                    if (willDelete) {
                        window.location = "/video/" + video_id + "/delete";
                    }
                });
        });

    </script>
    @endsection
