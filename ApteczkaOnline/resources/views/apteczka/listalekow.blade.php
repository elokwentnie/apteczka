@extends('layouts.app')
@section('title','Lista Leków')

@section('content')

    <div class="container">
        <h1>Lista Lekow</h1>
        <br>
        <div class="input-group">
            <a class="btn btn-primary" href="/home">Wstecz</a>
        </div>
        <br>

        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Wyszukaj lek"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
            </div>
        </form>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nazwa Handlowa</th>
                <th>Dawka</th>
                <th>Opakowanie</th>
            </tr>
            @foreach($apteczkas as $apteczka)
                <tr>
                    <td>{{$apteczka->id}}</td>
                    <td>{{$apteczka->NazwaHandlowa}}</td>
                    <td>{{$apteczka->Dawka}}</td>
                    <td>{{$apteczka->Opakowanie}}</td>
                    <td><a class="btn btn-info" href="#">Dodaj do apteczki</a></td>
                </tr>
            @endforeach
        </table>

        {{$apteczkas->links()}}
    </div>
@endsection
