<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
	use HasFactory;
	protected $primaryKey = 'country_id';
	public $incrementing = false;

	protected $casts = [
		'region_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'country_name',
		'region_id'
	];

	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	public function locations()
	{
		return $this->hasMany(Location::class);
	}
}
