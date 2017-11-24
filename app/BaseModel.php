<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
	const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 0;
	
	const IS_VIDEO_TRUE = 1;
	const IS_VIDEO_FALSE = 0;
	
	private $_path;
	
    /**
	 * @return array
	 */
    public static function statusLabels()
	{
		return [
			self::STATUS_ACTIVE => 'Active',
			self::STATUS_INACTIVE => 'Inactive',
		];
	}
	
	/**
	 * @return string
	 */
	public function getStatusText()
	{
		$list = self::statusLabels();
		
		return $list[$this->status] ? $list[$this->status] : $this->status;
	}
	
	/**
	 * @return boolean
	 */
	public function getIsStatusActive()
	{
		return $this->status == self::STATUS_ACTIVE;
	}
	
	/**
	 * @param type $query
	 * @return query
	 */
	public function scopeActived($query)
	{
		return $query->where($this->table . '.status', self::STATUS_ACTIVE);
	}
	
	/**
	 * @param type $query
	 * @return query
	 */
	public function scopeOrdered($query)
	{
		return $query->orderBy($this->table . '.order');
	}
	
	public function scopeCategory($query, $category)
	{
		return $query->where($this->table . '.category', '=', $category);
	}
	
	/**
	 * set path
	 * 
	 * @param string $value
	 */
	public function setPath($value)
	{
		$this->_path = $value;
	}
	
	/**
	 * @return string
	 */
	public function getPath()
	{
		return $this->_path;
	}
}
