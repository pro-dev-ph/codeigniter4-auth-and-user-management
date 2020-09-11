<?php namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
	protected $table      = 'settings';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'language', 'timezone', 'dateformat', 'timeformat', 'iprestriction'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'settings' => [
			'language'	=> 'required',
			'timezone'	=> 'required',
			'dateformat'	=> 'required',
			'timeformat'	=> 'required',
			'iprestriction'	=> 'required',
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;


    //--------------------------------------------------------------------

    /**
     * Retrieves validation rule
     */
	public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

}
