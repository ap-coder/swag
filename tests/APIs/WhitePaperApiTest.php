<?php namespace Tests\Apis;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\WhitePaper;

class WhitePaperApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_white_paper()
    {
        $whitePaper = WhitePaper::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/white_papers', $whitePaper
        );

        $this->assertApiResponse($whitePaper);
    }

    /**
     * @test
     */
    public function test_read_white_paper()
    {
        $whitePaper = WhitePaper::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/white_papers/'.$whitePaper->id
        );

        $this->assertApiResponse($whitePaper->toArray());
    }

    /**
     * @test
     */
    public function test_update_white_paper()
    {
        $whitePaper = WhitePaper::factory()->create();
        $editedWhitePaper = WhitePaper::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/white_papers/'.$whitePaper->id,
            $editedWhitePaper
        );

        $this->assertApiResponse($editedWhitePaper);
    }

    /**
     * @test
     */
    public function test_delete_white_paper()
    {
        $whitePaper = WhitePaper::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/white_papers/'.$whitePaper->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/white_papers/'.$whitePaper->id
        );

        $this->response->assertStatus(404);
    }
}
