<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug_trackers', function (Blueprint $table) {
            $table->id();
            $table->string('bug_id');
            $table->string('title');
            $table->text('description');
            $table->tinyText('bug_status', ['draft', 'progress', 'review', 'complete'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bug_trackers');
    }
}
