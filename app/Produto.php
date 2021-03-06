<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
     * Definindo atributos
     * 
     * @var array
     */
    protected $fillable = [
        'nome','estoque','preco'
    ];

    /**
     * Relacionamento com Turmas
     */
    public function turmas(){
        return $this->belongsToMany('App\Turma', 'turmas_materiais');
    }

    /**
     * Relacionamento com Vendas
     */
    public function vendas(){
        return $this->belongsToMany('App\Venda', 'vendas_itens')->withPivot('preco','quantidade');
    }

    /**
     * Dispensando o uso de timestamps
     * 
     * @var bool
     */
    public $timestamps = false;
}
