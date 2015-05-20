<?PHP
Class register Extends Eloquent {
	protected $fillable = array('username', 'email','description');

	public static $rules=array(
		'name'=>'required|min:6|Unique:registers,username',
		'email'=>'required|email|Unique:registers,email',
		'description'=>'required'
	);

	public static function validate($data){
		return Validator::make($data,static::$rules);
	}
}