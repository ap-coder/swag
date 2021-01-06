<?php namespace Tests\Apis;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Career;

class CareerApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_career()
    {
        $career = Career::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/careers', $career
        );

        $this->assertApiResponse($career);
    }

    /**
     * @test
     */
    public function test_read_career()
    {
        $career = Career::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/careers/'.$career->id
        );

        $this->assertApiResponse($career->toArray());
    }

    /**
     * @test
     */
    public function test_update_career()
    {
        $career = Career::factory()->create();
        $editedCareer = Career::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/careers/'.$career->id,
            $editedCareer
        );

        $this->assertApiResponse($editedCareer);
    }

    /**
     * @test
     */
    public function test_delete_career()
    {
        $career = Career::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/careers/'.$career->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/careers/'.$career->id
        );

        $this->response->assertStatus(404);
    }
}
