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
    public $sourcePath = '@vendor/almasaeed2010/adminlte';

    /**
     * @var array
     */
    public $css = [
        'dist/css/AdminLTE.min.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'plugins/fastclick/fastclick.min.js',
        'dist/js/app.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/chartjs/Chart.min.js',
    ];

    /**
     * @var string
     */
    public $skin = '_all-skins';

    public $depends = [
        'app\assets\FontAwesomeAsset',
        'app\assets\IonIconsAsset',
    ];

    /**
     *
     */
    public function init()
    {
        // Try to use a color scheme for asset bundle
        if ($this->skin) {
            $this->skin = strtolower($this->skin);

            if ($this->skin != '_all-skins' && !preg_match('/^skin\-/is', $this->skin)) {
                throw new InvalidValueException('Invalid skin specified');
            }

            $this->css[] = sprintf('dist/css/skins/%s' . (!YII_ENV_DEV ? '.min' : '') . '.css', $this->skin);
        }

        parent::init();
    }
}
