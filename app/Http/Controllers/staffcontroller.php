<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menues;
use App\Models\menu_item;
use App\Models\ongoing_order;

class staffcontroller extends Controller

{
          public function order()
          {
            $menu=menues::all();
            $menu_items=menu_item::get();
            return view('components.orders',compact('menu','menu_items'));

         }


         public function Dinein()
         {
            $menu=menues::all();
            $menu_items=menu_item::get();
           return view('orders.Dinein',compact('menu','menu_items'));
        }

        // public function Stor(Request $request){

        //     $PData = json_decode($request->Data);
        //     foreach($PData->product_ids as $key=> $tmp){
        //         $product_Id = $tmp;
        //         $Quantyt = $PData->quantities[$key];
        //         $prices = $PData->prices[$key];
        //         $total_line_prices = $PData->total_line_prices[$key];
        //         $table_number = $PData->table_number;
        //         $product_name = $PData->product_names[$key];

        //     }

        public function Store(Request $request)
        {
            // Decode JSON data
            $PData = json_decode($request->getContent(), false, 512, JSON_THROW_ON_ERROR);

            // Check if JSON decoding was successful
            if (!is_object($PData)) {
                return response()->json(['error' => 'Invalid JSON data'], 400);
            }

            // Ensure that the expected properties exist in $PData
            if (!property_exists($PData, 'product_names') || !property_exists($PData, 'quantities') || !property_exists($PData, 'prices') || !property_exists($PData, 'total_line_prices') || !property_exists($PData, 'table_number') || !property_exists($PData, 'customer_name') || !property_exists($PData, 'contact_number')) {
                return response()->json(['error' => 'Missing required properties in data'], 400);
            }

            // Debugging: Log the content and type of $PData
            info('Content of $PData:', ['content' => $PData, 'type' => gettype($PData)]);

            // Get common values outside the loop
            $table_number = $PData->table_number ?? null;
            $customer_name = $PData->customer_name ?? null;
            $contact_number = $PData->contact_number ?? null;

            // Check if any required data is missing
            if ($table_number === null || $customer_name === null || $contact_number === null) {
                return response()->json(['error' => 'Missing required data outside the loop'], 400);
            }

            foreach ((array) $PData->product_names as $key => $product_name) {
                // Get values for the current key
                $quantity = is_array($PData->quantities) ? ($PData->quantities[$key] ?? null) : null;
                $price = is_array($PData->prices) ? ($PData->prices[$key] ?? null) : null;
                $total_line_price = is_array($PData->total_line_prices) ? ($PData->total_line_prices[$key] ?? null) : null;

                // Check if any required data for the current key is missing
                if ($quantity === null || $price === null || $total_line_price === null) {
                    return response()->json(['error' => 'Missing required data for key ' . $key], 400);
                }

                // Store the values for the current key
                ongoing_order::create([
                    'customer_name' => $customer_name,
                    'contact_number' => $contact_number,
                    'table_number' => $table_number,
                    'product_name' => $product_name,
                    'product_quantity' => $quantity,
                    'price' => $price,
                    'total_price' => $total_line_price,
                ]);
            }

            // Add a success response outside the foreach loop
            return response()->json(['success' => 'Data stored successfully'], 200);
        }
                }
