<?php

namespace Tests\Feature;

use Tests\TestCase;

class CvAccessTest extends TestCase
{
    public function test_portfolio_homepage_is_public_without_a_linkedin_modal(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertDontSee('auth-modal');
        $response->assertDontSee('Please sign in with LinkedIn to view this content.');
    }

    public function test_guest_is_redirected_to_linkedin_when_requesting_the_cv(): void
    {
        $response = $this->get('/view-cv');

        $response->assertRedirect(route('linkedin.redirect'));
        $this->assertSame(route('view.cv'), session('url.intended'));
    }
}
