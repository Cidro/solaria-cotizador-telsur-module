<?php
namespace Asimov\Solaria\Modules\CotizadorTelsur\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model {

    protected $table = 'module_cotizador_telsur_config';

    protected $fillable = ['site_id'];

    /**
     * @param $value
     */
    public function setDataAttribute($value){
        $this->attributes['data'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getDataAttribute($value){
        return json_decode($value);
    }

}