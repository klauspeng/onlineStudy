<?php

namespace frontend\controllers\cms;

use common\models\CmsArticle;

/**
 * 文章类
 * Class ArticleController
 * @package frontend\controllers\cms
 */
class ArticleController extends \yii\web\Controller
{
    /**
     * 详情
     * @return string
     */
    public function actionDetai()
    {
        return $this->render('detai');
    }

    /**
     * 列表
     * @return string
     */
    public function actionList()
    {
        $data = CmsArticle::find()->all();
        return $this->render('list', $data);
    }

}
