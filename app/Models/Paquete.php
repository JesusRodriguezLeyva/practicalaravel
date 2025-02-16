<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $idPaquete
 * @property string $Clave
 * @property integer $idDecoracion
 * @property integer $Cantidad
 * @property float $Precio
 * @property Decoracione $decoracione
 */
class Paquete extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idPaquete';

    /**
     * @var array
     */
    protected $fillable = ['Clave', 'idDecoracion', 'Cantidad', 'Precio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function decoracione()
    {
        return $this->belongsTo('App\Models\Decoracione', 'idDecoracion', 'idDecoracion');
    }
}
