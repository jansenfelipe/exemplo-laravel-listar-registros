<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraerp\Ordination\OrdinationTrait;

class Cliente extends Model {

    use OrdinationTrait;

    protected $fillable = ['documento', 'nome', 'razao_social'];

}
