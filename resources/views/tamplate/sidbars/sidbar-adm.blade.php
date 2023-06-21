<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" style="height: auto;">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
            <img src="{{ asset('img/orbita-icon.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">MyCondGestão</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class=" nav-link @yield('ativo-dashboard')" href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link @yield('cond-active') collapsed"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Condominio</span>
                </a>
                <div class="collapse" id="dashboardsExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-cond')"href="{{ route('adm-cadastrar-condominio') }}">
                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-vendas') " href="">

                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- ç --}}


            {{-- <li class="nav-item">
        <a class="nav-link @yield('ativo-perfil') " href="../pages/virtual-reality.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-user text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Meu perfil</span>
        </a>
      </li> --}}

            <li class="nav-item">
                <a class="nav-link @yield('ativo-sair')"
                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                    style="cursor: pointer;">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-power text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sair</span>
                </a>
                <form id="frm-logout" action="" method="post" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>
