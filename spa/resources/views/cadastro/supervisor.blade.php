@extends('template.template')

<div class="container">
    <form action="/super" class="form-group">
        @csrf
        <input type="text" class="form-control" name="nome" placeholder="Nome">
        <input type="text" class="form-control" name="crp" placeholder="Número do CRP">
        <input type="text" class="form-control" name="fone" placeholder="Telefone de contato">
        <input type="text" class="form-control" name="email" placeholder="Email de contato">
        <button class="btn btn-primary"> Cadastrar </button>
        <button class="btn btn-danger"> Cancelar </button>
    </form>
</div>