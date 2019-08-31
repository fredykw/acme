<?php

use yii\db\Migration;

/**
 * Class m190828_111511_create_new_place
 */
class m190828_111511_create_new_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable('test',[
                'id' => $this->primaryKey()->unsigned(),
                'place_id' => $this->string(45)->notNull()
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('test');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190828_111511_create_new_place cannot be reverted.\n";

        return false;
    }
    */
}
