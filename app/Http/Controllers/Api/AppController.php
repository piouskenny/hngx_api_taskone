<?php

namespace App\Http\Controllers\Api;

use SmyPhp\Core\Controller\Controller;
use SmyPhp\Core\Http\Response;
use SmyPhp\Core\Http\Request;


class AppController extends Controller
{
    public function index(Request $request, Response $response)
    {
        if (isset($_GET['slack_name']) && isset($_GET['track'])) {
            $slackName = $_GET['slack_name'];
            $track = $_GET['track'];


            return $response->json([
                'slack_name' => $slackName,
                'current_day' => date('l'), 
                'utc_time' => gmdate('Y-m-d\TH:i:s\Z'),
                'track' => $track,
                'github_file_url' => 'https://github.com/username/repo/blob/main/file_name.ext',
                'github_repo_url' => 'https://github.com/piouskenny/hngx_api_taskone',
                'status_code' => 200
            ], 400);

        } else {
                return $response->json([
                    "status" => true,
                    "message" => "Slack name and track is empty"
                ], 400);
        }
    }
}
