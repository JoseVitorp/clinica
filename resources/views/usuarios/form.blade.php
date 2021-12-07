@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('usuarios') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        @if( Request::is('*/edit'))
                        <form action="{{ url('usuarios/update')}} / {{$usuario->id}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Nome:</label>
                              <input type="text" name="name" class="form-control" value="{{ $usuario->Name }}">
                            </div>
    
                            <div class="mb-3"> 
                                <label for="exampleInputEmail1">E-mail:</label>
                                <input type="email" name="email" class="form-control" value="{{ $usuario->Email }}">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1">Endereco:</label>
                                <input type="text" name="endereco" class="form-control" value="{{ $usuario->Endereco }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1"> Cidade:</label>
                                <input type="text" name="City" class="form-control" value="{{ $usuario->City }}">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1">Contato:</label>
                                <input type="text" name="tel" class="form-control" value="{{ $usuario->Tel }}">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1">Data da consulta:</label>
                                <input type="datetime-local" name="date" class="form-control" value="{{ $usuario->Date }}">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1">Prontuario:</label>
                                <input type="text" name="prontuario" class="form-control" value="{{ $usuario->Prontuario }}">
                              </div>

                              <div class="mb-3">
                                <select name="especialista" class="form-select" aria-label="Default select example value="{{ $usuario->Especialista }}">
                                  <option selected>Selecione o especialista</option>
                                  <option value="cardiologista">Cardiologista</option>
                                  <option value="neurologista">Neurologista</option>
                                  <option value="clinico-geral">Clinico Geral</option>
                                  <option value="endocrinologista">Endocrinologista</option>
                                  <option value="geriatra">Geriatra</option>
                                  <option value="dermatologista">Dermatologista</option>
                                </select>
                              </div>
          

                            <button type="submit" class="btn btn-primary">Atualizar</button>
                          </form>
    


                        @else
                          


                    <form action="{{ url('usuarios/add')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome:</label>
                          <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>

                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Endereço::</label>
                        <input type="text" name="endereco" class="form-control">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cidade:</label>
                        <input type="text" name="city" class="form-control">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefone para contato:</label>
                        <input type="tel" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="dateHelp">
                      </div>
                    

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Data e hora da Consulta:</label>
                        <input type="datetime-local" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="dateHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Prontuario:</label>
                        <input type="text" name="prontuario" class="form-control" id="exampleInputEmail1" aria-describedby="dateHelp">
                      </div>


                      <div class="mb-3">
                      <select name="especialista" class="form-select" aria-label="Default select example">
                        <option selected>Selecione o especialista</option>
                        <option value="cardiologista">Cardiologista</option>
                        <option value="neurologista">Neurologista</option>
                        <option value="clinico-geral">Clinico Geral</option>
                        <option value="endocrinologista">Endocrinologista</option>
                        <option value="geriatra">Geriatra</option>
                        <option value="dermatologista">Dermatologista</option>
                      </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </form>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
