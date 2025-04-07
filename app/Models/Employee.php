<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
	use HasFactory;
	protected $primaryKey = 'employee_id';
	public $incrementing = true;
	public $timestamps = true;

	protected $casts = [
		'hire_date' => 'datetime',
		'job_id' => 'int',
		'salary' => 'float',
		'manager_id' => 'int',
		'department_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'phone_number',
		'hire_date',
		'job_id',
		'salary',
		'manager_id',
		'department_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function job()
	{
		return $this->belongsTo(Job::class);
	}

	public function manager()
	{
		return $this->belongsTo(Employee::class, 'manager_id');
	}

	public function dependents()
	{
		return $this->hasMany(Dependent::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class, 'manager_id');
	}
}
