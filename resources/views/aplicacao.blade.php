@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Aplicações</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <a type="button" class="btn btn-primary" style="margin-left: 17px" href="{{ route('aplicacoes.criar') }}">Adicionar novo </a>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cidadão</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Vacina</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dose</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unidade de Saúde</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome do Aplicador</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data da Aplicação</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($aplicacoes as $aplicacao)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $aplicacao->cidadao->nome }}</h6>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $aplicacao->vacina->nome }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $aplicacao->dose }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $aplicacao->unidade_de_saude }}</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-xs font-weight-bold">{{ $aplicacao->aplicador }}</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-xs font-weight-bold">{{  \Carbon\Carbon::parse($aplicacao->data_de_aplicacao)->format('d/m/Y')  }}</span>
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

