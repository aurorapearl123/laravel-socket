<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Elasticquent\ElasticquentTrait;

class Client extends Model
{
	use ElasticquentTrait;

    protected $fillable = [
    	'email',
    	'first_name',
    	'middle_name',
    	'last_name',
    	'phone'
    ];


    protected $mappingProperties = array(
    	'first_name' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
        'middle_name' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
        'last_name' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
    );
}
