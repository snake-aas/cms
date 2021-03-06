<?php

namespace AdminModule;

use \Nette\Application\UI\Presenter;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter {

	public function createComponentCss()
	{
		return new \WebLoader\Nette\CssLoader(
			$this->context->webloader->cssAdminCompiler,
			$this->template->basePath . '/webtemp'
		);
	}


	public function createComponentJs()
	{
		return new \WebLoader\Nette\JavaScriptLoader(
			$this->context->webloader->jsAdminCompiler,
			$this->template->basePath . '/webtemp'
		);
	}

}
