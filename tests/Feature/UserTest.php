<?php
use App\Models\User;
use Tests\TestCase;

uses(TestCase::class);

it('can create a user', function () {
    $user = User::factory()->create();

    expect($user)
        ->toBeInstanceOf(User::class)  // Check if $user is a User model
        ->and($user->id)
        ->not
        ->toBeNull();  // Ensure user was saved to DB
});
