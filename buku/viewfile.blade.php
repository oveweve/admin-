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
                                <h4 class="heading" style="text-align: center;">Data Buku</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>ID<span>{{$buku->id}}</span></li>
                                    <li><b>NAMA<span>{{$buku->nama}}</span></b></li>
                                    <li>KETERANGAN<span>{{$buku->keterangan}}</span></li>
                                    <li>ALAT MUSIK<span>{{$buku->alat_musik}}</span></li>
                                    <li>KATEGORI<span>{{$buku->kategori}}</span></li>
                                    <li>TINGKAT<span>{{$buku->tingkatan}}</span></li>
                                    <li>HAL./DUR.<span>{{$buku->halaman_durasi}}</span></li>
                                    <li>HARGA<span>@rupiah($buku->harga)</span></li>
                                    <li>STATUS<span><?php if($buku->status == 1){echo "<font color='red'>Berbayar</font>";} else {echo "<font color='blue'>Gratis</font>";} ?></span></li>
                                    </li>
                                </ul>
                                <div class="text-center"><a href="/buku/{{$buku->id}}/edit" class="btn btn-warning">Edit Data</a></div>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->

                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <center>
                            <buku width="600" controls>
                                <!-- <embed src= "'/databuku/'.$buku->file" width= "500" height= "375"> -->
                                <iframe src="/databuku/{{$buku->file}}" width="100%" height="700px">
                                {{$buku->file}}
                                </iframe>
                            </buku>
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
