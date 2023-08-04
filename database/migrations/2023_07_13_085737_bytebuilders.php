<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Creating the 'category' table
        Schema::create('category', function (Blueprint $table) {
            $table->id('id'); // Creates an auto-incrementing primary key column named 'id'
            $table->string('category_name')->unique();
            $table->text('category_description')->nullable(); // Allows nullable category description
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });

        // Creating the 'bytebuilder' table
        Schema::create('bytebuilder', function (Blueprint $table) {
            $table->id('id'); // Creates an auto-incrementing primary key column named 'id'
            $table->string('bytebuilder_name')->nullable();
            $table->string('bytebuilder_prename')->nullable();
            $table->string('bytebuilder_email')->unique(); // Unique email for byte builders
            $table->string('bytebuilder_password')->nullable();
            $table->string('bytebuilder_category')->nullable();
            $table->string('bytebuilder_city')->nullable(); // Allows nullable city
            $table->string('bytebuilder_country')->default('morocco'); // Sets default country to 'morocco'
            $table->date('bytebuilder_birthdate')->nullable(); // Allows nullable birthdate
            $table->string('profile_image')->nullable(); // Add profile image 
            $table->string('background_image')->nullable(); // Add bckground image 
            $table->string('bytebuilder_about')->nullable();
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
            $table->string('address')->nullable(); // Add address  

            $table->string('bytebuilder_phone')->nullable();
            $table->string('bytebuilder_linkdin')->nullable();
            $table->string('bytebuilder_facebook')->nullable();
            $table->string('bytebuilder_instagrame')->nullable();
            $table->string('bytebuilder_twitter')->nullable();
            $table->string('bytebuilder_thread')->nullable();
            $table->string('bytebuilder_github')->nullable();

            $table->boolean('bytebuilder_portfolio_exist')->default(false);
            $table->boolean('enable_edit')->default(false); // if id_session= bytbuilder_id ==> 'enable_edit'= true
            $table->text('google_token')->nullable();
            $table->text('github_token')->nullable();
            $table->timestamp('email_verified_at')->nullable(); // Adds 'created_at' and 'updated_at' columns


            $table->foreign('bytebuilder_category')->references('category_name')->on('category')->onDelete('cascade')->onUpdate('cascade'); // Adds foreign key constraint to 'category' table
        });






        // Creating the 'portfolio_project' table
        Schema::create('portfolio_project', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_project_title');
            $table->unsignedBigInteger('bytebuilder_id');
            $table->text('portfolio_project_description');
            $table->string('portfolio_project_github');
            $table->string('portfolio_project_img_upload')->nullable();
            $table->timestamps();

            $table->foreign('bytebuilder_id')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
        });



        // Creating the 'portfolio_experience' table
        Schema::create('portfolio_experience', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_experience_title');
            $table->unsignedBigInteger('bytebuilder_id');
            $table->text('portfolio_experience_description');
            $table->string('portfolio_project_github')->nullable();
            $table->string('portfolio_experience_img_upload')->nullable();

            $table->timestamps();

            $table->foreign('bytebuilder_id')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
        });


        // Creating the 'portfolio_formation' table
        Schema::create('portfolio_formation', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_formation_title');
            $table->unsignedBigInteger('bytebuilder_id');
            $table->text('portfolio_formation_description');
            $table->string('portfolio_formation_github')->nullable();
            $table->string('portfolio_formation_img_upload')->nullable();

            $table->timestamps();

            $table->foreign('bytebuilder_id')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
        });


        
        // Creating the 'project' table
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('project_name'); // Allowing changes to the project name
            $table->unsignedBigInteger('project_creator_id'); // Allowing changes to the project category
            $table->string('project_category');
            $table->text('project_description'); // Allowing changes to the project description
            $table->boolean('public')->default(false); // Setting default value for 'public' to 'false'
            $table->timestamps();

            $table->foreign('project_creator_id')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('project_category')->references('category_name')->on('category')->onDelete('cascade')->onUpdate('cascade');
        });

        // Creating the 'post' table
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_category')->nullable();
            $table->unsignedBigInteger('post_creator_id');
            $table->text('post_description');
            $table->string('post_image')->nullable(); // Add post image column
            $table->boolean('public')->nullable(); 
            $table->boolean('suspand')->nullable();
            $table->timestamps();

            $table->foreign('post_creator_id')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('post_category')->references('category_name')->on('category')->onDelete('cascade')->onUpdate('cascade');
        });

        // Creating the 'likes' table
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bytebuilder_id')->constrained('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('post_id')->constrained('post')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('suspand')->default(false); // Setting default value for 'suspand' to 'false'
            $table->timestamps();

        });

        // Creating the 'comments' table
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bytebuilder_id')->constrained('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('post_id')->constrained('post')->onDelete('cascade')->onUpdate('cascade');
            $table->text('comment_text');
            $table->boolean('public')->default(true); // Setting default value for 'public' to 'false'
            $table->boolean('suspand')->default(false); // Setting default value for 'suspand' to 'false'

            $table->timestamps();

        });


        // Creating the 'team' table
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('team_category');
            $table->unsignedBigInteger('team_creator');
            $table->text('team_description');
            // $table->json('team_members')->change();
            $table->timestamps();
            $table->foreign('team_creator')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('team_category')->references('category_name')->on('category')->onDelete('cascade')->onUpdate('cascade');
        });

        // Creating the 'team_x_bytebuilder' table
        Schema::create('team_x_bytebuilder', function (Blueprint $table) {
            $table->foreignId('bytebuilder_id')->constrained('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('team_id')->constrained('team')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->primary(['bytebuilder_id', 'team_id']);
        });

        // Creating the 'financement_request' table where the bytebuilder is waiting for financial support
        Schema::create('financement_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bytebuilder_id')->constrained('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('project_id')->constrained('project')->onDelete('cascade')->onUpdate('cascade');
            $table->string('financement_request_name'); // Allowing changes to the financement request name
            $table->string('financement_request_description'); // Allowing changes to the financement request description
            $table->string('financement_request_category'); // Allowing changes to the financement request category
            $table->timestamps();

            // $table->primary('id');
            $table->foreign('financement_request_category')->references('category_name')->on('category')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['bytebuilder_id', 'project_id']);
        });

        // Creating the 'financers_x_request' table where clients finance the requests
        Schema::create('financers_x_request', function (Blueprint $table) {
            $table->foreignId('bytebuilder_id')->constrained('financement_request')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('financement_request_id')->constrained('financement_request')->onDelete('cascade')->onUpdate('cascade');
            $table->string('financement_proposition_description'); // Allowing changes to the financement proposition description
            $table->boolean('financement_request_accepted')->default(false); // Setting default value for 'financement_request_accepted' to 'false'
            $table->timestamps();

            $table->primary(['bytebuilder_id', 'financement_request_id']);
        });

        //creating a table portofolioexperience1 
        Schema::create('portfolioexperience1', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_experience_title');
            $table->unsignedBigInteger('bytebuilder_id');
            $table->text('portfolio_experience_description');
            $table->string('portfolio_project_github')->nullable();
            $table->string('portfolio_experience_img_upload')->nullable();
            $table->timestamps();

            // Add foreign key constraint if needed
            $table->foreign('bytebuilder_id')->references('id')->on('bytebuilder')->onDelete('cascade');
        });



        // Creating the 'task' table
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('task_title'); // Allowing changes to the task title
            $table->string('task_category'); // Allowing changes to the task category
            $table->unsignedBigInteger('task_creator_id');
            $table->text('task_description'); // Allowing changes to the task description
            $table->boolean('public')->default(true); // Setting default value for 'public' to 'false'
            $table->timestamps();

            $table->foreign('task_creator_id')->references('id')->on('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('task_category')->references('category_name')->on('category')->onDelete('cascade')->onUpdate('cascade');
        });

        // Creating the 'making_task_preposition' table
        Schema::create('making_task_preposition', function (Blueprint $table) {
            $table->foreignId('bytebuilder_id')->constrained('bytebuilder')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('task_id')->constrained('task')->onDelete('cascade')->onUpdate('cascade');
            $table->string('making_task_preposition_description'); // Allowing changes to the making task preposition description
            $table->boolean('making_task_preposition_accepted')->default(false); // Setting default value for 'making_task_preposition_accepted' to 'false'
            $table->timestamps();

            $table->primary(['bytebuilder_id', 'task_id']);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('project');

    }
};