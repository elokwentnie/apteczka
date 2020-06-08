@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Menu</h1>
                        <a class="btn btn-info" href="/apteczka/listalekow">Lista Leków</a>
                        <br><br>
                        <a class="btn btn-primary" href="/apteczka/twojaapteczka">Twoja apteczka</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
