<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dependent extends Model
{
	use HasFactory;
	protected $primaryKey = 'dependent_id';
	public $incrementing = true;
	public $timestamps = true;

	protected $casts = [
		'employee_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'relationship',
		'employee_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
