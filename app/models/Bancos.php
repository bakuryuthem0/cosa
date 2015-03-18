<?php
class Bancos extends Eloquent {
	protected $table = 'bancos';

	public function cuentas() {
		return $this->hasMany('NumCuenta','banco_id');
	}
}
?>