@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Cidadãos</h6>
            </div>

          </div>

          <div class="card-body px-0 pb-2">
              <a type="button" class="btn btn-primary" style="margin-left: 17px" href="{{ route('cidadaos.criar') }}">Adicionar novo </a>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data de Nascimento</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefone</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cidade/Estado</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plano de Saúde?</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($cidadaos as $cidadao)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $cidadao->nome }}</h6>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{ \Carbon\Carbon::parse($cidadao->data_nascimento)->format('d/m/Y') }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $cidadao->telefone }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $cidadao->cidade }}/{{ $cidadao->uf }}</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            @if ($cidadao->possui_plano_de_saude)
                                <span class="badge badge-sm bg-gradient-success">Possui</span>
                            @else
                                <span class="badge badge-sm bg-gradient-danger">Não Possui</span>
                            @endif
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a type="button" class="btn btn-secondary" href="{{ route('cidadaos.vacinas', $cidadao->id) }}">Ver aplicações</a>
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

