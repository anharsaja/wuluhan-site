@can('dashboard.view')
    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"><i
                class="fa fa-adjust"></i>Dashboard</a></li>
@endcan

{{-- Sekretariat --}}
@can('sekretariat.view')
    <li class="nav-item"><a href="#sekretariat" class="nav-link collapsed {{ Route::is('admin.umpeg.*') || Route::is('admin.plk.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-book"></i>Sekretariat<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.umpeg.*') || Route::is('admin.plk.*') || Route::is('sekretariat.dokumentasi.*') ? 'show' : '' }}" id="sekretariat">
        <a href="{{ route('admin.umpeg.index') }}" class="nav-link {{ Route::is('admin.umpeg.index') || Route::is('admin.umpeg.public') || Route::is('admin.umpeg.private') || Route::is('admin.umpeg.category') ? 'active' : '' }}" data-parent="#sekretariat">UMPEG</a>
        <a href="{{ route('admin.plk.index') }}" class="nav-link {{ Route::is('admin.plk.index') || Route::is('admin.plk.public') || Route::is('admin.plk.private') || Route::is('admin.plk.category') ? 'active' : '' }}" data-parent="#sekretariat">Perencanaan Keuangan</a>
    </li>
@endcan

{{-- Pemerintahan --}}
@can('pemerintahan.view')
    <li class="nav-item"><a href="#pemerintahan" class="nav-link collapsed {{ Route::is('admin.rapbdes.*') || Route::is('admin.desa.*') || Route::is('admin.produkhukum.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-envelope"></i>Pemerintahan<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.rapbdes.*') || Route::is('admin.desa.*') || Route::is('admin.produkhukum.*') ? 'show' : '' }}" id="pemerintahan">
        <a href="{{ route('admin.rapbdes.index') }}" class="nav-link {{ Route::is('admin.rapbdes.index') || Route::is('admin.rapbdes.public') || Route::is('admin.rapbdes.private') || Route::is('admin.rapbdes.category') ? 'active' : '' }}" data-parent="#sekretariat">RAPBDES</a>
        <a href="{{ route('admin.desa.index') }}" class="nav-link {{ Route::is('admin.desa.index') || Route::is('admin.desa.public') || Route::is('admin.desa.private') || Route::is('admin.desa.category') ? 'active' : '' }}" data-parent="#sekretariat">Desa</a>
        <a href="{{ route('admin.produkhukum.index') }}" class="nav-link {{ Route::is('admin.produkhukum.index') || Route::is('admin.produkhukum.public') || Route::is('admin.produkhukum.private') || Route::is('admin.produkhukum.category') ? 'active' : '' }}" data-parent="#sekretariat">Produk Hukum</a>
    </li>
@endcan

{{-- Pelayanan Umum --}}
@can('pelum.view')
    <li class="nav-item"><a href="#pelum" class="nav-link collapsed {{ Route::is('admin.adminduk.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-headphones"></i>Pelayanan Umum<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.adminduk.*') ? 'show' : '' }}" id="pelum">
        <a href="{{ route('admin.adminduk.index') }}" class="nav-link {{ Route::is('admin.adminduk.index') || Route::is('admin.adminduk.public') || Route::is('admin.adminduk.private') || Route::is('admin.adminduk.category') ? 'active' : '' }}" data-parent="#sekretariat">ADMINDUK</a>
        <a href="{{ route('admin.adminduk.index') }}" class="nav-link {{ Route::is('admin.adminduk.index') || Route::is('admin.adminduk.public') || Route::is('admin.adminduk.private') || Route::is('admin.adminduk.category') ? 'active' : '' }}" data-parent="#sekretariat">Dokumentasi</a>
    </li>
@endcan

{{-- Pennyandang Masalah Kesejahteraan Sosial --}}
@can('pmks.view')
    <li class="nav-item"><a href="#pmks" class="nav-link collapsed {{ Route::is('admin.pkk.*') || Route::is('admin.osjj.*') || Route::is('admin.kencana.*') || Route::is('admin.wisata.*') || Route::is('admin.budaya.*') || Route::is('admin.agama.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-handshake"></i>PMKS<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.pkk.*') || Route::is('admin.osjj.*') || Route::is('admin.kencana.*') || Route::is('admin.wisata.*') || Route::is('admin.budaya.*') || Route::is('admin.agama.*') ? 'show' : '' }}" id="pmks">
        <a href="{{ route('admin.pkk.index') }}" class="nav-link {{ Route::is('admin.pkk.index') || Route::is('admin.pkk.public') || Route::is('admin.pkk.private') || Route::is('admin.pkk.category') ? 'active' : '' }}" data-parent="#sekretariat">PKK</a>
        <a href="{{ route('admin.osjj.index') }}" class="nav-link {{ Route::is('admin.osjj.index') || Route::is('admin.osjj.public') || Route::is('admin.osjj.private') || Route::is('admin.osjj.category') ? 'active' : '' }}" data-parent="#sekretariat">OSJJ</a>
        <a href="{{ route('admin.kencana.index') }}" class="nav-link {{ Route::is('admin.kencana.index') || Route::is('admin.kencana.public') || Route::is('admin.kencana.private') || Route::is('admin.kencana.category') ? 'active' : '' }}" data-parent="#sekretariat">KENCANA</a>
        <a href="{{ route('admin.wisata.index') }}" class="nav-link {{ Route::is('admin.wisata.index') || Route::is('admin.wisata.public') || Route::is('admin.wisata.private') || Route::is('admin.wisata.category') ? 'active' : '' }}" data-parent="#sekretariat">Wisata</a>
        <a href="{{ route('admin.budaya.index') }}" class="nav-link {{ Route::is('admin.budaya.index') || Route::is('admin.budaya.public') || Route::is('admin.budaya.private') || Route::is('admin.budaya.category') ? 'active' : '' }}" data-parent="#sekretariat">Budaya</a>
        <a href="{{ route('admin.agama.index') }}" class="nav-link {{ Route::is('admin.agama.index') || Route::is('admin.agama.public') || Route::is('admin.agama.private') || Route::is('admin.agama.category') ? 'active' : '' }}" data-parent="#sekretariat">Agama</a>
    </li>
@endcan

{{-- Trantib --}}
@can('trantib.view')
    <li class="nav-item"><a href="#trantib" class="nav-link collapsed {{ Route::is('admin.trantib.*') || Route::is('admin.trantib.dokumentasi.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-fire"></i>TRANTIB<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.trantib.*') || Route::is('admin.trantib.dokumentasi.*') ? 'show' : '' }}" id="trantib">
        <a href="{{ route('admin.trantib.surat.index') }}" class="nav-link {{ Route::is('admin.trantib.surat.index') || Route::is('admin.trantib.surat.public') || Route::is('admin.trantib.surat.private') || Route::is('admin.trantib.surat.category') ? 'active' : '' }}" data-parent="#sekretariat">Kelola Dokumen</a>
        <a href="{{ route('admin.trantib.dokumentasi.index') }}" class="nav-link {{ Route::is('admin.trantib.dokumentasi.index') || Route::is('admin.trantib.dokumentasi.public') || Route::is('admin.trantib.dokumentasi.private') || Route::is('admin.trantib.dokumentasi.category') ? 'active' : '' }}" data-parent="#sekretariat">Foto</a>
    </li>
@endcan


@can('role.view')
    <li class="nav-item"><a href="{{ route('admin.roles.index') }}" class="nav-link"><i
                class="fa fa-adjust"></i>Manage Jabatan</a></li>
@endcan

@can('admin.view')
    <li class="nav-item"><a href="{{ route('admin.admins.index') }}" class="nav-link"><i
        class="fa fa-adjust"></i>Manage Admins</a></li>
@endcan
