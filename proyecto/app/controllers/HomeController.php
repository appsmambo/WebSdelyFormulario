<?php

class HomeController extends BaseController {

	public function index()
	{
		$departamentos = UbigeoDepartamento::all()->toArray();
		return View::make('index')->with('departamentos', $departamentos);
	}
	
	public function gracias()
	{
		return View::make('gracias');
	}
	
	public function ajaxProvincias()
	{
		$departamento = Input::get('id', 15);
		$provincias = UbigeoProvincia::where('id_departamento', $departamento)->get();
		return $provincias->toJson();
	}
	
	public function ajaxDistritos()
	{
		$provincia = Input::get('id', 127);
		$distritos = UbigeoDistrito::where('id_provincia', $provincia)->get();
		return $distritos->toJson();
	}
	
	public function registro()
	{
		$cabeceras = 'From: catalogo@sdely.com' . "\r\n" .
					'Reply-To: catalogo@sdely.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		
		$registro = new Registro();
		$registro->nombres		= ucwords(strtolower(Input::get('nombres')));
		$registro->apellidos	= ucwords(strtolower(Input::get('apellidos')));
		$registro->dni			= Input::get('dni');
		$registro->celular		= Input::get('celular');
		$registro->telefono		= Input::get('telefono');
		$registro->email		= strtolower(Input::get('correo'));
		$registro->informacion	= Input::get('informacion');
		$registro->distrito		= Input::get('distrito');
		$registro->direccion	= Input::get('direccion');
		$registro->como			= Input::get('como');
		$registro->horario		= Input::get('horario');
		$registro->ip			= Request::getClientIp(true);
		$registro->save();
		
		$mensaje = 'Nuevo contacto desde la web:' . "\r\n\r\n"
					. 'Nombres: ' . $registro->nombres . "\r\n"
					. 'Apellidos: ' . $registro->apellidos . "\r\n"
					. 'Dni: ' . $registro->dni . "\r\n"
					. 'Celular: ' .$registro->celular . "\r\n"
					. 'Telefono: ' . $registro->telefono . "\r\n"
					. 'Email: ' . $registro->email . "\r\n"
					. 'Informacion para: ' . $registro->informacion . "\r\n"
					. 'Departamento: ' . Input::get('dpto') . "\r\n"
					. 'Provincia: ' . Input::get('prov') . "\r\n"
					. 'Distrito: ' . Input::get('dist') . "\r\n"
					. 'Direccion: ' . $registro->direccion . "\r\n"
					. 'Como se entero: ' . $registro->como . "\r\n"
					. 'Horario de contacto: ' . $registro->horario . "\r\n"
					. 'Ip: ' . $registro->ip . "\r\n";
		
		mail('quintanilla.peru@gmail.com', 'Contacto desde la web', $mensaje, $cabeceras);
		
		return Redirect::to('gracias');
	}

}
