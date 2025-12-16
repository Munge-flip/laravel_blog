<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_forms_table.php

    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();

            // Foreign Key (Links to the User who made this)
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // 1. TEXT Inputs
            // <input type="text"> - Standard short text
            $table->string('title');

            // <input type="email"> - Stored as string
            $table->string('email_address');

            // <input type="url"> - Stored as string
            $table->string('website');

            // <input type="tel"> - Stored as string (Phone numbers have symbols like + or -)
            $table->string('phone_number');

            // <input type="password"> - Stored as string (Remember to Hash it!)
            $table->string('secret_code');

            // <input type="search"> - It's just text
            $table->string('search_term')->nullable();


            // 2. NUMBER Inputs
            // <input type="number"> - Standard integer
            $table->integer('age');

            // <input type="range"> - A slider (e.g., 1 to 100) is just an integer
            $table->integer('satisfaction_score');


            // 3. DATE & TIME Inputs
            // <input type="date"> - YYYY-MM-DD
            $table->date('event_date');

            // <input type="time"> - HH:MM:SS
            $table->time('start_time');

            // <input type="datetime-local"> - Both date and time
            $table->dateTime('appointment_time');

            // <input type="month"> & <input type="week"> 
            // Database doesn't have "month/week" types, so we use string
            $table->string('fav_month');
            $table->string('fav_week');


            // 4. CHOICES (Radio, Checkbox, Color)
            // <input type="checkbox"> - True/False
            $table->boolean('is_visible')->default(false);

            // <input type="radio"> - Storing ONE choice (e.g., 'Small', 'Medium')
            $table->string('t_shirt_size');

            // <input type="color"> - Stores the Hex Code (e.g., "#ff0000")
            $table->string('theme_color');


            // 5. FILES
            // <input type="file"> - You store the PATH/NAME (string), not the file itself
            $table->string('resume_path')->nullable();


            // 6. HIDDEN
            // <input type="hidden"> - usually used for IDs or Tokens, often irrelevant for schema
            // But if you needed to store a hidden tracking code:
            $table->string('tracking_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
