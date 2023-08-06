<?php

use App\Http\Livewire\Tweet;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Livewire\livewire;

it('should be able to create a tweet', function () {
    $user = User::factory()->create();

    actingAs($user);

    livewire(Tweet\Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

    assertDatabaseCount('tweets', 1);

    expect(\App\Models\Tweet::first())
        ->body->toBe('This is my first tweet')
        ->created_by->toBe($user->id);
});

it('should make sure that only authenticated users can tweet', function () {
    livewire(Tweet\Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertForbidden();

    actingAs(User::factory()->create());

    livewire(Tweet\Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');
});


test('body is required', function () {
    actingAs(User::factory()->create());

    livewire(Tweet\Create::class)
        ->set('body', null)
        ->call('tweet')
        ->assertHasErrors(['body' => 'required']);
});
// todo('the tweet body should have a max length of 140 characters');
// todo('should be show the tweet on the timeline');
