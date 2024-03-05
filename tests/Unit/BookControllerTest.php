<?php

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Console\Kernel;



class BookControllerTest extends BaseTestCase
{
    use CreatesApplication;

    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
    /**
     * Test the index endpoint.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/v1/Books');

        $response->assertStatus(200);
        // Add more assertions as needed to validate the response data
    }

    /**
     * Test the store endpoint.
     *
     * @return void
     */
    public function testStore()
    {
        $data = [
            'title' => 'Sample Book',
            'author' => 'John Doe',
            'isbn' => '1234567890',
            'published_date' => '2022-03-04',
            'price' => 19.99,
        ];

        $response = $this->postJson('/api/v1/Books', $data);

        $response->assertStatus(201);
        // Add more assertions as needed to validate the response data
    }
}

