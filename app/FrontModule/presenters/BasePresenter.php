<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

	protected function createComponentCss() {
		$files = new \WebLoader\FileCollection(ASSETS_DIR . '/css');
		$files->addFiles(array(
				'jquery-ui-1.9.2.custom.min.css',
				'main.less',
			)
		);

		$compiler = \WebLoader\Compiler::createCssCompiler($files, WWW_DIR . '/css');

		$compiler->addFileFilter(new \WebLoader\Filter\LessFilter());

		return new \WebLoader\Nette\CssLoader($compiler, $this->template->basePath . '/css');
	}

	protected function createComponentJs() {
		$files = new \WebLoader\FileCollection(ASSETS_DIR . '/js');

		$files->addFiles(array(
				'jquery-1.8.3.min.js',
				'jquery-ui-1.9.2.custom.min.js',
				'main.js',
			)
		);

		$compiler = \WebLoader\Compiler::createJsCompiler($files, WWW_DIR . '/js');

		return new \WebLoader\Nette\JavaScriptLoader($compiler, $this->template->basePath . '/js');
	}

}
