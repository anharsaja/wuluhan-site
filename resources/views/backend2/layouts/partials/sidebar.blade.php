@can('dashboard.view')
    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"><i
                class="fa fa-adjust"></i>Dashboard</a></li>
@endcan

{{-- Sekretariat --}}
@can('sekretariat.view')
    <li class="nav-item"><a href="#sekretariat" class="nav-link collapsed {{ Route::is('admin.umpeg.*') || Route::is('admin.plk.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-fire"></i>Sekretariat<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.umpeg.*') || Route::is('admin.plk.*') ? 'show' : '' }}" id="sekretariat">
        <a href="{{ route('admin.umpeg.index') }}" class="nav-link {{ Route::is('admin.umpeg.index') || Route::is('admin.umpeg.public') || Route::is('admin.umpeg.private') || Route::is('admin.umpeg.category') ? 'active' : '' }}" data-parent="#sekretariat">UMPEG</a>
        <a href="{{ route('admin.plk.index') }}" class="nav-link {{ Route::is('admin.plk.index') || Route::is('admin.plk.public') || Route::is('admin.plk.private') || Route::is('admin.plk.category') ? 'active' : '' }}" data-parent="#sekretariat">Perencanaan Keuangan</a>
    </li>
@endcan

{{-- Pemerintahan --}}
@can('pemerintahan.view')
    <li class="nav-item"><a href="#pemerintahan" class="nav-link collapsed {{ Route::is('admin.rapbdes.*') || Route::is('admin.desa.*') || Route::is('admin.produkhukum.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-fire"></i>Pemerintahan<span class="sub-ico">
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
        class="fa fa-fire"></i>Pelayanan Umum<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.adminduk.*') ? 'show' : '' }}" id="pelum">
        <a href="{{ route('admin.adminduk.index') }}" class="nav-link {{ Route::is('admin.adminduk.index') || Route::is('admin.adminduk.public') || Route::is('admin.adminduk.private') || Route::is('admin.adminduk.category') ? 'active' : '' }}" data-parent="#sekretariat">ADMINDUK</a>
        <a href="{{ route('admin.adminduk.index') }}" class="nav-link {{ Route::is('admin.adminduk.index') || Route::is('admin.adminduk.public') || Route::is('admin.adminduk.private') || Route::is('admin.adminduk.category') ? 'active' : '' }}" data-parent="#sekretariat">Dokumentasi</a>
    </li>
@endcan

{{-- Pennyandang Masalah Kesejahteraan Sosial --}}
@can('pmks.view')
    <li class="nav-item"><a href="#pmks" class="nav-link collapsed {{ Route::is('admin.pkk.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-fire"></i>PMKS<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.pkk.*') ? 'show' : '' }}" id="pmks">
        <a href="{{ route('admin.pkk.index') }}" class="nav-link {{ Route::is('admin.pkk.index') || Route::is('admin.pkk.public') || Route::is('admin.pkk.private') || Route::is('admin.pkk.category') ? 'active' : '' }}" data-parent="#sekretariat">PKK</a>
        <a href="{{ route('admin.adminduk.index') }}" class="nav-link {{ Route::is('admin.adminduk.index') || Route::is('admin.adminduk.public') || Route::is('admin.adminduk.private') || Route::is('admin.adminduk.category') ? 'active' : '' }}" data-parent="#sekretariat">Dokumentasi</a>
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
