<?php

namespace webvimark\extensions\DateRangePickerGisLib;

use yii\web\AssetBundle;

class DateRangePickerAsset extends AssetBundle
{
	public $depends    = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	];

	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		$this->js = [
			'moment.min.js',
			'daterangepicker.js',
		];
		$this->css = ['daterangepicker-bs4.css'];

		parent::init();
	}
}
