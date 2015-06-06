<?php
/**
 * Base Module Controller
 *
 * @link https://github.com/semako/NewPress
 * @copyright 2015 Semen Kotliarenko <semako.ua@gmail.com>
 * @author Semen Kotliarenko <semako.ua@gmail.com>
 * @version 1.0.0
 * @filesource
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
