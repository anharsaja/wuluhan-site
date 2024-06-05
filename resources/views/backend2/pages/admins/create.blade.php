@extends('backend2.layouts.master')


@section('cucumber')
    <a href="{{route('admin.dashboard')}}">Dashboard</a>
    <h1>/</h1>
    <a href="{{route('admin.admins.index')}}">Admins</a>
    <h1>/</h1>
    <h1>
        Create Admins
    </h1>
@endsection


@section('content')
<div class="row">
    <!-- data table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Create New Role</h4>
                @include('backend.layouts.partials.messages')
                
                <form action="{{ route('admin.admins.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Nama Panggilan</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Admin Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="telepon">No. Telepon</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Telepon">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="experience">Pengalaman</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Pengalaman">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="password">Assign Roles</label>
                            <select name="roles[]" id="roles" class="form-control select2" multiple>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Admin</button>
                </form>
            </div>
        </div>
    </div>
    <!-- data table end -->
    
</div>
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection