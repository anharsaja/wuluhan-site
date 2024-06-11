@extends('backend2.layouts.master')


@section('cucumber')
    <h1>
        Dashboard /
    </h1>
@endsection



@section('content')

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4 mt-md-5 mb-3">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_admins }}</h1>
                                <p>Total Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-5 mb-3">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_admins }}</h1>
                                <p>Total Jabatan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection