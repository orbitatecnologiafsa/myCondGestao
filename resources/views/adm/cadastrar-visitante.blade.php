@extends('tamplate.layout.main')
@section('titulo', 'Cadastrar visitante - adm')
@section('conteudo')
@section('caminho', 'Menu')
@section('atual-page', 'Visitante / Cadastrar')
@section('atual-page-real', 'Cadastrar Visitante')
@section('classBody', 'g-sidenav-show bg-gray-100')
@section('classMain', 'main-content position-relative border-radius-lg')
@section('ativo-cadastrar-visitante', 'active')
@section('visitante-active', 'active')
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
                            <p class="mb-0">Cadastrar Visitante</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Visitante</p>
                        <div class="row">
                            <div class="text-center">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/marie.jpg') }}" id='img_perfil_user'
                                        class="img-fluid border-radius-lg rounded-circle" alt="..." style="width: 200px; heigth:200px;" >
                                </div>
                                <div>
                                    <label class="btn btn-primary btn-sm ms-auto" for="img_perfil" style="margin-top:10px;">Adicionar
                                        foto de perfil</label>
                                    <input type="file" name="img_perfil" id="img_perfil" accept="image/*" hidden
                                        onchange="loadFile(event);">
                                </div>
                            </div>
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
                                    <label class="form-control-label">Telefone (WhatsApp/Telegram)</label>
                                    <input id="phone" class="form-control" type="text" value=""
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>

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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Status</label>
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
        <script src="{{ asset('js/mascara/jquery.mask.js') }}"></script>
        <script>
            $(document).ready(function() {

                $('#cpf').mask('000.000.000-00', {
                    reverse: true
                });
                $('#phone').mask('(75) 00000-0000');
            });
            var loadFile = function(event) {
                var output = document.getElementById('img_perfil_user');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>
    @endpush
@endsection
