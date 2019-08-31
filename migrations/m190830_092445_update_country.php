<?php

use yii\db\Migration;

/**
 * Class m190830_092445_update_country
 */
class m190830_092445_update_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
               $this->addColumn('country', 'position1', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('country', 'position1');
        //echo "m190830_092445_update_country cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190830_092445_update_country cannot be reverted.\n";

        return false;
    }
    */
}
