@extends('app.app')

@section('title', 'Professores')

@section('content')
<table class="table">
    <thead>
        <th>id</th>
        <th>nome</th>
        <th>endereço</th>
    </thead>
    <tbody>
        @foreach($professors as $professor)
         <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->name}}</td>
            <td>{{$professor->address}}</td>
         </tr>
        @endforeach
    </tbody>
</table>
@endsection
