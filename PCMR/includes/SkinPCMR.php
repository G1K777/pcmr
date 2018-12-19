<?php
/**
 * SkinTemplate class for the pcmr skin
 *
 * @ingroup Skins
 */
class SkinPCMR extends SkinTemplate {
	public $skinname = 'pcmr';
	public $stylename = 'PCMR';
	public $template = 'PCMRTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.pcmr'
		] );
		$out->addModules( [
			'skins.pcmr.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
