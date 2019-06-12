<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'id_evento';

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getRegiao(){
        return $this->regiao;
    }

    public function getLocal(){
        return $this->local;
    }

    public function getCidadeUf(){
        return $this->cidade_uf;
    }

    public function getData(){
        return $this->data;
    }

    public function getHora(){
        return $this->hora;
    }

    /* public function getSlug(){
        return $this->slug;
    }
    */

    public function mensagem() {
        return $this->hasMany(Mensagem::Class, 'evento_fk', 'id_evento');
    }

    public function modalidades() {
        return $this->hasOne(Modalidades::Class, 'modalidade_fk', 'id_modalidade');
    }
}

