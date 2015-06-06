<?php
/**
  * @link https://github.com/semako/NewPress
  * @copyright 2015 Semen Kotliarenko <semako.ua@gmail.com>
  * @author Semen Kotliarenko <semako.ua@gmail.com>
  * @version 1.0.0
  * @filesource
  */

namespace app\assets;
use yii\web\AssetBundle;

/**
 * Class IonIconsAsset
 * @package app\assets
 * @author Semen Kotliarenko <semako.ua@gmail.com>
 * @since 1.0.0
 */
class IonIconsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/driftyco/ionicons';

    /**
     * @var array
     */
    public $css = [
        'css/ionicons.min.css',
    ];

    /**
     * @var array
     */
    public $js = [];

    /**
     *
     */
    public function init()
    {
        // If env is DEV use src instead of min
        if (YII_ENV_DEV) {
            $this->css = [
                'css/ionicons.css',
            ];
        }

        parent::init();
    }
}
