
@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'users')

@section('content_header')

@stop

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Usuário</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Cadastro de Usuário</h3>
                    </div>
                    <form method="post" action="{{ route('user.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="flex">
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="p-2 bd-highlight">
                                        <a class="btn btn-secondary" href="{{ route('user') }}">Voltar</a>
                                    </div>
                                    <div class="ml-auto p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

