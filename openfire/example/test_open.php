<?php 

include "vendor/autoload.php";


$api = new Gidkom\OpenFireRestApi\OpenFireRestApi;

// Set the required config parameters

$api->secret = "ntbckcYE3lvu7T81";
$api->host = "103.240.34.218";
$api->port = "9090";  // default 9090

// Optional parameters (showing default values)

$api->useSSL = false;
$api->plugin = "/plugins/restapi/v1";  // plugin 




// Add a new user to OpenFire and add to a group
$result = $api->addUser('g', 'jay', 'jay', 'jay@test.com', array('Group'=> '1'));

// Check result if command is succesful
if($result['status']) {
    // Display result, and check if it's an error or correct response
    echo 'Success: ';
    echo $result['message'];
} else {
    // Something went wrong, probably connection issues
    echo 'Error: ';
    echo $result['message'];
}
die;
//Delete a user from OpenFire
$result = $api->deleteUser($username);




//Disable a user
$result = $api->lockoutUser($username);


//Enable a user
$result = $api->unlockUser($username);

/**
 * Update a user
 *
 * The $password, $name, $email, $groups arguments are optional
 * 
 */
$result = $api->updateUser($username, $password, $name, $email, $groups);

//Add to roster
$api->addToRoster($username, $jid);

//Delete from roster
$api->addToRoster($username, $jid);

//Update user roster
$api->updateRoster($username, $jid, $nickname, $subscription);

// Get all groups
$api->getGroup();

// Retrieve group 
$api->getGroup($name);

// Create a group
$api->createGroup($group_name, $description);

// Update a group description
$api->updateGroup($group_name, $description);

// Delete a group
$api->deleteGroup($group_name);

