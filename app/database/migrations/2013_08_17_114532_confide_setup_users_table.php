<?php
use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the users table
        Schema::table('users', function($table)
        {
            $table->string('username');
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_reminders');

        Schema::table('users', function($table)
        {
            $table->dropColumn('username');
            $table->dropColumn('confirmation_code');
            $table->dropColumn('confirmed');
        });

    }

}