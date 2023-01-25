@extends('base')
@section('content')
    <div id="content-wrap">
    <h1 class="display-4 text-center  mt-5 mb-5">Cliente: {{ $client->name }}</h1>
        <section class="container">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $client->name }}</h5>
                    <p class="card-text">{{ $client->email }}</p>
                </div>
                <ul class="list-group list-group-light list-group-small">
                    <li class="list-group-item px-4"><span class="fw-bold">CPF: </span><span id="cpf">{{ $client->cpf }}</span></li>
                    <li class="list-group-item px-4"><span class="fw-bold">Telefone: </span><span id="phone">{{ $client->phone }}</span></li>
                    <li class="list-group-item px-4"><span class="fw-bold">CEP: </span><span id="cep">{{ $client->adress->cep }}</span></li>
                    <li class="list-group-item px-4"><span class="fw-bold">Logradouro: </span>{{ $client->adress->street }}</li>
                    <li class="list-group-item px-4"><span class="fw-bold">Número: </span>{{ $client->adress->number }}</li>
                    <li class="list-group-item px-4"><span class="fw-bold">Bairro: </span>{{ $client->adress->neighborhood }}</li>
                    <li class="list-group-item px-4"><span class="fw-bold">Cidade: </span>{{ $client->adress->city }}</li>
                    <li class="list-group-item px-4"><span class="fw-bold">Estado: </span>{{ $client->adress->state }}</li>
                    <li class="list-group-item px-4"><span class="fw-bold">País: </span>{{ $client->adress->country }}</li>
                </ul>
                <div class="card-body text-center">
                    <a href="{{ route('clients.index') }}" class="card-link">voltar</a>
                </div>
            </div>
        </section>
    </div>
@endsection