<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cms_article".
 *
 * @property int    $Id
 * @property int    $category_id 文章类别ID
 * @property string $title       标题
 * @property string $content     文章内容
 * @property int    $is_raw      是否是github raw 0:否，1是
 * @property string $raw_link    github raw链接
 * @property string $pic_min     文章缩列图
 * @property string $pic_large   大图
 * @property int    $status      状态 0-正常，1-不显示
 */
class CmsArticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cms_article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'is_raw', 'status'], 'integer'],
            [['content'], 'string'],
            [['title', 'raw_link', 'pic_min', 'pic_large'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id'          => 'ID',
            'category_id' => '文章类别ID',
            'title'       => '标题',
            'content'     => '文章内容',
            'is_raw'      => '是否是github raw 0:否，1是',
            'raw_link'    => 'github raw链接',
            'pic_min'     => '文章缩列图',
            'pic_large'   => '大图',
            'status'      => '状态 0-正常，1-不显示',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CmsArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CmsArticleQuery(get_called_class());
    }
}
