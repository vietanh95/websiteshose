<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%tbl_trousers}}',[
            'id_trousers' => $this->primarykey();
            'name_trousers' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'address' =>$this->string()->notNull(),
            'phone' =>$this->integer()->notNull(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%tbl_slideshow}}', [
            'id_slide' => $this->primarykey(),
            'image_slideshow' => $this->string(15)->notNull(),
            'image1_slideshow' => $this->string(15)->notNull(),
            'image2_slideshow' => $this->string(15)->notNull(),
            'image3_slideshow' => $this->string(15)->notNull(),
            'image4_slideshow' => $this->string(15)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%tbl_product}}', [
            'product_id' => $this->primarykey(),
            'name_product' => $this->string(50)->notNull()->unique(),
            'quantity_product' => $this->integer()->notNull(),
            'price_product' => $this->integer()->notNull(),
            'information_product' => $this->string(250)->notNull(),
            'size_id'=>$this->integer()->notNull(),
            'Status_Show_id'=>$this->integer(),
            'image_product' => $this->string(100)->notNull(),
            'image1_product' => $this->string(100),
            'image2_product' => $this->string(100),
            'image3_product' => $this->string(100),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);
        
        $this->createTable('{{%tbl_detail_input}}', [
            'detail_input_id'=>$this->primarykey(),
            'input_id' =>$this->integer()->notNull(),
            'product_id'=>$this->integer()->notNull(),
            'quantity_product_input'=>$this->integer()->notNull(),
            'supplier_id'=>$this->integer()->notNull(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_input}}', [
            'input_id'=>$this->primarykey(),
            'input_total'=>$this->integer()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_storage}}', [
            'product_id' => $this->primarykey(),        
            'quantity_product_storage' => $this->integer()->notNull(),
            'price_product_input' => $this->integer()->notNull(),
            'information_product' => $this->string(250)->notNull(),
            'size_id'=>$this->integer()->notNull()->unique(),
            'image_product' => $this->string(30)->notNull(),
            'stogare_id'=>$this->integer()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_detail_export}}', [
            'detail_export_id'=>$this->primarykey(),
            'export_id'=>$this->integer()->notNull(),
            'product_id'=>$this->integer()->notNull(),
            'quantity_product_export'=>$this->integer()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_export}}', [
            'export_id'=>$this->primarykey(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_size}}', [
            'size_id'=>$this->primarykey(),
            'size_number'=>$this->integer()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_status_show}}', [
            'status_show_id'=>$this->primarykey(),
            'information_status_show'=>$this->string(40)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%tbl_order}}', [
            'order_id'=>$this->primarykey(),
            'order_user_id'=>$this->integer()->notNull(),
            'order_date' => $this->date()->notNull(),
            'total' => $this->integer()->notNull(),
            'user_ship' =>$this->string(255)->notNull(),
            'email_ship' =>$this->string(255)->notNull(),
            'address_ship' =>$this->string(255)->notNull(),
            'phone_ship' =>$this->string(255)->notNull(),


            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ],$tableOptions);


    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%tbl_slideshow}}');
        $this->dropTable('{{%tbl_product}}');
        $this->dropTable('{{%tbl_detail_input}}');
        $this->dropTable('{{%tbl_input}}');
        $this->dropTable('{{%tbl_storage}}');
        $this->dropTable('{{%tbl_detail_export}}');
        $this->dropTable('{{%tbl_export}}');
        $this->dropTable('{{%tbl_size}}');
    }
}
