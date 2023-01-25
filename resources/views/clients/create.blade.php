@extends('base')
@section('content')
    <div id="content-wrap">
        <section class="container">
        <h1 class="display-4 text-center  mt-5 mb-5">Novo Cliente</h1>
            <div class="row">
                <div class="col-md-12 mb-12">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                        <h5 class="mb-0">Cadastro de cliente</h5>
                        </div>
                        <div class="card-body">
                            <form class="form" method="POST" action="{{ route('clients.store') }}">
                            @csrf
                                <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-2">
                                    <input type="text" id="name" name="name" class="form-control" required/>
                                    <label class="form-label" for="Nome">Nome</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline mb-2">
                                    <input type="text" id="cpf" name="cpf" class="form-control" required/>
                                    <label class="form-label" for="CPF">CPF</label>
                                    </div>
                                </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="email" id="email" name="email" class="form-control" required/>
                                    <label class="form-label" for="Email">Email</label>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-outline mb-2">
                                        <input type="text" id="phone" name="phone" class="form-control" required/>
                                        <label class="form-label" for="Telefone">Telefone</label>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-outline mb-2">
                                        <input type="text" id="cep" name="cep" class="form-control" onChange="populateFieldsWithCep(this.value);" required/>
                                        <label class="form-label" for="CEP">CEP</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-2">
                                <input type="text" id="street" name="street" class="form-control" required/>
                                <label class="form-label" for="Logradouro">Logradouro</label>
                                </div>
                                <div class="form-outline mb-2">
                                <input type="text" id="neighborhood" name="neighborhood" class="form-control" required/>
                                <label class="form-label" for="Bairro">Bairro</label>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-outline mb-2">
                                        <input type="number" id="number" name="number" class="form-control" required/>
                                        <label class="form-label" for="Numero">Numero</label>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-outline mb-2">
                                        <input type="text" id="city" name="city" class="form-control" required/>
                                        <label class="form-label" for="Cidade">Cidade</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-outline mb-2">
                                        <input type="text" id="state" name="state" class="form-control" required/>
                                        <label class="form-label" for="Estado">Estado</label>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-outline mb-5">
                                        <input type="text" id="country" name="country" class="form-control" required/>
                                        <label class="form-label" for="País">País</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-check d-flex justify-content-center mb-2">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="CADASTRAR">
                                    </input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="msg-toast" class="toast bg-danger-subtle" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
            </svg>
                <strong class="me-auto"> Aviso</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div id="msg-toast-body" class="toast-body">
                Esse CEP não foi encontrado!
            </div>
        </div>
    </div>
@endsection