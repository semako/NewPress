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
 * Class FontAwesomeAsset
 * @package app\assets
 * @author Semen Kotliarenko <semako.ua@gmail.com>
 * @since 1.0.0
 */
class FontAwesomeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    /**
     * @var array
     */
    public $css = [
        'css/font-awesome.min.css',
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
                'css/font-awesome.css',
            ];
        }

        parent::init();
    }
}
