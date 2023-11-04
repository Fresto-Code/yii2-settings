<?php

use yii\db\Migration;
use yii2mod\settings\models\SettingModel;

/**
 * Handles adding description to table `setting`.
 */
class m170323_102933_add_description_column_to_setting_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn(SettingModel::tableName(), 'description', $this->string()->after('status'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn(SettingModel::tableName(), 'description');
    }
}
