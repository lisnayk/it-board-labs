<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $title
 * @property string $header
 * @property string $teaser
 * @property string $content
 * @property integer $creaded
 * @property integer $updated
 * @property integer $uid
 * @property string $keywords
 * @property string $description
 * @property integer $status
 * @property string $comment
 * @property string $type
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'header', 'content',  'status'], 'required'],
            [['pid', 'creaded', 'updated', 'uid', 'status'], 'integer'],
            [['title', 'header', 'teaser', 'content', 'keywords', 'description', 'comment'], 'string'],
            [['type'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'title' => 'Title',
            'header' => 'Header',
            'teaser' => 'Teaser',
            'content' => 'Content',
            'creaded' => 'Creaded',
            'updated' => 'Updated',
            'uid' => 'Uid',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'status' => 'Status',
            'comment' => 'Comment',
            'type' => 'Type',
        ];
    }

}
