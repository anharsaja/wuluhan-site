@extends('backend2.layouts.master')


@section('content')
<div class="wrap">
    <section class="app-content" id="contact">
        <div class="row">
            <div class="col-md-2">
                <div class="app-action-panel" id="contacts-action-panel">
                    <div class="action-panel-toggle" data-toggle="class"
                        data-target="#contacts-action-panel" data-class="open">
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
                            <a href="#" class="list-group-item">
                                <i class="fa fa-inbox text-color m-r-xs"></i>
                                <span>All Contacts</span>
                            </a>
                        </div><!-- .list-group -->

                        <hr class="m-0 m-b-md" style="border-color: #ddd;">

                        <div class="list-group">
                            @foreach ($categories as $category)
                            <a href="#" class="list-group-item">
                                <div class="item-data">
                                    <span class="label-text">{{ $category->name }}</span>
                                    {{-- <span class="pull-right hide-on-hover">7</span> --}}
                                </div>
                                <div class="item-actions">
                                    <i class="item-action fa fa-edit" data-toggle="modal"
                                        data-target="#editcategory{{ $category->id }}"></i>
                                    <i class="item-action fa fa-trash" data-toggle="modal"
                                        data-target="#deletecategory{{ $category->id }}"></i>
                                </div>
                            </a><!-- .list-group-item -->









                            <!-- edit  category Modal -->
                            <div id="editcategory{{ $category->id }}" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" style="width: 100%">Edit Category</h4>
                                        </div>
                                        <form action="{{ route('admin.umkm.category.update', $category->id) }}" id="newCategoryForm" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group m-0">
                                                    <input name="name" type="text" id="catLabel" class="form-control" value="{{ $category->name }}" required>
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







                            <!-- delete item Modal -->
                            <div id="deletecategory{{ $category->id }}" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" style="width: 100%">Delete item</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h5>hapus categori {{ $category->name }}</h5>
                                        </div><!-- .modal-body -->
                                        <div class="modal-footer">
                                            <a href="{{ route('admin.umkm.category.delete', $category->id) }}"" class="btn btn-danger">Hapus</a>
                                        </div><!-- .modal-footer -->
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal --> 
                                
                            @endforeach
                            <a href="#" class="list-group-item text-color" data-toggle="modal"
                                data-target="#categoryModal"><i class="fa fa-plus m-r-sm"></i> Add New
                                Category</a>
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
                                <a href="#" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-default"><i
                                        class="fa fa-exclamation-circle"></i></a>
                            </div>

                            <div class="btn-group pull-right" role="group">
                                <a href="#" class="btn btn-default"><i
                                        class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-default"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- END column -->
                </div><!-- .row -->

                <div id="contacts-list" class="row">
                    <div class="col-sm-6">
                        <div class="card user-card contact-item p-md">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xl avatar-circle">
                                        <img src="img/101.jpg" alt="contact image">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading title-color">John Doe</h5>
                                    <small class="media-meta">Web Developer</small>
                                </div>
                            </div>
                            <div class="contact-item-actions">
                                <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal"
                                    data-target="#contactModal"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteItemModal"><i class="fa fa-trash"></i></a>
                            </div><!-- .contact-item-actions -->
                        </div><!-- card user-card -->
                    </div><!-- END column -->


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
                <h4 class="modal-title">Create / update contact</h4>
            </div>
            <form action="#" id="newContactForm">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" id="contactName" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" id="contactImgUrl" class="form-control"
                            placeholder="Image URL">
                    </div>
                    <div class="form-group">
                        <input type="text" id="contactOccupation" class="form-control"
                            placeholder="Occupation">
                    </div>
                    <div class="form-group">
                        <input type="email" id="contactEmail" class="form-control" placeholder="Email">
                    </div>
                </div><!-- .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
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
            <form action="{{ route('admin.umkm.category.store') }}" id="newCategoryForm" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group m-0">
                        <input name="name" type="text" id="catLabel" class="form-control" placeholder="Category Name" required>
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