@extends('template.template')

<form action="{{route('estagiario.store')}}" method="POST" class="form-group">
    @csrf
    <input type="text" class="form-control" name="estagiario" placeholder="Nome"><br>
    <input type="text" class="form-control" name="matricula" placeholder="Matrícula"><br>
    <input type="text" class="form-control" name="semestre" placeholder="semestre"><br>
    <input type="text" class="form-control" name="telefone" placeholder="Telefone para contato"><br>
    <input type="text" class="form-control" name="email" placeholder="email"><br>
    <button class="btn btn-primary"> Cadastrar-se </button>
    <button class="btn btn-danger"> Cancelar cadastro </button>

</form>