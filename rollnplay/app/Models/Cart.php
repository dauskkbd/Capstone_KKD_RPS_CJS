<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $c_id
 * @property int $user_id
 * @property int $product_id
 * @property int $quantity
 *
 * @package App\Models
 */
class Cart extends Model
{
	protected $table = 'carts';
	protected $primaryKey = 'c_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'user_id',
		'product_id',
		'quantity'
	];
}
