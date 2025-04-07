<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
	use HasFactory;
	protected $primaryKey = 'job_id';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'min_salary' => 'float',
		'max_salary' => 'float'
	];

	protected $fillable = [
		'job_id',
		'job_title',
		'min_salary',
		'max_salary'
	];

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}
}
