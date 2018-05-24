<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m180524_075300_create_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'title' => $this ->string(10)->notNull(),
            'surname' => $this ->string(10),
            'street' => $this ->string(100),
            'town' => $this ->string(100),
            'phone_number' => $this ->string(10)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customer');
    }
}
