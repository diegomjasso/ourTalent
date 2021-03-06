<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposactividad extends Model	{
	protected	$table	=	'tipos_de_actividad';

	const	CREATED_AT	=	'fecha_de_creacion';
  const	UPDATED_AT	=	'fecha_de_actualizacion';

	protected	$fillable	=	[	'id',	'tipo',  'estatus',	'fecha_de_creacion',	'fecha_de_actualizacion'];

	protected	$hidden	=	[];

	public  function  actividad()	{
		return $this->belongsTo('App\Actividades');
	}
}
