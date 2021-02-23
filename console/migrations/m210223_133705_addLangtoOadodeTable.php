<?php

use yii\db\Migration;

/**
 * Class m210223_133705_addLangtoOadodeTable
 */
class m210223_133705_addLangtoOadodeTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%oadode}}', 'lang', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%oadode}}', 'lang');
        echo "m210223_133705_addLangtoOadodeTable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210223_133705_addLangtoOadodeTable cannot be reverted.\n";

        return false;
    }
    */
}
