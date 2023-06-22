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
                <a data-bs-toggle="collapse" href="#condominioExamples" class="nav-link @yield('cond-active') collapsed"
                    aria-controls="condominioExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Condominio</span>
                </a>
                <div class="collapse" id="condominioExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-cond')"href="{{ route('adm-cadastrar-condominio') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-cond') " href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sindicoExamples" class="nav-link @yield('sind-active') collapsed"
                    aria-controls="sindicoExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sindico</span>
                </a>
                <div class="collapse" id="sindicoExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-sind')"href="{{ route('adm-cadastrar-sindico') }}">
                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-sind') " href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#moradorExamples" class="nav-link @yield('morador-active') collapsed"
                    aria-controls="moradorExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Morador</span>
                </a>
                <div class="collapse" id="moradorExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-morador')"href="{{route('adm-cadastrar-morador')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-morador') " href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#funcionarioExamples"
                    class="nav-link @yield('funcionario-active') collapsed" aria-controls="funcionarioExamples" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Funcionario</span>
                </a>
                <div class="collapse" id="funcionarioExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-funcionario')"href="{{ route('adm-cadastrar-funcionario') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-funcionario') " href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#visitanteExamples" class="nav-link @yield('visitante-active') collapsed"
                    aria-controls="visitanteExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Visitante</span>
                </a>
                <div class="collapse" id="visitanteExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-visitante')"href="{{route('adm-cadastrar-visitante')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-visitante') " href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#funcoesExamples" class="nav-link @yield('funcoes-active') collapsed"
                    aria-controls="funcoesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Funções</span>
                </a>
                <div class="collapse" id="funcoesExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-funcao')"href="">
                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-funcao')" href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#admExamples" class="nav-link @yield('adm-active') collapsed"
                    aria-controls="admExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Adm</span>
                </a>
                <div class="collapse" id="admExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link @yield('ativo-cadastrar-cond')"href="">
                                <span class="sidenav-mini-icon"> C </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                                <span class="sidenav-normal">Cadastrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('ativo-lista-cond') " href="">

                                <span class="sidenav-mini-icon"> L </span>
                                <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>

                                <span class="sidenav-normal">Lista</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

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
