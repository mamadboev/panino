<?php

use yii\db\Migration;

/**
 * Class m210824_111631_add_to_achievements_table_given_column
 */
class m210824_111631_add_to_achievements_table_given_column extends Migration
{
   const TABLE_NAME='{{%achievements}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(self::TABLE_NAME,'given_by',$this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn(self::TABLE_NAME,'given_by');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210824_111631_add_to_achievements_table_given_column cannot be reverted.\n";

        return false;
    }
    */
}
