<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Location extends Model
{
	use HasFactory;
	public $incrementing = true;
	public $timestamps = true;
	protected $primaryKey = 'location_id';

	protected $fillable = [
		'street_address',
		'postal_code',
		'city',
		'state_province',
		'country_id'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function departments()
	{
		return $this->hasMany(Department::class);
	}
}
