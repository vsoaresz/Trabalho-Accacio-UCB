@extends('app.app')

@section('title', 'Detalhes Turma')

@section('content')
<form>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="name">Turma</label>
            <span class="form-control">123293</span>
        </div>
    </div>
</form>
<table class="table table-bordered table-small table-striped">
    <thead>
        <td>Disciplina</td>
        <td>Tempos</td>

    </thead>
    <tbody>
        <tr>
            <td>Gerencia de projetos</td>
            <td>3</td>
        </tr>
        <tr>
            <td>LP 4</td>
            <td>4</td>
        </tr>
        <tr>
            <td>TCC 1</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Praticas investigativas</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Globalização</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Introdução a ADM</td>
            <td>2</td>
        </tr>
    </tbody>
</table>
@endsection
