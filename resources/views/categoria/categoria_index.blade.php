@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                            <table>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>

                        @foreach($categoria as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{$value->name}}</td>
                            <td><a href="{{ url('/categoria/' . $value->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Visualizar</a></td>
                        </tr>
                        @endforeach
                        </table>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


