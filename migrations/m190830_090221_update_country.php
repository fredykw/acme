<?php

use yii\db\Migration;

/**
 * Class m190830_090221_update_country
 */
class m190830_090221_update_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->addColumn('country', 'position', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('country', 'position');
        //echo "m190830_090221_update_country cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190830_090221_update_country cannot be reverted.\n";

        return false;
    }
    */
}
