
@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
@include(' shared.alerts')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listagem de usuários</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th width="200px">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user )
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form action="{{ route('user.delete', $user->id) }}" method="post">
                                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-warning"><span class="fa fa-eye"></span> Show</a>
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('js')
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@stop

