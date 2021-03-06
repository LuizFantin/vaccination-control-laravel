@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Aplicações de {{ $vacina->nome }}</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cidadão</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dose</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unidade de Saúde</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aplicador</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data da Aplicação</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($aplicacoes as $aplicacao)
                    <tr>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $aplicacao->cidadao->nome }}</p>
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

