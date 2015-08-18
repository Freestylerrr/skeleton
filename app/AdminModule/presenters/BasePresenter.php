<?php

namespace AdminModule;
/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends \Nette\Application\UI\Presenter
{
    /**
		 * @var \App\Model\Articles
		 * @inject
		 */

		public $articles;
    
		public function startup ()
		{
			parent::startup();
                        
			if ($this->name != 'Admin:Sign') {
				if (! $this->user->isLoggedIn()) {
					$this->flashMessage('Nejsi přihlášen!');
					$this->redirect('Sign:in');
				}
			} else {
				if ($this->user->isLoggedIn()) {
					$this->redirect('Homepage:');

				}
			}
		}
                public function handleLogOut ()
		{
			$this->user->logOut();
			$this->flashMessage('Sign out was sucessful');
			$this->redirect('Sign:in');

		}
                              
}
            