<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $table = 'jogador';
    protected $fillable = ['nome','ataque','defesa','pontos_vida'];
    //tenha atencao em usar o fillable pela vulnerabilidade de atribuicao em massa! 
    //leia mais em https://laravel.com/docs/8.x/eloquent#mass-assignment
}
