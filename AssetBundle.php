<?php

namespace soofani\image;

/**
 * Class AssetBundle
 * @package soofani\image
 */
class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/holderjs';

    public $js = [
        'holder.min.js',
    ];
}