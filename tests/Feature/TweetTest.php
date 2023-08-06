<?php

use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Livewire\livewire;

it('should be able to create a tweet', function ($tweet) {
    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
        ->set('body', $tweet)
        ->call('tweet')
        ->assertEmitted('tweet::created');

    assertDatabaseCount('tweets', 1);

    expect(Tweet::first())
        ->body->toBe($tweet)
        ->created_by->toBe($user->id);
})->with(['my first tweet', 'my second tweet', 'my third tweet']);

// todo('body is required');
// todo('the tweet body should have a max length of 140 characters');
// todo('should be show the tweet on the timeline');
