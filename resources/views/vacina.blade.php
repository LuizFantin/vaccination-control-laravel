@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Vacinas</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <a type="button" class="btn btn-primary" style="margin-left: 17px" href="{{ route('vacinas.criar') }}">Adicionar novo </a>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data de Validade</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fabricante</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doença</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lote</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($vacinas as $vacina)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $vacina->nome }}</h6>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{ \Carbon\Carbon::parse($vacina->data_de_validade)->format('d/m/Y') }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $vacina->fabricante }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $vacina->doenca }}</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">{{ $vacina->lote }}</span>

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

