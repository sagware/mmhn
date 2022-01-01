<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Http\Request;
use App\User;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	
	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];
	
	public static $rules = array(

		'email'			=>	'required|unique:users,email|min:6|email'
		/*
		'passwd'			=>	'required|min:6|alphanum',
		'confirm_passwd'	=>	'same:passwd',
		'schzone'			=>	'required',
		'sch_exam_type'		=>	'required',
		'schname'			=>	'required',
		'prin_name'			=>	'required',
		'prin_phone'		=>	'required',
		'exam_phone'		=>	'required'*/
	);
	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	

}
