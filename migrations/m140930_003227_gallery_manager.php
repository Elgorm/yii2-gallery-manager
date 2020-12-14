<?php
namespace zxbodya\yii2\galleryManager\migrations;

use yii\db\Schema;
use yii\db\Migration;

class m140930_003227_gallery_manager extends Migration
{
    public $tableName = '{{%gallery_image}}';

    public function up()
    {

        $this->createTable(
            $this->tableName,
            array(
                'id' => $this->primaryKey(),
                'type' => $this->string(),
                'ownerId' => $this->string()->notNull(),
                'rank' => $this->integer()->notNull()->defaultValue(0),
                'name' => $this->string(),
                'description' => $this->string()
            )
        );
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
