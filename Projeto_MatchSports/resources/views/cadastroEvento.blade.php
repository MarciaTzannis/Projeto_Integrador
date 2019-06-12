@extends('layouts.master')

@section('content')

<!-- Vericação de erros -->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
 @endif
</div>

<div class="container" id="wrap">
    <div id="formulario">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/feed" method="post" accept-charset="utf-8" class="form" role="form">
                @csrf
                    <legend><b>Crie seu Evento!</b></legend>
                    <h4><em>Match Sports, o melhor jeito de encontrar seu parceiro.</em></h4>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="name">Nome do Evento</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>


                        <div class="form-group col-md-12">
                            <label for="Descrição">Descreva um pouco mais sobre seu evento</label>
                            <input type="text" class="form-control" id="descrição" placeholder="Detalhes do Evento">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress">Local do evento.</label>
                            <input type="text" class="form-control" id="inputAddress"
                                placeholder="Ex: Parque, Praça, Clube, etc...">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputCity">Cidade-UF</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>


                        <div class="form-group col-md-12">
                            <label for="inputRegiao">Região da cidade</label>
                            <select name="regiao" class="form-control">
                                <option value="regiao">Selecione sua região:</option>
                                <option value="centro">Centro</option>
                                <option value="zn">Zona Norte</option>
                                <option value="zs">Zona Sul</option>
                                <option value="zl">Zona Leste</option>
                                <option value="zo">Zona Oeste</option>
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                                
                                <label>Data</label>
                                <input type="text" id="datepicker" class="form-control"></<input>
                                
                                
                        </div>
                        <div class="form-group col-md-6">
                                
                                <label>Hora</label>
                                <input type="text" id="datepicker" class="form-control"></<input>
                                
                                
                        </div>
                    </div>
                    
                        
                        <div class="form-group col-md-6">
                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                            Crie seu Evento
                        </button>
                    </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
< /!-->

<
script src = "https://code.jquery.com/jquery-1.12.4.js" >
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy HH:MM:ss',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
            'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov',
            'Dez'
        ]
    });

});
</script>

@endsection