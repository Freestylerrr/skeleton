<?php

namespace AdminModule;

use Nette\Application\UI\Form;  
/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{
	
	protected function createComponentSignInForm()
	{
		$form = new Form();
		$form->addText('username', 'Username:')
			->setRequired('Please enter your username.')
                        ->setAttribute('placeholder', 'Username ... ');
		$form->addPassword('password', 'Password:')
			->setRequired('Please enter your password.')
                        ->setDefaultValue('Password ...')
                        ->setAttribute('placeholder', 'Password ...');
		$form->addCheckbox('remember', ' Remember me');

		$form->addSubmit('send', 'Sign in');

		// call method signInFormSucceeded() on success
		$form->onSuccess[] = $this->signInFormSucceeded;
		return $form;
	}


	public function signInFormSucceeded($form, $values)
	{
		if ($values->remember) {
			$this->getUser()->setExpiration('14 days', FALSE);
		} else {
			$this->getUser()->setExpiration('20 minutes', TRUE);
		}

		try {
			$this->getUser()->login($values->username, $values->password);
			$this->redirect('Homepage:');

		}   catch (\Nette\Security\AuthenticationException $e) {
                    $this->flashMessage($e->getMessage());                   
                    
                   
		}
	}


	
        
     
            
                   
        }


