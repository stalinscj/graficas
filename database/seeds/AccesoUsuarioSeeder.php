<?php

use App\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class AccesoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idUsuarios = [];
    	$idUsuarios[] = Usuario::where('email', 'cejonio@gmail.com')->value('id');
        $idUsuarios[] = Usuario::where('email', 'secdesalv@gmail.com')->value('id');
        $idUsuarios[] = Usuario::where('email', 'lperroni@hotmail.com')->value('id');

    	foreach ($idUsuarios as $idUsuario) {
	        $rutas = Route::getRoutes()->getRoutes();
	     	foreach ($rutas as $ruta) {
	     		foreach ($ruta->methods as $metodo) {
	     		    try{
    	     		    DB::table('accesos_usuarios')->insert([
    						'usuario_id' => $idUsuario,
    						'ruta'       => $ruta->uri,
    						'metodo'     => $metodo,
    						'nombre'     => isset($ruta->action['as']) ? $ruta->action['as']: null
    	     		    ]);
	     		    }catch(Exception $e){}
	     		}
	        }
    	}
    }
}
