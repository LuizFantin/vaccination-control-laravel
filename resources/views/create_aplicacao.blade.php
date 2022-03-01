@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Cadastrar Aplicação</h6>
            </div>

          </div>

          <div class="card-body px-0 pb-2">
              <div style="margin-left: 15px">

                    <form action="{{ route('aplicacoes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">

                            <label for="cidadao_id" class="form-label">Cidadão</label>
                            <select class="form-control" id="cidadao_id" name="cidadao_id" required>
                                <option selected disabled>Escolha uma opção</option>
                                @foreach ($cidadaos as $cidadao)
                                    <option value="{{ $cidadao->id }}">{{ $cidadao->nome }}</option>
                                @endforeach
                            </select>
                            <hr>
                            <label for="vacina_id" class="form-label">Vacina</label>
                            <select class="form-control" id="vacina_id" name="vacina_id" required>
                                <option selected disabled>Escolha uma opção</option>
                                @foreach ($vacinas as $vacina)
                                    <option value="{{ $vacina->id }}">{{ $vacina->nome }}</option>
                                @endforeach
                            </select>
                            <hr>

                            <label for="dose" class="form-label">Dose</label>
                            <input type="number" class="form-control" id="dose" name="dose" placeholder="Dose" required>
                            <hr>

                            <label for="data_de_aplicacao" class="form-label">Data de Aplicação</label>
                            <input type="date" class="form-control" id="data_de_aplicacao" name="data_de_aplicacao" placeholder="Data de Aplicação" required>
                            <hr>

                            <label for="aplicador" class="form-label">Nome do Aplicador</label>
                            <input type="text" class="form-control" id="aplicador" name="aplicador" placeholder="Nome do Aplicador" required>
                            <hr>

                            <label for="unidade_de_saude" class="form-label">Unidade de Saúde</label>
                            <input type="text" class="form-control" id="unidade_de_saude" name="unidade_de_saude" placeholder="Unidade de Saúde" required>
                            <hr>


                            <button type="submit" class="btn btn-primary">Criar</button>
                        </div>
                    </form>

              </div>

          </div>
        </div>
      </div>
    </div>
</div>

@endsection

