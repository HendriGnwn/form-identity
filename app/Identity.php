<?php

namespace App;

class Identity extends BaseModel
{
    const DESTINATION_PATH = 'files/contents/';
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'identity';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_id', 
        'name', 
		'value', 
		'label', 
		'notes',
    ];
	
	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);
		
        $path = public_path(self::DESTINATION_PATH);
		$this->setPath($path);
		if (!is_dir($this->getPath())) {
			\File::makeDirectory($this->getPath(), '0755');
		}
	}
}
