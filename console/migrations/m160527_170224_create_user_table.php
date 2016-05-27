<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_table`.
 */
class m160527_170224_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_table', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_table');
    }
}
