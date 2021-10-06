<?php

/**
 * Users table
 *
 * created: 2021-10-06
 * updated:
 *
 * @author Johnathan Tiong <johnathan.tiong@gmail.com>
 * @copyright 2021 Johnathan Tiong
 */

if (!Capsule::schema()->hasTable('users')) {
    Capsule::schema()->create('users', function ($table) {
        $table->increments('id');
        $table->string('username');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('userimage')->nullable();
        $table->string('api_key')->nullable()->unique();
        $table->rememberToken();
        $table->timestamps();
    });
}
