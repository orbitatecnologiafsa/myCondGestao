@extends('tamplate.layout.main')
@section('titulo', 'Login - adm')
@section('conteudo')

@section('classBody', '')
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Login</h4>
                                <p class="mb-0">Entre com o email e senha</p>
                            </div>
                            <div class="card-body">
                                <form role="form" action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            id="documento" placeholder="Email"
                                           value="{{ old('email') ?? request()->input('email') }}"  aria-label="text">
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" id="password"
                                            class="form-control form-control-lg"
                                            value="{{ old('password') ?? request()->input('password') }}"
                                            placeholder="Senha"
                                            aria-label="Password">
                                        @error('password')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Manter logado</label>
                                        <div style="margin-left: 56px;">
                                            <input class="form-check-input" type="checkbox" onclick="checado(this);"
                                                id="senhaShow">
                                            <label class="form-check-label" for="senhaShow">Exibir Senha</label>
                                        </div>

                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0"
                                            id="submit-form" onclick="submit(this);">Entrar</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Problema ao logar?
                                    <a href="https://core3tec.tomticket.com/chat/index?id=EP28882&ac=1848448P20022019111518"
                                        class="text-primary text-gradient font-weight-bold" target="_blanc">Contate o
                                        suporte</a>

                                </p>
                                {{-- <p class="mb-4 text-sm mx-auto">
                                   Esqueceu a senha clique?
                                    <a href="https://core3tec.tomticket.com/chat/index?id=EP28882&ac=1848448P20022019111518"
                                        class="text-primary text-gradient font-weight-bold" target="_blanc">
                                        Aqui</a>

                                </p> --}}

                            {{-- </div> --}} 
                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-image: url('{{ asset('img/orbita-icon.png') }}');
              background-size: cover;">
                            <span class="mask opacity-4"></span>
                            {{-- <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@push('js-stack')
    <script src="{{ asset('js/senha/exibir-senha.js') }}"></script>
@endpush

@endsection
