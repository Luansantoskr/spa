@extends('template.template')

    <h1 class="text-center"> Bem vindo!</h1><br>
<div class="container text-center">
    <a href="{{route('agenda.create')}}"><button class="btn btn-primary"> Cadastro de cliente </button></a>
    <a href="{{route('user.login')}}"><button class="btn btn-success"> Fazer login </button></a>
    <a href=""><button class="btn btn-warning"> Realizar agendamento </button></a>
</div>