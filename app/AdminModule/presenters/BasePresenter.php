<?php

namespace FrontModule;

use \Nette\Application\UI\Presenter;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter {

	public function createComponentCss()
	{
		return new \WebLoader\Nette\CssLoader(
			$this->context->webloader->cssDefaultCompiler, // service generated by extension
			$this->template->basePath . '/webtemp'
		);
	}


	public function createComponentJs()
	{
		return new \WebLoader\Nette\JavaScriptLoader(
			$this->context->webloader->jsDefaultCompiler, // service generated by extension
			$this->template->basePath . '/webtemp'
		);
	}

}
