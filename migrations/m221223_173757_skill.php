<?php

use yii\db\Migration;

/**
 * Class m221223_173757_skill
 */
class m221223_173757_skill extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('skill', [
            'id' => $this->primaryKey(),
            'name' => $this->string(125)->notNull(),
            'description' => $this->string(255)->notNull(),
        ]);

        $this->createIndex(
            'idx-skill',
            'skill',
            'name'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            'idx-skill',
            'skill'
        );

        $this->dropTable('skill');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221223_173757_skill cannot be reverted.\n";

        return false;
    }
    */
}
