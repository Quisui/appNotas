<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PunteosController extends Controller
{
    public function store(Request $request) {
        try
        {
            $datos = $request->getContent();

            $num=mt_rand(1,6);
            
            //sleep for 1 seconds
            sleep(1);
            return response()->json([
                'success' => true,
                'rand' => $num,
                'env' => $datos,
            ]);

        }
        catch(\Exception $e)
        {   
            //sleep for 1 seconds
            sleep(1);
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
