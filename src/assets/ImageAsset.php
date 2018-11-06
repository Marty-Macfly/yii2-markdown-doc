<?php

namespace macfly\yii2\doc\assets;

use macfly\yii2\doc\Module;
use yii\web\AssetBundle;

class ImageAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = Module::getInstance()->rootDocDir;
        parent::init();
    }
}
