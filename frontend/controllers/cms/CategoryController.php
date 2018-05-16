<?php

namespace frontend\controllers\cms;

class CategoryController extends \yii\web\Controller
{
    public function actionDetail()
    {
        return $this->render('detail');
    }

    public function actionList()
    {
        return $this->render('list');
    }

}
