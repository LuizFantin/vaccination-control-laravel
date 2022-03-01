@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Cadastrar Vacinas</h6>
            </div>

          </div>

          <div class="card-body px-0 pb-2">
              <div style="margin-left: 15px">

                    <form action="{{ route('vacinas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                            <hr>

                            <label for="fabricante" class="form-label">Fabricante</label>
                            <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="Fabricante" required>
                            <hr>

                            <label for="lote" class="form-label">Lote</label>
                            <input type="text" class="form-control" id="lote" name="lote" placeholder="Lote" required>
                            <hr>

                            <label for="data_de_validade" class="form-label">Data de Validade</label>
                            <input type="date" class="form-control" id="data_de_validade" name="data_de_validade" required>
                            <hr>

                            <label for="quantidade_de_doses" class="form-label">Quantidade de Doses</label>
                            <input type="number" class="form-control" id="quantidade_de_doses" name="quantidade_de_doses" placeholder="Quantidade de Doses" required>
                            <hr>

                            <label for="doenca" class="form-label">Doença</label>
                            <input type="text" class="form-control" id="doenca" name="doenca" placeholder="doenca" required>
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

