@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Bienvenue !</div>

                <div class="card-body">
                    @foreach($membres as $membre)
                        {{$membre->nom}}
                    @endforeach
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
