<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaiViet extends Model
{
    protected $table = 'baiviet';

	public function ChuDe(): BelongsTo
		 {
			return $this->belongsTo(ChuDe::class, 'chude_id', 'id');
		 }

	 public function NguoiDung(): BelongsTo
		{
			return $this->belongsTo(NguoiDung::class, 'nguoidung_id', 'id');
		}

		public function BinhLuanBaiViet(): HasMany
		{
			return $this->hasMany(BinhLuanBaiViet::class, 'baiviet_id', 'id');
		}
}
