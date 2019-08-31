<?php

use yii\db\Migration;

/**
 * Class m190830_094319_updatingCountry
 */
class m190830_094319_updatingCountry extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190830_094319_updatingCountry cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190830_094319_updatingCountry cannot be reverted.\n";

        return false;
    }
    */
}
