<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('landing/images/logo1.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('admin/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('lowongan') }}"> <i class="menu-icon fa fa-laptop"></i>Lowongan Kerja </a>
                </li>
                <li>
                    <a href="{{ route('report') }}"> <i class="menu-icon fa fa-id-card-o"></i>Download CV </a>
                </li>
                <li>
                    <a href="{{ route('report-xls') }}"> <i class="menu-icon fa fa-file-word-o"></i>Laporan </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>