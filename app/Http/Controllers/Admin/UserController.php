<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    public function show(User $user){
        return view('admin.show',compact('user'));
    }

    public function create(){
        return view('admin.store');
    }

    public function store(){
        try {
            User::create(request()->all());
            return redirect()->route('user')->withSuccess('Usuário cadastrado com sucesso!');
        }catch (\Exception $e){
            return redirect()->route('user')->withError('Erro no cadastro de usuário!');
        }
    }

    public function edit(User $user){
        return view('admin.edit',compact('user'));
    }

    public function update(User $user){
        try {
            $user->update(request()->all());
            return redirect()->route('user')->withSuccess('Usuário atualizado com sucesso!');
        }catch (\Exception $e){
            return redirect()->route('user')->withError('Erro na atualização de acadastro!');
        }
    }

    public function delete(User $user){
        try {
            $user->delete();
            return redirect()->route('user')->withSuccess('Usuário deletado com sucesso!');
        }catch (\Exception $e){
            return redirect()->route('user')->withError('Erro!');
        }
    }
}
