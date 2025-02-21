<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $idDecoracion
 * @property string $nombreMaterial
 * @property Paquete[] $paquetes
 */
class Decoracione extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idDecoracion';

    /**
     * @var array
     */
    protected $fillable = ['nombreMaterial'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paquetes()
    {
        return $this->hasMany('App\Models\Paquete', 'idDecoracion', 'idDecoracion');
    }
}
