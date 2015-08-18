<?php


namespace AdminModule;

use Nette\Application\UI\Form;


class UsersPresenter extends BasePresenter {
   
    /**
     * @var \App\Model\UserManager
     * @inject
     */
    public $userManager;
  
    
    public function renderDefault() {
                
              $this->template->users = $this->userManager->listUsers();
            }
            
     /** Render edit form based on ID and update data */
     public function renderEdit ($userId) {				
               
               $values = $this->userManager->getUser($userId)->toArray();		
               $this['addUserForm']->setValues($values);
		}            
     /*Component for add or edit users */
       protected function createComponentAddUserForm() {
            $form = new Form();
            $form->addText('name','Name: ')
                    ->addRule(FORM::FILLED,'Fill name!')
                    ->addRule(Form::MIN_LENGTH, 'Name must be at least %d characters lenght', 4);
            $form->addText('surname','Surname: ')
                    ->addRule(FORM::FILLED,'Fill surname!')
                    ->addRule(Form::MIN_LENGTH, 'Surname must be at least %d characters lenght', 4);
            $form->addText('username','Username: ')
                    ->addRule(FORM::FILLED,'Fill username!')
                    ->addRule(Form::MIN_LENGTH, 'Username must be at least %d characters lenght', 4);
            $form->addPassword('password','Password: ')
                     ->addRule(FORM::FILLED,'Fill password!')
                     ->addRule(Form::MIN_LENGTH, 'Password must be at least %d characters lenght.', 8);
            $form->addPassword('repassword','Confirm password: ')
                     ->addRule(Form::EQUAL, 'Password does not match!', $form['password'])
                     ->addConditionOn($form['password'], Form::VALID)
                     ->addRule(FORM::FILLED,'Retype password!');                     
            $form->addText('email','Email: ')
                    ->addRule(FORM::FILLED,'Fill email!')
                     ->addRule(Form::EMAIL, 'Not valid email adress!');
            $role = array(
                'Guest',
                'Moderator',
                'Administrator'
            );
            $form->addSelect('role','Role: ',$role);        
            $form->addSubmit('confirm','Save');
            $form->onSuccess[] = $this->addUserSuceeded;
            
            return $form;
        }        
            /*When previous form suceeded get data and save to the DB */
            public function addUserSuceeded($form) {
            
              $values = $form->getValues();  
              $userId = $this->getParameter('userId');
              $this->userManager->addEditUser($values,$userId);     
              $this->redirect('Users:');
              $this->flashMessage('Action success');
            }
           
            /** Signal used for delete user based on ID */
            public function handleDeleteUser($userId) {
               
               $this->userManager->deleteUser($userId);
               
            }
}
