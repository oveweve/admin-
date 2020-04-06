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
                                <h4 class="heading" style="text-align: center;">Data Video</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>ID<span>{{$video->id}}</span></li>
                                    <li><b>NAMA<span>{{$video->nama}}</span></b></li>
                                    <li>KETERANGAN<span>{{$video->keterangan}}</span></li>
                                    <li>ALAT MUSIK<span>{{$video->alat_musik}}</span></li>
                                    <li>KATEGORI<span>{{$video->kategori}}</span></li>
                                    <li>TINGKAT<span>{{$video->tingkatan}}</span></li>
                                    <li>HAL./DUR.<span>{{$video->halaman_durasi}}</span></li>
                                    <li>HARGA<span>@rupiah($video->harga)</span></li>
                                    <li>STATUS<span><?php if($video->status == 1){echo "<font color='red'>Berbayar</font>";} else {echo "<font color='blue'>Gratis</font>";} ?></span></li>
                                    </li>
                                </ul>
                                <div class="text-center"><a href="/video/{{$video->id}}/edit" class="btn btn-warning">Edit Data</a></div>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->

                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <center>
                        <video width="600" controls>
                            <source src="{{url('/datavideo/'.$video->file)}}" type="video/mp4">
                            <source src="{{url('/datavideo/'.$video->file)}}" type="video/ogg">
                            Your browser does not support the video tag.
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
