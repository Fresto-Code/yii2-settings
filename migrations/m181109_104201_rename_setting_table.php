<?php

namespace yii2mod\settings\migrations;

use Yii;
use yii\db\Migration;
use yii2mod\settings\models\SettingModel;

class m181109_104201_rename_setting_table extends Migration
{
    public function up()
    {
        if (Yii::$app->db->schema->getTableSchema(SettingModel::tableName()) === null) {
            $this->renameTable('{{%setting}}',SettingModel::tableName());
        }
    }

    public function down()
    {

    }

}
