<?php
class Bancos extends Eloquent {
	protected $table = 'bancos';

	public function cuentas() {
		return $this->hasMany('num_cuenta','banco_id');
	}
}
?>