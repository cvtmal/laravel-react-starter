<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Notification;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

test('verified users are redirected to dashboard when requesting verification notification', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $response = $this->actingAs($user)
        ->post(route('verification.send'));

    $response->assertRedirect(route('dashboard', absolute: false));
});

test('unverified users receive verification email when requesting verification notification', function (): void {
    $user = User::factory()->unverified()->create();

    Notification::fake();

    $response = $this->actingAs($user)
        ->post(route('verification.send'));

    Notification::assertSentTo($user, VerifyEmail::class);
    $response->assertRedirect();
    $response->assertSessionHas('status', 'verification-link-sent');
});
