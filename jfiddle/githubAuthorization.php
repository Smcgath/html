<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
echo "garbage";

include('vendor\league\OAuth2\Client\Provider\Github.php');
include('vendor\league\OAuth2\Client\Provider\GithubResourceOwner.php');

echo "garbage";

$provider = new vendor\league\OAuth2\Client\Provider\Github([
    'clientId'          => '{95a3734f1cec64f13af8}',
    'clientSecret'      => '{fa1f6166752cdf6ef743a09846303b4cc4b79747}',
    'redirectUri'       => 'http://ec2-52-34-213-191.us-west-2.compute.amazonaws.com/jfiddle/codingPage.php',
]);


if (!isset($_GET['code'])) {
echo "garbage2";
    // If we don't have an authorization code then get one
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: '.$authUrl);
    exit;

// Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
echo "garbage3";
    unset($_SESSION['oauth2state']);
    exit('Invalid state');

} else {
echo "garbage4";
    // Try to get an access token (using the authorization code grant)
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    // Optional: Now you have a token you can look up a users profile data
    try {
echo "garbage5";
        // We got an access token, let's now get the user's details
        $user = $provider->getResourceOwner($token);

        // Use these details to create a new profile
        printf('Hello %s!', $user->getNickname());

    } catch (Exception $e) {
echo "garbage6";
        // Failed to get user details
        exit('Oh dear...');
    }

    // Use this to interact with an API on the users behalf
    echo $token->getToken();
}
