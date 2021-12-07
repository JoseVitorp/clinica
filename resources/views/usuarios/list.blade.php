@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <a class="btn btn-success" href="{{ url ('usuarios/new')}}" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>     Novo Paciente</a>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg> Lista De Pacientes</h1>

                      <div class="table-responsive">
                    <table class="table table-sm table-bordered table-success table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Data da Consulta</th>
                            <th scope="col">Prontuario</th>
                            <th scope="col">Especialista</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                          </tr>
                        </thead>
                        <tbody>

                    @foreach( $usuarios as $u)


                          <tr>
                            <th scope="row">{{ $u->id }}</th>
                            <td>{{ $u->Name }}</td>
                            <td>{{ $u->Email }}</td>
                            <td>{{ $u->Endereco }}</td>
                            <td>{{ $u->City }}</td>
                            <td>{{ $u->Tel }}</td>
                            <td>{{ $u->Date }}</td>
                            <td>{{ $u->Prontuario }}</td>
                            <td>{{ $u->Especialista }}</td>
                            <td>
                                <a href="usuarios/{{ $u->id }}/edit" class="btn btn-info">Editar</button>

                            </td>

                            <td>
                                <form action="usuarios/delete/{{ $u->id }}" method="post">
                                @csrf
                                @method(' delete ')
                                <button class="btn btn-danger">Deletar</button>
                            </form>
                            </td>
                          </tr>
                       

                    @endforeach

                        
                </tbody>
            </table>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
