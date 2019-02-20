<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;

class ClientController extends Controller
{
	public $successStatus = 200;

    public function getClient()
    {
    	$clients = Client::paginate(15);
    	//$success['clients'] = $clients;
    	return response()->json($clients, $this->successStatus); 
    }

    public function indexClents()
    {
    	Client::createIndex($shards = null, $replicas = null);
    	Client::putMapping($ignoreConflicts = true);
    	Client::addAllToIndex();

    	return response()->json([
    		'status' => 200
    	]);
    }

    public function search($q = null)
    {
    
        $clients = Client::complexSearch([
            'body' => [
                'query' => [
                    'multi_match' => [
                        'query' => $q,
                        'fields' => [
                            'first_name',
                            'middle_name',
                            'last_name'
                        ]
                    ]
                ]
            ]
        ]);


    	
    	// $clients = Client::searchByQuery([
    	// 	'match' => [
    	// 		'first_name' => $q,
    	// 		//'middle_name' => $q,
    	// 		//'last_name' => $q
    	// 	]
    	// ]);

    	return response()->json([
    		'data' => $clients
    	]);
    }
}
