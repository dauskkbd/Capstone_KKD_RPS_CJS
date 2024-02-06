<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property string $name
 * @property int $w_price
 * @property int $price
 * @property string $description
 * @property string $genre
 * @property int $stock
 * @property string|null $image
 * @property string|null $offers
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'w_price' => 'int',
		'price' => 'int',
		'stock' => 'int'
	];

	protected $fillable = [
		'name',
		'w_price',
		'price',
		'description',
		'genre',
		'stock',
		'image',
		'offers'
	];
}
