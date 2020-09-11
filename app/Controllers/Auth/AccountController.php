<?php
namespace App\Controllers\Auth;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\UserModel;

class AccountController extends Controller
{

	/**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;


    //--------------------------------------------------------------------

	public function __construct()
	{
		// start session
		$this->session = Services::session();
	}

    //--------------------------------------------------------------------

	/**
	 * Displays account settings.
	 */
	public function account()
	{
		if (! $this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		return view('auth/starter', [
			'userData' => $this->session->userData,
		]);
	}

	//--------------------------------------------------------------------

	/**
	 * Displays profile page.
	 */
	public function profile()
	{
		if (! $this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		return view('auth/profile', [
			'userData' => $this->session->userData,
		]);
	}
	
	//--------------------------------------------------------------------

	/**
	 * Updates regular account settings.
	 */
	public function updateProfile()
	{
		// update user, validation happens in model
		$users = new UserModel();
		$getRule = $users->getRule('updateProfile');
		$users->setValidationRules($getRule);

		$user = [
			'id'  	=> $this->session->get('userData.id'),
			'name' 	=> $this->request->getPost('name'),
			'firstname' 	=> $this->request->getPost('firstname'),
			'lastname' 	=> $this->request->getPost('lastname'),
			'email' 	=> $this->request->getPost('email')
		];

		if (! $users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }

        // update session data
        $this->session->push('userData', $user);

        return redirect()->to('profile')->with('success', lang('Auth.updateSuccess'));
	}

    //--------------------------------------------------------------------

	/**
	 * Updates regular account settings.
	 */
	public function updateAccount()
	{
		// update user, validation happens in model
		$users = new UserModel();
		$getRule = $users->getRule('updateAccount');
		$users->setValidationRules($getRule);

		$user = [
			'id'  	=> $this->session->get('userData.id'),
			'name' 	=> $this->request->getPost('name')
		];

		if (! $users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }

        // update session data
        $this->session->push('userData', $user);

        return redirect()->to('account')->with('success', lang('Auth.updateSuccess'));
	}

    //--------------------------------------------------------------------

	/**
	 * Handles password change.
	 */
	public function changePassword()
	{
		// validate request
		$rules = [
			'password' 	=> 'required|min_length[5]',
			'new_password' => 'required|min_length[5]',
			'new_password_confirm' => 'required|matches[new_password]'
		];

		if (! $this->validate($rules)) {
			return redirect()->to('profile')->withInput()
				->with('errors', $this->validator->getErrors());
		}

		// check current password
		$users = new UserModel();

		$user = $users->find($this->session->get('userData.id'));

		if (
			! $user ||
			! password_verify($this->request->getPost('password'), $user['password_hash'])
		) {
			return redirect()->to('profile')->withInput()->with('error', lang('Auth.wrongCredentials'));
		}

		// update user's password
		$updatedUser['id'] = $this->session->get('userData.id');

		$updatedUser['password'] = $this->request->getPost('new_password');

		$users->save($updatedUser);

		// redirect to account with success message
		return redirect()->to('profile')->with('success', lang('Auth.passwordUpdateSuccess'));
	}

    //--------------------------------------------------------------------

	/**
	 * Deletes user account.
	 */
	public function deleteAccount()
	{
		// check current password
		$users = new UserModel();
		
		$user = $users->find($this->session->get('userData.id'));

		if (
			! $user ||
			! password_verify($this->request->getPost('password'), $user['password_hash'])
		) {
			return redirect()->back()->withInput()->with('error', lang('Auth.wrongCredentials'));
		}

		// delete account from DB
		$users->delete($this->session->get('userData.id'));

		// log out user
		$this->session->remove(['isLoggedIn', 'userData']);

		// redirect to register with success message
		return redirect()->to('register')->with('success', lang('Auth.accountDeleted'));
	}

}
