@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="cool-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="lnr lnr-home"><b> DASHBOARD</b></i></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAMA</th>
                                            <th>MEDIA</th>
                                            <th>ALAT MUSIK</th>
                                            <th>KATEGORI</th>
                                            <th>HARGA</th>
                                            <th>TINGKAT</th>
                                     
                                            <th>NAMA FILE</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('footer')
<script>

    $(document).ready(function(){

        $('#datatable').DataTable({
            processing:true,
            serverside:true,
            ajax:"{{route('ajax.get.data.dashboard')}}",
            columns:[
                {data:'id',name:'id'},
                {data:'nama',name:'nama'},
                {data:'keterangan',name:'keterangan'},
                {data:'alat_musik',name:'alat_musik'},
                {data:'kategori',name:'kategori'},
                {data:'harga',name:'harga'},
                {data:'tingkatan',name:'tingkatan'},
                {data:'file',name:'file'},
                
            ]
        });

    });

</script>


@endsection