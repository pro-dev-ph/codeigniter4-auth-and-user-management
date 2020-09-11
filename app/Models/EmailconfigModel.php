<?php namespace App\Models;

use CodeIgniter\Model;

class EmailconfigModel extends Model
{
	protected $table      = 'emailconfig';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'fromemail', 'fromname', 'protocol', 'host', 'username', 'security', 'port', 'password'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'emailconfig' => [
			'fromemail'	=> 'required',
			'fromname'	=> 'required',
			'protocol'	=> 'required',
			'host'	=> 'required',
			'username'	=> 'required',
			'security'	=> 'required',
			'port'	=> 'required',
			'password'	=> 'required',
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
