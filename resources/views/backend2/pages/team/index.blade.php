@extends('backend2.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
@endsection

@section('cucumber')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <h1>/</h1>
    <h1>
        {{ $title }}
    </h1>
@endsection


@section('content')


<div class="row">
    <!-- data table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title float-left">Team Manage</h4>
                <p class="float-right mb-2">
                    @if (Auth::guard('admin')->user()->can('admin.view'))
                        <a class="btn btn-primary text-white" href="{{ route('admin.roles.create') }}">Tambah Anggota</a>
                    @endif
                </p>
                <div class="clearfix"></div>
                <div class="data-tables">
                    @include('backend.layouts.partials.messages')
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">Name</th>
                                <th width="10%">posisi</th>
                                <th width="350%">deskirpsi</th>
                                <th width="10%">telepon</th>
                                <th width="15%">email</th>
                                <th width="15%">experience</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $team->name }}</td>
                                <td>
                                    @foreach ($team->permissions as $perm)
                                        <span class="badge badge-info mr-1">
                                            {{ $perm->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                                        <a class="btn btn-warning text-white" href="{{ route('admin.roles.edit', $team->id) }}">Edit</a>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteroles{{ $team->id }}" class="btn btn-danger text-white">Delete</a>
                                    @endif
                                </td>
                            </tr>

                            <div id="deleteroles{{ $team->id }}" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" style="width: 100%">Delete Role</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h5>hapus role {{ $team->name }}</h5>
                                        </div><!-- .modal-body -->
                                        <form class="modal-footer" action="{{ route('admin.roles.destroy', $team->id) }}" method="post">
                                            @method("delete")
                                            @csrf
                                            <button class="btn btn-danger w-50 m-3">Hapus</button>
                                        </form><!-- .modal-footer -->
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal --> 

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('scripts')

<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>

<script>
    if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: true
        });
    }
</script>
@endsection