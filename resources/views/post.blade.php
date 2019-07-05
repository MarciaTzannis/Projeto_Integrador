@extends('layouts.master')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-xs-10 view-post">



            @if (count($tarefasPendentes) > 0)
            <div class="panel panel-primary painel-primario">

                <div class="panel-body panel-chat" id="scrollbarBottom">

                    <ul class="chat">

                        @foreach($tarefasPendentes as $tarefa)

                        <li class="left clearfix">
                            <div class="pull-left">
                                <img class="photo-chat img-circle"src="{{$tarefa->UserLogado->photo}}" alt="User Avatar"
                                    class="img-circle">
                            </div>
                            <div class="chat-body clearfix dentrochat">

                                <div class="header">

                                    <small class=" text-muted pull-right"><span
                                            class="glyphicon glyphicon-time"></span>{{ $tarefa->data_hora }}</small>


                                    @isset($tarefa->UserLogado)
                                    <strong class="primary-font texto-chat"> {{ $tarefa->UserLogado->name }}</strong>
                                    @endisset
                                </div>
                                <!-- <small class="pull-right text-muted">
                                    <a href="/concluir-tarefa/{{ $tarefa->id }}">Excluir</a>
                                </small> -->

                                <p texto-chat2>{{ $tarefa->description }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @else
                <div class="panel panel-primary painel-primario">

                    <div class="panel-body panel-chat " id="scrollbarBottom">

                        <ul class="chat">

                            <li class="left clearfix">
                                <div class="pull-left">
                                    <img class="photo-chat img-circle"src="\img\{{ $logoModalidade }}" alt="User Avatar"
                                        class="img-circle">
                                </div>
                                <div class="chat-body clearfix dentrochat">

                                    <div class="header">

                                        <strong class="primary-font texto-chat"> Match Sports</strong>
                                    </div>

                                    <p texto-chat2>Converse por aqui com os seus amigos...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endif
                <form action="/nova-tarefa" method="POST">
                    <div class="panel-footer">
                        <div class="input-group">
                            @csrf
                            <input type="hidden" name="evento_fk" value="{{ $evento->id_evento }}">
                            <!-- <label class="form-control">Tarefa</label> -->
                            <textarea style="resize: none" name="description" class="form-control input-sm" placeholder="Escreva aqui sua mensagem..."></textarea>
                            <span class="input-group-btn">
                                <button class="btn btn-chat btn-lg" type="submit">
                                    Enviar</button>
                            </span>
                        </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="col-xs-2 view-post">
              <h1 class="post">{{ $nomeModalidade }}</h1>
          <img class="chat-logo img-circle"src="\img\{{ $logoModalidade }}" alt="Logo MatchSports"
              class="img-circle">
        </div>
    </div>

</div>

<script>
let scrollbarBottom = document.querySelector('#scrollbarBottom');

scrollbarBottom.scrollTop = scrollbarBottom.scrollHeight;

</script>
@endsection
