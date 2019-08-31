<?php

use yii\db\Migration;

/**
 * Class m190831_065007_updateNew
 */
class m190831_065007_updateNew extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('country', 'check', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('country', 'check');
        //echo "m190831_065007_updateNew cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190831_065007_updateNew cannot be reverted.\n";

        return false;
    }
    */
}
