<?php

namespace FrontModule;

use \Nette\Application\UI\Presenter;
use WebLoader\Nette\CssLoader;
use WebLoader\Nette\JavaScriptLoader;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter {

	public function createComponentCss() {
		return new CssLoader(
			$this->context->webloader->cssFrontCompiler,
			$this->template->basePath . '/webtemp'
		);
	}


	public function createComponentJs()
	{
		return new JavaScriptLoader(
			$this->context->webloader->jsFrontCompiler,
			$this->template->basePath . '/webtemp'
		);
	}

}
