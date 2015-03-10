<?php
class ListaController extends BaseController {

	public function mostrarusuarios() {
		$usuarios = Usuarios::all();
		return View::make('usuarios.mostrar', array('usuarios' => $usuarios));
	}

	public function pagar() {
		
		return View::make('pagos.pagar', array('datos' => $datos));
	}
}