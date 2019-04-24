@extends('app.app')

@section('title', 'Professores')

@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<table class="table">
    <thead>
        <th>#</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th width="1%"></th>
    </thead>
    <tbody>
        @foreach($professors as $professor)
         <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->name}}</td>
            <td>{{$professor->address}}</td>
            <td>
                <form class="delete" action="{{ route('professors.destroy',$professor->id) }}" method="POST">
                    <div class="btn-group" role="group" aria-label="ações">
                        <a class="btn btn-info btn-primary" href="{{ route('professors.show',$professor->id) }}"><i class="far fa-eye fa"></i></a>
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="btn btn-secondary btn-danger"><i class="far fa-trash-alt"></i></button>
                    </div>
                </form >
            </td>
         </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('scripts')
<script>
    $(".delete").on("submit", function(){
        return confirm("Tem certeza?");
    });
</script>
@endsection