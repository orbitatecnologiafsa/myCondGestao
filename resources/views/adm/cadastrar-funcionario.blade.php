@extends('tamplate.layout.main')
@section('titulo', 'Cadastrar funcionario - adm')
@section('conteudo')
@section('caminho', 'Menu')
@section('atual-page', 'Cadastrar funcionario')
@section('classBody', 'g-sidenav-show bg-gray-100')
@section('classMain', 'main-content position-relative border-radius-lg')
@section('ativo-cadastrar-funcionario', 'active')
@section('conteudo')
    @push('sidbar')
        @include('tamplate.sidbars.sidbar-adm')
    @endpush
    @push('navbar')
        @include('tamplate.navs.navbar-adm')
    @endpush
@section('conteudo')
    <div class="container-fluid py-4">
        <div class="col-md-12" style="margin-top:250px;">
            <div class="card">
                <form action="">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Cadastrar Funcionario</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Funcionario</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nome</label>
                                    <input class="form-control" type="text" value="" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Cpf</label>
                                    <input id="cpf" class="form-control" type="text" value=""
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email - contato</label>
                                    <input class="form-control" type="text" value="" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Telefone (WhatsApp/Telegram)</label>
                                    <input id="phone" class="form-control" type="text" value=""
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Função</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Selecione</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <hr class="horizontal dark">

                        <p class="text-uppercase text-sm">Login</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Condominio</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Selecione</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input class="form-control" type="email" value="" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Senha</label>
                                <input class="form-control" type="password" value="" id="password"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" onclick="checado(this);" id="senhaShow">
                                    <label class="form-check-label" for="senhaShow">Exibir Senha</label>
                                </div>
                            </div>
                        </div>




                        {{-- <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">About me</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">About me</label>
                                    <input class="form-control" type="text"
                                        value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source."
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div> --}}
                        <button class="btn btn-primary btn-sm ms-auto">Cadastar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('js-stack')
        <script src="{{ asset('js/senha/exibir-senha.js') }}"></script>
        <script src="{{ asset('js/mascara/jquery.mask.js') }}"></script>
        <script>
            $(document).ready(function() {

                $('#cpf').mask('000.000.000-00', {
                    reverse: true
                });
                $('#phone').mask('(75) 00000-0000');
            });
        </script>
    @endpush
@endsection
