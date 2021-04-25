@extends('template.template')

<form action="/login" class="form-group">
    @csrf
    <input type="text" class="form-control" name="nome" placeholder="Nome"><br>
    <input type="password" class="form-control" name="password" placeholder="Senha"><br>
    <button class="btn btn-primary" type="submit">Login</button>
    <button class="btn btn-danger" type="reset"> Cancelar </button>

    <p> Não tem cadastro ainda? <a href="/create">Cadastrar-se</a></p>
</form>