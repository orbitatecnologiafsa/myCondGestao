@extends('tamplate.layout.main')
@section('titulo', 'Dashboard - adm')
@section('conteudo')
@section('caminho', 'Menu')
@section('atual-page', 'Dashboard')
@section('atual-page-real', 'Dashboard')
@section('classBody', 'g-sidenav-show bg-gray-100')
@section('classMain', 'main-content position-relative border-radius-lg')
@section('ativo-dashboard', 'active')
@section('conteudo')
    @push('sidbar')
        @include('tamplate.sidbars.sidbar-adm')
    @endpush
    @push('navbar')
        @include('tamplate.navs.navbar-adm')
    @endpush
@section('conteudo')
@endsection
