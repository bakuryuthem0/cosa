<?php
class Bancos extends Eloquent {
	protected $table = 'bancos';

	public function cuentas() {
		return $this->hasMany('Num_cuenta','banco_id');
	}
}
?>