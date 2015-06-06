<?php
/**
  * @link https://github.com/semako/NewPress
  * @copyright 2015 Semen Kotliarenko <semako.ua@gmail.com>
  * @author Semen Kotliarenko <semako.ua@gmail.com>
  * @version 1.0.0
  * @filesource
  */

namespace app\assets;
use yii\base\InvalidValueException;
use yii\web\AssetBundle;

/**
 * Class AdminLteAsset
 * @package app\assets
 * @author Semen Kotliarenko <semako.ua@gmail.com>
 * @since 1.0.0
 */
class AdminLteAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @var array
     */
    public $css = [
        'css/AdminLTE.min.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/app.min.js',
    ];

    /**
     * @var string
     */
    public $skin = '_all-skins';

    /**
     *
     */
    public function init()
    {
        // If env is DEV use src instead of min
        if (YII_ENV_DEV) {
            $this->css = [
                'css/AdminLTE.css',
            ];

            $this->js = [
                'js/app.js',
            ];
        }

        // Try to use a color scheme for asset bundle
        if ($this->skin) {
            $this->skin = strtolower($this->skin);

            if ($this->skin != '_all-skins' && !preg_match('/^skin\-/is', $this->skin)) {
                throw new InvalidValueException('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s' . (!YII_ENV_DEV ? '.min' : '') . '.css', $this->skin);
        }

        parent::init();
    }
}
