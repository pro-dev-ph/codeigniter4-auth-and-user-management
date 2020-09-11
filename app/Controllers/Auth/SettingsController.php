<?php
namespace App\Controllers\Auth;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\UserModel;
use App\Models\SettingsModel;
use App\Models\EmailconfigModel;

class SettingsController extends Controller
{

	/**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

    //--------------------------------------------------------------------

	public function __construct()
	{
		// start session
		$this->session = Services::session();
	}

    //--------------------------------------------------------------------

	/**
	 * Displays settings page.
	 */
	public function settings() 
	{
		$settings = new SettingsModel();
		$emailconfig = new EmailconfigModel();

		$system = $settings->where('id', 1)->first();
		$email = $emailconfig->where('id', 1)->first();

		return view('auth/settings', [
			'userData' => $this->session->userData, 
			'system' => $system, 
			'email' => $email
		]);
	}

	public function updateSystem()
	{
		$rules = [
			'id'	=> 'required|is_natural',
			'language'	=> 'required',
			'timezone'	=> 'required',
			'dateformat'	=> 'required',
			'timeformat'	=> 'required',
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$settings = new SettingsModel();

		$system = [
			'id'  	=> $this->request->getPost('id'),
			'language' 	=> $this->request->getPost('language'),
			'timezone' 	=> $this->request->getPost('timezone'),
			'dateformat' 	=> $this->request->getPost('dateformat'),
			'timeformat' 	=> $this->request->getPost('timeformat'),
			'iprestriction' 	=> $this->request->getPost('iprestriction'),
		];

		if (! $settings->save($system)) {
			return redirect()->back()->withInput()->with('errors', $settings->errors());
        }

        return redirect()->back()->with('success', lang('Auth.updateSuccess'));
	}

	public function updateEmail()
	{
		$rules = [
			'id'	=> 'required|is_natural',
			'fromname'	=> 'required',
			'fromemail'	=> 'required',
			'protocol'	=> 'required',
			'host'	=> 'required',
			'username'	=> 'required',
			'security'	=> 'required',
			'port'	=> 'required',
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$emailconfig = new EmailconfigModel();

		// set the password variable
		$hashedpass = null;
		
		// get the password text
		$password = $this->request->getPost('password');
		
		// pass the encrypted text to hashedpass variable
		if ($password !== null) 
		{
			$hashedpass = password_hash($password, PASSWORD_DEFAULT);
			// else value is null by default
		} 

		$email = [
			'id'  	=> $this->request->getPost('id'),
			'fromname' 	=> $this->request->getPost('fromname'),
			'fromemail' 	=> $this->request->getPost('fromemail'),
			'protocol' 	=> $this->request->getPost('protocol'),
			'host' 	=> $this->request->getPost('host'),
			'username' 	=> $this->request->getPost('username'),
			'security' 	=> $this->request->getPost('security'),
			'port' 	=> $this->request->getPost('port'),
			'password' 	=> $hashedpass
		];

		if (! $emailconfig->save($email)) {
			return redirect()->back()->withInput()->with('errors', $emailconfig->errors());
        }

        return redirect()->back()->with('success', lang('Auth.updateSuccess'));
	}
}
