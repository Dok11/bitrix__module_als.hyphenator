<?php


class CHyphenator {
	static function run($source) {

		if(is_string($source)) {
			require_once $_SERVER['DOCUMENT_ROOT'].'/local/modules/als.hyphenator/Hyphenator/Hyphenator.php';
			\Org\Heigl\Hyphenator\Hyphenator::registerAutoload();

			$o = new \Org\Heigl\Hyphenator\Options();
			$o->setHyphen('&shy;')
			  ->setDefaultLocale('ru_RU')
			  ->setRightMin(2)
			  ->setLeftMin(2)
			  ->setWordMin(5)
			  ->setFilters('Simple')
			  ->setTokenizers('Whitespace','Punctuation');

			$h = new \Org\Heigl\Hyphenator\Hyphenator();
			$h->setOptions($o);
			$result = $h->hyphenate($source);

			if(is_array($result)) {
				$result = $result[0];
			}

		} else {
			$result = $source;

		}

		return $result;
	}



}