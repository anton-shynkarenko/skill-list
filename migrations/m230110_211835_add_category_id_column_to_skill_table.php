<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%skill}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 */
class m230110_211835_add_category_id_column_to_skill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%skill}}', 'category_id', $this->integer());

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-skill-category_id}}',
            '{{%skill}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-skill-category_id}}',
            '{{%skill}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-skill-category_id}}',
            '{{%skill}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-skill-category_id}}',
            '{{%skill}}'
        );

        $this->dropColumn('{{%skill}}', 'category_id');
    }
}
