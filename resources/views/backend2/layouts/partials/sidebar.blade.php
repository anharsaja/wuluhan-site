@can('dashboard.view')
    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"><i
                class="fa fa-adjust"></i>Dashboard</a></li>
@endcan

{{-- Sekretariat --}}
@can('sekretariat.view')
    <li class="nav-item"><a href="#sekretariat" class="nav-link collapsed {{ Route::is('admin.sotk.*') ? 'active' : '' }}" data-toggle="collapse"><i
        class="fa fa-fire"></i>Sekretariat<span class="sub-ico">
            <i class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.sotk.*') ? 'show' : '' }}" id="sekretariat">
        <a href="{{ route('admin.umpeg.index') }}" class="nav-link {{ Route::is('admin.umpeg.index') ? 'active' : '' }}" data-parent="#umpeg">UMPEG</a>
        <a href="{{ route('admin.umpeg.index') }}" class="nav-link {{ Route::is('admin.umpeg.index') ? 'active' : '' }}" data-parent="#umpeg">Perencanaan Keuangan</a>
    </li>
@endcan

@can('osjj.view')
    <li class="nav-item"><a href="#osjj" class="nav-link collapsed {{ Route::is('admin.osjj.*') ? 'active' : '' }}" data-toggle="collapse"><i
                class="fa fa-fire"></i>osjj<span class="sub-ico"><i
                    class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.osjj.*') ? 'show' : '' }}" id="osjj">
        <a href="{{ route('admin.osjj.public') }}" class="nav-link {{ Route::is('admin.osjj.public') ? 'active' : '' }}" data-parent="#osjj">-</a>
        <a href="{{ route('admin.osjj.private') }}" class="nav-link {{ Route::is('admin.osjj.private') ? 'active' : '' }}" data-parent="#osjj">-</a>
        @can('osjj.view')
            <a href="{{ route('admin.osjj.index') }}" class="nav-link {{ Route::is('admin.osjj.index') ? 'active' : '' }}" data-parent="#osjj">Kelola
                Dokumen</a>
        @endcan
    </li>
@endcan

@can('pkk.view')
    <li class="nav-item"><a href="#pkk" class="nav-link collapsed {{ Route::is('admin.pkk.*') ? 'active' : '' }}" data-toggle="collapse"><i
                class="fa fa-fire"></i>PKK<span class="sub-ico"><i
                    class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse {{ Route::is('admin.pkk.*') ? 'show' : '' }}" id="pkk">
        <a href="ui-alerts.html" class="nav-link {{ Route::is('admin.pkk.*') ? 'active' : '' }}" data-parent="#pkk">-</a>
        <a href="ui-btns.html" class="nav-link {{ Route::is('admin.pkk.*') ? 'active' : '' }}" data-parent="#pkk">-</a>
        <a href="{{ route('admin.pkk.index') }}" class="nav-link {{ Route::is('admin.pkk.index') ? 'active' : '' }}" data-parent="#pkk">Kelola
            Dokumen</a>
    </li>
@endcan

@can('ktb.view')
    <li class="nav-item"><a href="#ktb" class="nav-link collapsed" data-toggle="collapse"><i
                class="fa fa-fire"></i>Kecamatan Tanggul Bencana<span class="sub-ico"><i
                    class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse" id="ktb">
        <a href="ui-alerts.html" class="nav-link" data-parent="#ktb">Artikel Publik</a>
        <a href="ui-btns.html" class="nav-link" data-parent="#ktb">Artikel Privat</a>
        <a href="{{ route('admin.ktb.index') }}" class="nav-link" data-parent="#ktb">Kelola
            Dokumen</a>
    </li>
@endcan

@can('wisata.view')
    <li class="nav-item"><a href="#wisata" class="nav-link collapsed" data-toggle="collapse"><i
                class="fa fa-fire"></i>wisata<span class="sub-ico"><i
                    class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse" id="wisata">
        <a href="ui-alerts.html" class="nav-link" data-parent="#ktb">Artikel Publik</a>
        <a href="ui-btns.html" class="nav-link" data-parent="#ktb">Artikel Privat</a>
        <a href="{{ route('admin.wisata.index') }}" class="nav-link" data-parent="#ktb">Kelola
            Dokumen</a>
    </li>
@endcan

@can('budaya.view')
    <li class="nav-item"><a href="#budaya" class="nav-link collapsed" data-toggle="collapse"><i
                class="fa fa-fire"></i>Budaya<span class="sub-ico"><i
                    class="fa fa-angle-down"></i></span></a></li>
    <li class="sub collapse" id="budaya">
        <a href="ui-alerts.html" class="nav-link" data-parent="#ktb">Artikel Publik</a>
        <a href="ui-btns.html" class="nav-link" data-parent="#ktb">Artikel Privat</a>
        <a href="{{ route('admin.budaya.index') }}" class="nav-link" data-parent="#ktb">Kelola
            Dokumen</a>
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
