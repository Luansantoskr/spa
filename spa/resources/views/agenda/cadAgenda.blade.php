@extends('template.template')

<div class="container cima">
    <h1>Cadastro do cliente</h1>
<form action="{{route('agenda.store')}}" method="POST" class="form-group">
    @csrf
    <input type="text" class="form-control" name="nome" placeholder="Nome completo"><br>
    <input type="text" class="form-control" name="idade" placeholder="Idade"><br>
    <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade"><br>
    <input type="text" class="form-control" name="civil" placeholder="Estado Civil"><br>
    <input type="text" class="form-control" name="grau" placeholder="Grau de instrução"><br>
    <input type="text" class="form-control" name="endereco" placeholder="Endereço"><br>
    <input type="text" class="form-control" name="municipio" placeholder="Municipio"><br>
    <input type="text" class="form-control" name="fone" placeholder="(00)0 0000-0000"><br>
    <input type="text" class="form-control" name="mae" placeholder="Nome da mãe"><br>
    <input type="text" class="form-control" name="pai" placeholder="Nome do pai"><br>
    <input type="date" class="form-control" name="nascimentoMae" placeholder="Data de nascimento da mãe"><br>
    <input type="date" class="form-control" name="nascimentoPai" placeholder="Data de nascimento do pai"><br>
    <button class="btn btn-primary">Cadastro</button>
    <button class="btn btn-danger">Cancelar</button>
</form>
</div>