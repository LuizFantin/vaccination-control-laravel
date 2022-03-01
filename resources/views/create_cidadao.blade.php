@extends('layouts.template')

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Cadastrar Cidadãos</h6>
            </div>

          </div>

          <div class="card-body px-0 pb-2">
              <div style="margin-left: 15px">

                    <form action="{{ route('cidadaos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                            <hr>

                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                            <hr>

                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento" required>
                            <hr>

                            <label for="nome_da_mae" class="form-label">Nome da Mãe</label>
                            <input type="text" class="form-control" id="nome_da_mae" name="nome_da_mae" placeholder="Nome da Mãe" required>
                            <hr>

                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-control" id="sexo" name="sexo" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outro</option>
                            </select>
                            <hr>

                            <label for="estado_civil" class="form-label">Estado Civil</label>
                            <select class="form-control" id="estado_civil" name="estado_civil" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>Solteiro</option>
                                <option>Casado</option>
                                <option>Divorciado</option>
                            </select>
                            <hr>

                            <label for="etnia" class="form-label">Etnia</label>
                            <select class="form-control" id="etnia" name="etnia" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>Indígena</option>
                                <option>Preto</option>
                                <option>Pardo</option>
                                <option>Branco</option>
                                <option>Amarelo</option>
                            </select>
                            <hr>

                            <label for="escolaridade" class="form-label">Escolaridade</label>
                            <select class="form-control" id="escolaridade" name="escolaridade" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>Ensino Fundamental</option>
                                <option>Ensino Médio</option>
                                <option>Ensino Superior</option>
                            </select>
                            <hr>

                            <label for="cns" class="form-label">CNS</label>
                            <input type="text" class="form-control" id="cns" name="cns" placeholder="Número da CNS" required>
                            <hr>

                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                            <hr>

                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
                            <hr>

                            <label for="logradouro" class="form-label">Logradouro</label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" required>
                            <hr>

                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
                            <hr>

                            <label for="numero" class="form-label">Número</label>
                            <input type="number" class="form-control" id="numero" name="numero" placeholder="Número" required>
                            <hr>

                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                            <hr>

                            <label for="uf" class="form-label">UF</label>
                            <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" required>
                            <hr>

                            <label for="possui_plano_de_saude" class="form-label">Possui plano de saúde?</label>
                            <select class="form-control" id="possui_plano_de_saude" name="possui_plano_de_saude" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
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

