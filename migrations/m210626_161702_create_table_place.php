<?php

use yii\db\Migration;

/**
 * Class m210626_161702_create_table_place
 */
class m210626_161702_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('place', [
    'id' => $this->primaryKey()->unsigned(),
    'place_id' => $this->string(45)->notNull(),
    'lat' => $this->string(45)->notNull(),
    'lang' => $this->string(45)->notNull(),
    'country_code' => $this->string()->notNull(),
    'is_country' => $this->boolean(45)->notNull(),
]);
    }
  
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('place');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210626_161702_create_table_place cannot be reverted.\n";

        return false;
    }
    */
}
