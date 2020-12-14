
@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'users')

@section('content_header')

@stop

@section('content')
    <div class="invoice p-3 mb-3">
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"></i> Página do Usuário.
                    <small class="float-right">Date: 2/10/2014</small>
                </h4>
            </div>
        </div>
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong>Nome</strong>
                    <br>{{ $user->name }}<br>
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                <p>
                    <strong>Email</strong>
                    <br>{{ $user->email }}<br>
                </p>
            </div>
        </div>
            <div class="mt-3">
                <a class="btn btn-secondary" href="{{ route('user') }}">Voltar</a>
            </div>
        </div>
    </div>
@stop







