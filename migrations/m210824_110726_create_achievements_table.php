<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%achievements}}`.
 */
class m210824_110726_create_achievements_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%achievements}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'info_uz'=>$this->string(),
            'info_ru'=>$this->string(),
            'info_en'=>$this->string(),
            'picture'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%achievements}}');
    }
}
