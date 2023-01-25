@extends('base')
@section('content')
    <section class="container">
        <h1 class="display-4 text-center  mt-5 mb-5">Clientes</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CEP</th>
                    <th class="text-center" scope="col" colspan="3">Opções</th>
                </tr>
            </thead>
            <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($clients as $client)
                <tr onclick="location.href=`{{ route('clients.show', $client->cpf) }}`" class="rows">
                    <th scope="row">{{$cont++}}</th>
                    <td name="cpf">{{ $client->cpf }}</td>
                    <td>{{ $client->name }}</td>
                    <td name="cep">{{ $client->adress->cep }}</td>
                    <td class="text-center">
                        <a href="{{ route('clients.show', $client->cpf) }}" class="nounderline-black" data-bs-toggle="tooltip" data-bs-title="Visualizar cliente">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('clients.edit', $client->cpf) }}" class="nounderline-black" data-bs-toggle="tooltip" data-bs-title="Editar cliente">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </td>
                    <td class="text-center">
                        <form method="POST" class="form" id="delete-form" action="{{ route('clients.destroy', $client->cpf) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-bs-toggle="tooltip" data-bs-title="Excluir cliente">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <td class="text-bg-dark text-start bold" colspan="1">
                    <a href="/clients/create" data-bs-toggle="tooltip" data-bs-title="Cadastrar cliente" class="nounderline-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </a>
                </td>
                <td class="text-bg-dark text-end bold" colspan="11">Total de clientes: {{ $clients->count() }}</td>
            </tfoot>
        </table>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="msg-toast" class="toast bg-success-subtle" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    <strong class="me-auto"> Aviso</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div id="msg-toast-body" class="toast-body">
                </div>
            </div>
        </div>

    </section>

    @if (session('msg'))
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        const msgToastBody = document.getElementById('msg-toast-body');
        msgToastBody.textContent = "{{session('msg')}}";

        const isError = false;
        const clasName = (isError) ? "bg-danger-subtle" : "bg-success-subtle";

        const msgToast = document.getElementById('msg-toast');
        msgToast.classList.add(clasName);

        const toast = new bootstrap.Toast(msgToast);

        toast.show();
    </script>
    @endif
@endsection