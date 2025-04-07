<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
	use HasFactory;
	protected $primaryKey = 'department_id';
	public $incrementing = true;
	public $timestamps = true;

	protected $casts = [
		'location_id' => 'int'
	];

	protected $fillable = [
		'department_name',
		'location_id'
	];

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}
}
