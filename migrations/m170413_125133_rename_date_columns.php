<?php

use yii\db\Migration;
use yii2mod\settings\models\SettingModel;

class m170413_125133_rename_date_columns extends Migration
{
    public function up()
    {
        $this->renameColumn(SettingModel::tableName(), 'createdAt', 'created_at');
        $this->renameColumn(SettingModel::tableName(), 'updatedAt', 'updated_at');
    }

    public function down()
    {
        $this->renameColumn(SettingModel::tableName(), 'created_at', 'createdAt');
        $this->renameColumn(SettingModel::tableName(), 'updated_at', 'updatedAt');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
