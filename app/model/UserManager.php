<?php

namespace App\Model;

use Nette,
	Nette\Utils\Strings,
	Nette\Security\Passwords;


/**
 * Users management.
 */
class UserManager extends Nette\Object implements Nette\Security\IAuthenticator
{

	/** @var Nette\Database\Context */
	public $database;

        const

        TABLE_NAME = 'users',
        COLUMN_ID = 'id',
        COLUMN_NAME = 'username',
        COLUMN_PASSWORD_HASH = 'password',
        COLUMN_ROLE = 'role';

        

	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}
        
  
    

	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	 public function authenticate(array $credentials) {
        list($username, $password) = $credentials;

        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_NAME, $username)->fetch();
       
        if (!$row) {
            throw new Nette\Security\AuthenticationException('The username is incorrect.', self::IDENTITY_NOT_FOUND);
           
        }elseif (!Passwords::verify($password, $row[self::COLUMN_PASSWORD_HASH])) {            
            throw new Nette\Security\AuthenticationException('The password is incorrect.', self::INVALID_CREDENTIAL);
        } elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD_HASH])) {
            $row->update(array(
                self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
            ));
        }

        $arr = $row->toArray();
        unset($arr[self::COLUMN_PASSWORD_HASH]);
        return new Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
    }


	/**
	 * Function for add or edit user
	 */
	public function addEditUser($values,$userId)
	{
              /*Unset field repassword, because it's not in DB*/
                unset($values["repassword"]);
                /*Hash password with Nette util */
                $values['password'] = Passwords::hash($values["password"]);		
            /* If user exists update row */
            if($userId) {
                     
                $this->database->table('users')
                        ->where('id',$userId)                       
                        ->update($values);                
                }
            /*Else create new entry with data from user form */    
            else {                   
            
                $this->database->table('users')->insert($values); 
                   
                }
                    
	}
        /*Get all users data from table */
       public function listUsers() {
            
           return $this->database->table('users');
        }
        /* Function for delete user, based on ID */
        public function deleteUser($userId) {
           
            $this->database->table('users')
                    ->where('id=?',$userId)
                    ->delete();
        }
        /* Get single user record from DB base on ID */
        public function getUser($userId) {
          	
            return $this->database->table('users')
		->where('id',$userId)
		->fetch();
       
        
        }

}
