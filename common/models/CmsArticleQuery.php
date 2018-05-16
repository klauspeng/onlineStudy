<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CmsArticle]].
 *
 * @see CmsArticle
 */
class CmsArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CmsArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CmsArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
