@extends('template.template')

<div class="container">
    <form action="{{route('coordenador.store')}}" method="POST" class="form-group">
        @csrf
        <input type="text" class="form-control" name="nome" placeholder="Nome"><br>
        <input type="text" class="form-control" name="crp" placeholder="Número do CRP"><br>
        <input type="text" class="form-control" name="telefone" placeholder="Telefone"><br>
        <input type="text" class="form-control" name="email" placeholder="Email"><br>
        <button class="btn btn-primary"> Cadastrar-se </button>
        <button class="btnbtn-danger"> Cancelar cadastro </button>
    </form>

</div>