<?php
/**
 * @link https://github.com/borodulin/yii2-sparkline
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-sparkline/blob/master/LICENSE
 */
namespace conquer\sparkline;

class SparklineAsset extends \yii\web\AssetBundle
{
	
	public $js = [
			'jquery.sparkline.min.js',
	];
	
	public function init()
	{
		$this->sourcePath=dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		parent::init();
	}

}