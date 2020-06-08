@extends('layouts.app')
@section('title','Lista Leków')

@section('content')
    <div class="container">
        <h1>Twoja apteczka</h1>
        <br>
        <div class="input-group">
            <a class="btn btn-primary" href="/home">Wstecz</a>
        </div>
        <br>
        <div class="input-group">
            <a class="btn btn-success" href="#">Dodaj lek do apteczki</a>
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
                <th>Nazwa leku</th>
                <th>ID leku</th>
                <th>Ilość</th>
                <th>Data Ważności</th>
                <th>Pozostało</th>
            </tr>
            @foreach($apteczkas as $apteczka)
                <tr>
                    <td>{{$apteczka->nazwa}}</td>
                    <td>{{$apteczka->id_leku}}</td>
                    <td>{{$apteczka->ilosc}}</td>
                    <td>{{$apteczka->data_waznosci}}</td>
                    <td>{{$apteczka->pozostalo}}</td>
                    <td><a class="btn btn-info" href="#">Zażyj</a></td>
                    <td><a class="btn btn-danger" href="#">Utylizuj</a></td>
                </tr>
            @endforeach
        </table>

        {{$apteczkas->links()}}
    </div>
@endsection
