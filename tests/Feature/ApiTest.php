<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    private static $accessToken;

    /**
     * A basic test to get oauth 2 token.
     *
     * @return void
     */
    public function testGetOauthTokenTest()
    {
        // request
        $response = $this->json('POST', '/oauth/token', [
            'grant_type' => 'password',
            'client_id' => '1',
            'client_secret' => 'av5YZRTMcIVLB14mGmu3pRqrVXbe5wXEk06HmL3C',
            'username' => 'admin@admin.com',
            'password' => 'password',
            ]);
        // get responce body
        $content = $response->getContent();
        // save the token
        self::$accessToken = json_decode($content)->access_token;
        // response must be OK
        $response->assertStatus(200);
    }

    /**
     * A basic test to get all projects entities.
     *
     * @return void
     */
    public function testGetAllProjectsTest()
    {
        // request
        $response = $this->json('GET', 'api/v1/projects', [],
        ['HTTP_Authorization' => 'Bearer ' . self::$accessToken]);
        // response must be OK
        $response->assertStatus(200);
    }

    /**
     * A basic test to get a project entity.
     *
     * @return void
     */
    public function testGetProjectTest()
    {
        // request
        $response = $this->json('GET', 'api/v1/projects/1', [],
        ['HTTP_Authorization' => 'Bearer ' . self::$accessToken]);
        // response must be OK
        $response->assertStatus(200);
    }

    /**
     * A basic test to update a project entity.
     *
     * @return void
     */
    public function testUpdateProjectTest()
    {
        // request to get current project values
        $response = $this->json('GET', 'api/v1/projects/1', [],
        ['HTTP_Authorization' => 'Bearer ' . self::$accessToken]);
        // get responce body
        $content = json_decode($response->getContent());

        // request to update the project
        $responseUpdate = $this->json('PUT', 'api/v1/projects/1', 
            [
                'title' => $content->data->title . ' [edited-phpunit]',
                'description' => $content->data->description,
            ],
            [
                'HTTP_Authorization' => 'Bearer ' . self::$accessToken
            ]
        );
        // response must be OK
        $responseUpdate->assertStatus(200);
    }
}
