@extends('backend2.layouts.master')


@section('cucumber')
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <h1>/</h1>
    <h1>
        {{ $title }}
    </h1>
    @isset($categoryName)
        <h1>/</h1>
        <h1>{{ $categoryName }}</h1>
    @endisset
@endsection


@section('content')
    <div class="wrap">
        <section class="app-content" id="contact">
            <div class="row">
                <div class="col-md-2">
                    <div class="app-action-panel" id="contacts-action-panel">
                        <div class="action-panel-toggle" data-toggle="class" data-target="#contacts-action-panel"
                            data-class="open">
                            <i class="fa fa-chevron-right"></i>
                            <i class="fa fa-chevron-left"></i>
                        </div><!-- .action-panel-toggle -->
                            <div class="m-b-lg">
                                <a href="#" data-toggle="modal" data-target="#contactModal"
                                    class="btn btn-primary btn-block">New Contact</a>
                            </div>
                        <!-- contact category list -->
                        <div id="categories-list" class="app-actions-list scrollable-container">
                            <div class="list-group">
                                <a href="{{ route('admin.'.$name.'.index') }}" class="list-group-item">
                                    <i class="fa fa-inbox text-color m-r-xs"></i>
                                    <span>Semua Surat</span>
                                </a>
                            </div><!-- .list-group -->

                            <hr class="m-0 m-b-md" style="border-color: #ddd;">

                            <div class="list-group">
                                @foreach ($categories as $category)
                                    <div class="list-group-item">
                                        <div class="item-data" style="width: 100%;"
                                            onclick="window.location.href='{{ route('admin.'.$name.'.category', $category->id) }}'">
                                            <span class="label-text">{{ $category->name }}</span>
                                            {{-- <span class="pull-right hide-on-hover">7</span> --}}
                                        </div>
                                        @can('sekretariat.view')
                                            <div class="item-actions">
                                                <i class="item-action fa fa-edit" data-toggle="modal"
                                                    data-target="#editcategory{{ $category->id }}"></i>
                                                <i class="item-action fa fa-trash" data-toggle="modal"
                                                    data-target="#deletecategory{{ $category->id }}"></i>
                                            </div>
                                        @endcan
                                    </div><!-- .list-group-item -->

                                    <!-- edit  category Modal -->
                                    <div id="editcategory{{ $category->id }}" class="modal fade" tabindex="-1"
                                        role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title text-center" style="width: 100%">Edit Category
                                                    </h4>
                                                </div>
                                                <form action="{{ route('admin.'.$name.'.category.update', $category->id) }}"
                                                    id="newCategoryForm" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group m-0">
                                                            <input name="name" type="text" id="catLabel"
                                                                class="form-control" value="{{ $category->name }}"
                                                                required>
                                                        </div>
                                                    </div><!-- .modal-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div><!-- .modal-footer -->
                                                </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!-- delete item Modal -->
                                    <div id="deletecategory{{ $category->id }}" class="modal fade" tabindex="-1"
                                        role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title text-center" style="width: 100%">Delete item</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>hapus categori {{ $category->name }}</h5>
                                                </div><!-- .modal-body -->
                                                <div class="modal-footer">
                                                    <a href="{{ route('admin.'.$name.'.category.delete', $category->id) }}""
                                                        class="btn btn-danger">Hapus</a>
                                                </div><!-- .modal-footer -->
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                @endforeach
                                @can('sekretariat.view')
                                    <a href="#" class="list-group-item text-color" data-toggle="modal"
                                        data-target="#categoryModal"><i class="fa fa-plus m-r-sm"></i> Add NewCategory
                                    </a>
                                @endcan
                            </div>
                        </div><!-- #categories-list -->
                        <div class="m-h-md">
                        </div>
                    </div><!-- .app-action-panel -->
                </div><!-- END column -->

                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mail-toolbar m-b-lg">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.'.$name.'.index')}}" class="btn btn-default mr-3"><i class="fa fa-exclamation-circle"></i> All</a>
                                    <a href="{{ route('admin.'.$name.'.public')}}" class="btn btn-default mr-3"><i class="fa fa-exclamation-circle"></i> Public</a>
                                    <a href="{{ route('admin.'.$name.'.private') }}" class="btn btn-default"><i class="fa fa-exclamation-circle"></i> Private</a>
                                </div>
                            </div>
                        </div><!-- END column -->
                    </div><!-- .row -->

                    {{-- Content Surat --}}
                    <div id="contacts-list" class="row">
                        @foreach ($surats as $surat)
                            <div class="col-sm-6">
                                <div class="card user-card contact-item p-md">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar avatar-xl avatar-circle">
                                                <img src="{{ asset('img/icon/pdf.png') }}" alt="contact image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h5 class="media-heading title-color mr-2">{{ $surat->name }}</h5>
                                                <span class="badge @if($surat->status == 'public') badge-success @else badge-danger @endif">{{ $surat->status }}</span>
                                            </div>
                                            <small class="media-meta">{{ $surat->description }}</small>
                                        </div>
                                    </div>
                                    <div class="contact-item-actions">
                                        @can('sekretariat.view')
                                            <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal"
                                                data-target="#editsuratsotk{{ $surat->id }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deletesuratsotk{{ $surat->id }}"><i
                                                    class="fa fa-trash"></i></a>
                                        @endcan
                                        <a href="{{ asset($surat->path_file) }}" target="blank"
                                            class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                    </div><!-- .contact-item-actions -->
                                </div><!-- card user-card -->
                            </div><!-- END column -->

                            <!-- edit surat  Modal -->
                            <div id="editsuratsotk{{ $surat->id }}" class="modal fade" tabindex="-1"
                                role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" style="width: 100%">Edit Surat</h4>
                                        </div>
                                        <form action="{{ route('admin.'.$name.'.update', $surat->id) }}"
                                            id="newCategoryForm" method="post" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input name="name" type="text" id="name"
                                                        class="form-control" placeholder="Name"
                                                        value="{{ $surat->name }}">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="description" class="form-control" placeholder="Deskripsi Surat">{{ $surat->description }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <select name="category" class="form-control" required>
                                                        <option value="" selected disabled>Pilih Kategory</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                @selected($category->id == $surat->category_id)>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="status" class="form-control" required>
                                                        <option value="" selected disabled>Pilih Jenis Surat</option>
                                                        <option value="private" @selected($surat->status == 'private')>Private</option>
                                                        <option value="public" @selected($surat->status == 'public')>Public</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input name="file" type="file" class="form-control"
                                                        placeholder="File"><br>
                                                </div>
                                                <a href="{{ asset($surat->path_file) }}" target="blank" class="btn btn-warning" style="width: 30%"><i class="fa fa-eye"></i></a>
                                            </div><!-- .modal-body -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div><!-- .modal-footer -->
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            {{-- delete surat modal --}}
                            <div id="deletesuratsotk{{ $surat->id }}" class="modal fade" tabindex="-1"
                                role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" style="width: 100%">Delete Surat</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h5>hapus surat {{ $surat->name }}</h5>
                                        </div><!-- .modal-body -->
                                        <form class="modal-footer"
                                            action="{{ route('admin.'.$name.'.destroy', $surat->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Hapus</button>
                                        </form><!-- .modal-footer -->
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @endforeach

                    </div><!-- #contacts-list -->
                </div><!-- END column -->
            </div><!-- .row -->
        </section><!-- .app-content -->
    </div><!-- .wrap -->

    <!-- new contact Modal -->
    <div id="contactModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Surat</h4>
                </div>
                <form action="{{ route('admin.'.$name.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="name" type="text" id="contactName" class="form-control"
                                placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Deskripsi Surat"></textarea>
                        </div>
                        <div class="form-group">
                            <select name="category_id" class="form-control" required>
                                <option value="" selected disabled>Pilih Kategory</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="status" class="form-control" required>
                                <option value="" selected disabled>Pilih Jenis Surat</option>
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="file" type="file" class="form-control" placeholder="File">
                        </div>
                    </div><!-- .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div><!-- .modal-footer -->
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- new category Modal -->
    <div id="categoryModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" style="width: 100%;">Create Category</h4>
                </div>
                <form action="{{ route('admin.'.$name.'.category.store') }}" id="newCategoryForm" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group m-0">
                            <input name="name" type="text" id="catLabel" class="form-control"
                                placeholder="Category Name" required>
                        </div>
                    </div><!-- .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div><!-- .modal-footer -->
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end content -->
@endsection
