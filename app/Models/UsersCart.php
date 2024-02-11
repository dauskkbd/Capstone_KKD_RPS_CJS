<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersCart
 * 
 * @property int $uc_id
 * @property int $product_id
 * @property int $user_id
 *
 * @package App\Models
 */
class UsersCart extends Model
{
	protected $table = 'users_carts';
	protected $primaryKey = 'uc_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'user_id'
	];
}
