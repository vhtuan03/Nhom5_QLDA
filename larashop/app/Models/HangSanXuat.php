<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HangSanXuat extends Model
{
	protected $table = 'hangsanxuat';
	protected $fillable = [		
		'tenhang',
		'tenhang_slug',
		'hinhanh',
	 ];	
	
	public function HangSanXuat(): HasMany
	{
		return $this->hasMany(HangSanXuat::class, 'tenhang', 'id');
	}
}