<?php

/**
 * Roles tables
 *
 * created: 2021-10-06
 * updated:
 *
 * @author Johnathan Tiong <johnathan.tiong@gmail.com>
 * @copyright 2021 Johnathan Tiong
 */

if (!Capsule::schema()->hasTable('roles')) {
    Capsule::schema()->create('roles', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('slug')->nullable();
        $table->timestamps();
    });

    // Administrator role
    Capsule::insert("INSERT INTO roles ('name', 'slug') VALUES (?, ?)", [
        'Administrator',
        'administrator'
    ]);

    // Member role
    Capsule::insert("INSERT INTO roles ('name', 'slug') VALUES (?, ?)", [
        'Member',
        'member'
    ]);
}

if (!Capsule::schema()->hasTable('user_roles')) {
    Capsule::schema()->create('user_roles', function ($table) {
        $table->increments('id');
        $table->integer('role_id');
        $table->integer('user_id');
    });
}
