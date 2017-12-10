<?php
/**
 * Created by PhpStorm.
 * User: cerynna
 * Date: 10/12/17
 * Time: 18:53
 */

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/firebase.json');
$apiKey = 'AIzaSyDLa89dyojec_T69Q-HXP2CWfgNsIg6xmw';

$firebase = (new Factory)
    ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
    ->create();

$database = $firebase->getDatabase();

$newPost = $database
    ->getReference('citations/bohort')
    ->push([

        "Jo le rigolo ???!!!",
        "Vous êtes un grand malade mental !",
        "MÉÉCRÉÉAAAAAAAAANTS !",
        "Vous prenez votre arc et vous le bouffez ! Espèce de dégénéré sanguinaire !"


    ]);


$newPost->getValue(); // Fetches the data from the realtime database