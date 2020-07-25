<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use WithoutMiddleware, RefreshDatabase;

    public function testHotels()
    {
        $this->withoutMiddleware();

        $response = $this->get(route('hotels'));

        $response->assertStatus(200);
    }

    public function testTopHotels()
    {
        $this->withoutMiddleware();

        $data = [
            'city' => 'OZ',
            'adults_number' => 3,
            'from_date' => '2020-07-24',
            'to_date' => '2020-07-25',
        ];
        $response = $this->json('GET', route('hotels.top'), $data);
        $response->assertStatus(200);
    }

    public function testBestHotels()
    {
        $data = [
            'city' => 'OZ',
            'adults_number' => 5,
            'from_date' => '2020-08-14',
            'to_date' => '2020-08-25',
        ];
        $response = $this->json('GET', route('hotels.best'), $data);
        $response->assertStatus(200);
    }
}
