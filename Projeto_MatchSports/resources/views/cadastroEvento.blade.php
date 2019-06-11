@extends('layouts.master')

@section('content')


<div class="container" id="wrap">
    <form id="formulario">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                    <legend><b>Crie seu Evento!</b></legend>
                    <h4><em>Match Sports, o melhor jeito de encontrar seu parceiro.</em></h4>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="name">Nome do Evento</label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>


                        <div class="form-group col-md-12">
                            <label for="Descrição">Descreva um pouco mais sobre seu evento</label>
                            <input type="text" class="form-control" id="descrição" placeholder="Detalhes do Evento">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Avenida/Rua">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="inputEstado" >Estado</label>
                            <select name="estado" class="form-control">
                                <option value="estado">Selecione o Estado</option>
                                <option value="ac">Acre</option>
                                <option value="al">Alagoas</option>
                                <option value="am">Amazonas</option>
                                <option value="ap">Amapá</option>
                                <option value="ba">Bahia</option>
                                <option value="ce">Ceará</option>
                                <option value="df">Distrito Federal</option>
                                <option value="es">Espírito Santo</option>
                                <option value="go">Goiás</option>
                                <option value="ma">Maranhão</option>
                                <option value="mt">Mato Grosso</option>
                                <option value="ms">Mato Grosso do Sul</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="pa">Pará</option>
                                <option value="pb">Paraíba</option>
                                <option value="pr">Paraná</option>
                                <option value="pe">Pernambuco</option>
                                <option value="pi">Piauí</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="rn">Rio Grande do Norte</option>
                                <option value="ro">Rondônia</option>
                                <option value="rs">Rio Grande do Sul</option>
                                <option value="rr">Roraima</option>
                                <option value="sc">Santa Catarina</option>
                                <option value="se">Sergipe</option>
                                <option value="sp">São Paulo</option>
                                <option value="to">Tocantins</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Data do Evento</label>
                        <div class="row">

                        <div class="form-group col-md-4" >
                            <input type="text" id="datepicker" class="form-control"></<input>
                                
                        </div>
                                <div class="form-group col-md-6">
                                    <input type="time" name="Horário" class="form-control">
                                </div>
                    </div>

                        <div class="form-group col-md-12">
                            <label>Horário do Evento</label>
                            <div class="row">


                                <div class="form-group col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">Termos e Condições
                                        </label>
                                    </div>


                                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                                        Crie seu Evento
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </form>
</div>

@endsection
