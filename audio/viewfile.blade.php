@extends('layouts.master')

@section('content')

<div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading" style="text-align: center;">Data Audio</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>ID<span>{{$audio->id}}</span></li>
                                    <li><b>NAMA<span>{{$audio->nama}}</span></b></li>
                                    <li>KETERANGAN<span>{{$audio->keterangan}}</span></li>
                                    <li>ALAT MUSIK<span>{{$audio->alat_musik}}</span></li>
                                    <li>KATEGORI<span>{{$audio->kategori}}</span></li>
                                    <li>TINGKAT<span>{{$audio->tingkatan}}</span></li>
                                    <li>HAL./DUR.<span>{{$audio->halaman_durasi}}</span></li>
                                    <li>HARGA<span>@rupiah($audio->harga)</span></li>
                                    <li>STATUS<span><?php if($audio->status == 1){echo "<font color='red'>Berbayar</font>";} else {echo "<font color='blue'>Gratis</font>";} ?></span></li>
                                    </li>
                                </ul>
                                <div class="text-center"><a href="/audio/{{$audio->id}}/edit" class="btn btn-warning">Edit Data</a></div>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->

                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <center>
                        <video width="600" controls>
                            <source src="{{url('/dataaudio/'.$audio->file)}}" type="audio/mp3">
                            <source src="{{url('/dataaudio/'.$audio->file)}}" type="audio/ogg">
                            Your browser does not support the audio tag.
                        </video>
                        </center>
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>

        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>




@endsection
