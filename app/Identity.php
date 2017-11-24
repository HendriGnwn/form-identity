<?php

namespace App;

class Identity extends BaseModel
{
    const DESTINATION_PATH = 'files/identities/';
    
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
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone',
        'marital_status',
        'profesional_recomendation',
        'expected_salary',
        'address',
        'city',
        'postal_code',
        'country',
        'religion',
        'cv',
        'photo',
        'job_type',
        'school_name',
        'school_qualification',
        'school_start_year',
        'school_end_year',
        'is_graduated_yet',
        'cerfiticate_name',
        'cerfiticate_year',
        'cerfiticate_final_grade',
        'cerfiticate_document',
        'company_name',
        'company_position',
        'company_salary',
        'company_start_date',
        'company_end_date',
        'company_still_work',
        'company_responsible',
        'created_at',
        'updated_at',
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
    
    public function generateFilename($ext)
	{
		return str_slug($this->first_name . ' ' . $this->first_name . ' ' . rand(10000,99999)) . '.' . $ext;
	}
}
