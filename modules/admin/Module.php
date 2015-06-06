<?php
/**
 * Admin Module
 *
 * @link https://github.com/semako/NewPress
 * @copyright 2015 Semen Kotliarenko <semako.ua@gmail.com>
 * @author Semen Kotliarenko <semako.ua@gmail.com>
 * @version 1.0.0
 * @filesource
 */

namespace app\modules\admin;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $defaultRoute = 'home';
    public $layout = 'main';

    public function init()
    {
        parent::init();
    }
}
