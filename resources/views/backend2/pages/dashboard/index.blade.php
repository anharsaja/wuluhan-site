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
            <h4>ADMIN</h4>
            <div class="row">
                <div class="col-md-4 md-5">
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
                <div class="col-md-4 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_roles }}</h1>
                                <p>Total Jabatan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h4>Sekretariat</h4>
            <div class="row">
                <div class="col-md-4 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_dokumen_sekretariat }}</h1>
                                <p>Total Dokumen Sekretariat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_plk }}</h1>
                                <p>Total Surat PLK</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_umpeg }}</h1>
                                <p>Total Surat UMPEG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h4>PELUM</h4>
            <div class="row">
                <div class="col-md-4 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_dokumen_pelum }}</h1>
                                <p>Total Dokumen Pelum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_adminduk }}</h1>
                                <p>Total Surat Adminduk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h4>PEMERINTAHAN</h4>
            <div class="row">
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_dokumen_pemerintahan }}</h1>
                                <p>Total Dokumen Pemerintahan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_desa }}</h1>
                                <p>Total Surat Desa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_produkhukum }}</h1>
                                <p>Total Surat Produk Hukum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_rapbdes }}</h1>
                                <p>Total Surat RAPBDES</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h4>PMKS</h4>
            <div class="row">
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_dokumen_pmks }}</h1>
                                <p>Total Dokumen PMKS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_agama }}</h1>
                                <p>Total Surat Agama</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_budaya }}</h1>
                                <p>Total Surat Produk Budaya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_kencana }}</h1>
                                <p>Total Surat Kencana</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_osjj }}</h1>
                                <p>Total Surat OSJJ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_pkk }}</h1>
                                <p>Total Surat PKK</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 md-5">
                    <div class="analytics">
                        <div class="card">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="text">
                                <h1>{{ $total_surat_wisata }}</h1>
                                <p>Total Surat Wisata</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection