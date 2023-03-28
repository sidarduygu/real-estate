<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feature;

use App\Models\Property;
use App\Models\ClientType;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyImage;
use App\Models\PropertyFeature;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('panel.test');
    }

    public function store(Request $request)
    {

        $jsonString = file_get_contents($request->data);
        $data = json_decode($jsonString, true);

        //dd($data);
        foreach($data as $key => $item){


            if(isset($item['client']) && is_array($item['client'])){
                if(isset($item['client']['client_type']) && is_array($item['client']['client_type']) ){
                    $clientType = ClientType::create([
                    'name'=>$item['name'],
                    'status'=>$item['status']
                    ]);
                }
            }

        $client = Client::create([
            'name'=>$item['client']['name'],
            'surname'=>$item['client']['surname'],
            'email'=>$item['client']['email'],
            'password'=>$item['client']['password'],
            'address_1'=>$item['client']['address_1'],
            'address_2'=>$item['client']['address_2'],
            'state'=>$item['client']['state'],
            'city'=>$item['client']['city'],
            'country'=>$item['client']['country'],
            'client_type_id'=>$clientType->id,
             ]);
        }

        if(isset($item['property_type']) && is_array($item['property_type']) && count($item['property_type']) ){
            $propertyType = PropertyType::create([
                'name'=>$item['property_type']['name'],
                'description'=>$item['property_type']['description'],
                'status'=>$item['property_type']['status'],
            ]);
        }

        $property = Property::create([
            'name'=>$item['name'],
            'description'=>$item['description'],
            'price'=>$item['price'],
            'client_id'=>$client->id,
            'property_type_id'=>$propertyType->id,
            'status'=>$item['status'],
        ]);


        if(isset($item['property_features']) && is_array($item['property_features']) && count($item['property_features']) ){
            foreach($item['property_features'] as $pf){
                $feature = Feature::create([
                    'name'=>$pf['feature']['name'],
                    'description'=>$pf['feature']['description'],
                    'status'=>$pf['feature']['status'],
                    'propert_type_id'=>$propertyType->id,
                ]);

                $propertyFeature = PropertyFeature::create([
                    'property_id'=>$property->id,
                    'feature_id'=>$feature->id,
                    'value'=>$pf['value'],
                ]);
            }
        }


        if(isset($item['property_images']) && is_array($item['property_images']) && count($item['property_images']) ){
            foreach($item['property_images'] as $pi){

                PropertyImage::create([
                    'property_id'=>$property->id,
                    'image_url'=>$pi['image_url'],
                    'image_type'=>$pi['image_type'],
                    'image_alt_text'=>$pi['image_alt_text'],


                ]);
            }
        }





     }





}
