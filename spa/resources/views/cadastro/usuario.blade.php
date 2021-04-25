@extends('template.template')

    <h1 class="text-center">Cadastro de Usuário</h1>
    <div class="container">
    <form class="form-group text-center" method="post" action="{{route('user.store')}}">
        @csrf
        <input  class="form-control" type="text" name="name" placeholder="Nome"> <br><br>
        <input  class="form-control" type="text" name="email" placeholder="Email"> <br><br>
        <input  class="form-control" type="password" name="password" placeholder="Sua senha"><br>
        <button class="btn btn-primary" type="submit"> Cadastrar</button>
        <button class="btn btn-danger" type="reset"> Cancelar </button><br>
        <p>Já tem cadastro? <a href="{{route('user.login')}}">Logar-se</a></p>
    </form>
</div>