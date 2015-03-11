<?php
class ListaController extends BaseController {

	public function mostrarusuarios() {
		$usuarios = Usuarios::all();
		return View::make('usuarios.mostrar', array('usuarios' => $usuarios));
	}

	public function pagar($id) {
		$datos   = Usuarios::find($id);
		$planid  = $datos->plan_id;
		$plan    = Planes::find($planid);
		$bancos  = Bancos::all();
		return View::make('pagos.pagar', array('datos' => $datos, 'plan' => $plan, 'bancos' => $bancos));
	}
}