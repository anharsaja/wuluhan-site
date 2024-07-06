@extends('backend2.layouts.master')

@section('content')
    <!-- start content here -->
    <div id="Profile">
        <div class="profile-header card">
            <div class="profile-cover">
                <div class="cover-user m-b-lg" style="
display: flex;
justify-content: center;
">
                    <div>
                        <div class="avatar avatar-xl avatar-circle">
                            <label for="fileUpload" style="width: 90px; height: 90px">
                                <img id="avatarImage" class="img-responsive"
                                    src="{{ asset(Auth::user()->foto ? Auth::user()->foto : 'img/avatar/avatar.png') }}"
                                    alt="Avatar"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: center" />
                            </label>
                            <input type="file" id="fileUpload" style="display:none;" accept="image/*">
                        </div><!-- .avatar -->
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="profile-info-name m-b-lg"><a href="javascript:void(0)"
                            class="title-color">{{ Auth::User()->name }}</a></h4>
                    <div>
                        <a href="javascript:void(0)" class="m-r-xl theme-color"><i
                                class="fa fa-bolt m-r-xs"></i>{{ Auth::User()->email }}</a>
                        <a href="javascript:void(0)" class="theme-color"><i
                                class="fa fa-fire m-r-xs"></i>{{ Auth::User()->roles[0]->name }}</a>
                    </div>
                </div>
            </div><!-- .profile-cover -->

            <div class="promo-footer">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-sm-offset-3 col-xs-6 promo-tab">
                        <div class="text-center">
                            <h4>{{ Auth::User()->description }}</h4>
                            {{-- <h4 class="m-0 m-t-xs">+2 years</h4> --}}
                        </div>
                    </div>
                </div>
            </div><!-- .promo-footer -->
        </div><!-- .profile-header -->
    </div>
    <div class="m-b-lg">
        <a href="#" data-toggle="modal" data-target="#editProfile" class="btn btn-primary btn-block">Edit Profile</a>
    </div>

    <div id="editProfile" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" style="width: 100%">Edit Surat</h4>
                </div>
                <form action="{{ route('admin.profile.edit', Auth::User()->id) }}" id="newCategoryForm" method="post"
                    enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="name" type="text" id="name" class="form-control" placeholder="Name"
                                value="{{ Auth::User()->name }}">
                        </div>
                        <div class="form-group">
                            <input name="nip" type="text" id="nip" class="form-control" placeholder="nip"
                                value="{{ Auth::User()->nip }}">
                        </div>
                        <div class="form-group">
                            <input name="email" type="text" id="email" class="form-control" placeholder="email"
                                value="{{ Auth::User()->email }}">
                        </div>
                        <div class="form-group">
                            <input name="username" type="text" id="username" class="form-control" placeholder="username"
                                value="{{ Auth::User()->username }}" readonly>
                        </div>
                        <div class="form-group">
                            <input name="password" type="text" id="password" class="form-control" placeholder="password"
                                value="">
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Deskripsi Surat" style="height: 150px">{{ Auth::User()->description }}</textarea>
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

    <script>
        // Ambil elemen gambar dan input file
        const avatarImage = document.getElementById('avatarImage');
        const fileUpload = document.getElementById('fileUpload');


        // Tambahkan event listener untuk perubahan pada input file
        fileUpload.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Ambil file yang dipilih
            if (file) {
                const formData = new FormData(); // Buat objek FormData
                formData.append('avatar', file); // Tambahkan file ke FormData


                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Tambahkan header X-CSRF-TOKEN ke permintaan
                const headers = new Headers({
                    'X-CSRF-TOKEN': csrfToken
                });
                // Kirim permintaan AJAX
                fetch('{{ route('admin.avatar.edit') }}', {
                        method: 'POST',
                        headers: headers, // Sertakan header dengan token CSRF
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Jika unggahan berhasil, set src dari elemen img dengan path baru
                            document.getElementById('avatarImage').src = data.path;
                        } else {
                            // Jika unggahan gagal, tampilkan pesan error
                            console.error('Unggahan gagal');
                        }
                    })
                    .catch(error => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }
        });
    </script>
@endsection
