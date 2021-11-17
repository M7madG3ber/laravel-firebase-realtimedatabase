<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function index()
    {
        return $this->database->getReference('connecthomes')->getValue();
    }

    public function send($key, $value)
    {
        $postData = [
            'key'   => $key,
            'value' => $value
        ];
        $postRef = $this->database->getReference('connecthomes')->push($postData);
        return $postRef;
    }
}