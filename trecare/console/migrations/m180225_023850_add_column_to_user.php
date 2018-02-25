<?php

use yii\db\Migration;

class m180225_023850_add_column_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'logo', $this->string(255)->notNull());
    }

    public function down()
    {
        $this->dropColumn('user','logo');
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
