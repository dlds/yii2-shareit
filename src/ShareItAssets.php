<?php
namespace dlds\shareit;

use Yii;
use yii\web\AssetBundle;

class ShareItAssets extends AssetBundle
{
	public $sourcePath = '@shareit/assets';
	public $basePath = '@webroot/assets';
	public $js = [
		'social.js'
	];
	public $css = [];
	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init() {
		Yii::setAlias('@shareit', __DIR__);
		return parent::init();
	}
}