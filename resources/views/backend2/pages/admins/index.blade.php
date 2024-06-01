@extends('backend2.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
@endsection

@section('cucumber')
    <a href="{{route('admin.dashboard')}}">Dashboard</a>
    <h1>/</h1>
    <a href="{{route('admin.admins.index')}}">Admins</a>
@endsection

@section('content')
<div class="row">
    <!-- data table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title float-left">Admins List</h4>
                <p class="float-right mb-2">
                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                    <a class="btn btn-primary text-white" href="{{ route('admin.admins.create') }}">Create New Admin</a>
                    @endif
                </p>
                <div class="clearfix"></div>
                <div class="data-tables">
                    @include('backend.layouts.partials.messages')
                    <table id="dataTable" class="text-center table-striped">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="10%">Name</th>
                                <th width="10%">Email</th>
                                <th width="40%">Roles</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    @foreach ($admin->roles as $role)
                                    <span class="badge badge-info mr-1">
                                        {{ $role->name }}
                                    </span>
                                    @endforeach
                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                                    <a class="btn btn-warning text-white" href="{{ route('admin.admins.edit', $admin->id) }}">Edit</a>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('admin.delete'))
                                    {{-- <a class="btn btn-danger text-white" href="{{ route('admin.admins.destroy', $admin->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form> --}}
                                    <a href="javascript:void(0)" class="btn btn-danger text-white" data-toggle="modal" data-target="#deleteadmin{{ $admin->id }}">Delete</a>
                                    @endif
                                </td>
                            </tr>

                            <div id="deleteadmin{{ $admin->id }}" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" style="width: 100%">Delete Admin</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h5>hapus admin {{ $admin->name }}</h5>
                                        </div><!-- .modal-body -->
                                        <form class="modal-footer" action="{{ route('admin.admins.destroy', $admin->id) }}" method="post">
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
    <!-- data table end -->

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