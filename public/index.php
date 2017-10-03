<?php

require '../vendor/autoload.php';

use josegonzalez\Dotenv\Loader as DotEnv;
use League\Plates\Engine as TemplateEngine;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

// Load .env config.
(new DotEnv('../.env'))
    ->parse()
    ->expect('SERVER_HOST')
    ->putenv(true);

// Try to query the Minecraft server.
try {
    $Query = new MinecraftPing(getenv('SERVER_HOST'), 25565, 1);
    $response = $Query->Query();
    $Query->Close();
} catch (MinecraftPingException $e) {
    // If no (valid) response, use empty array as response.
    $response = [];
}

// Set online state.
$response['online'] = (boolean) !empty($response);
// Add host.
$response['host'] = getenv('SERVER_HOST');

// Create new Plates template instance.
$templates = new TemplateEngine('../templates');

// Render online or offline template.
if ($response['online'] === true) {
    // Add online player percentage.
    $response['players']['percentage'] = floor(($response['players']['online'] / $response['players']['max']) * 100);
    // Render online template.
    echo $templates->render('online', $response);
} else {
    // Render offline template.
    echo $templates->render('offline', $response);
}
