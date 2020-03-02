@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="cool-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="lnr lnr-users"><B> EDIT DATA REKENING</B></i></h3>
                        </div>
                        <div class="panel-body">
                            <form action="/murid/{{$user->username}}/update" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputbank">PASSWORD BARU</label>
                                    <input name="password_baru" type="text" class="form-control" id="inputpassword_baru"
                                        placeholder="Masukkan password baru" value="{{$user->password}}">
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
