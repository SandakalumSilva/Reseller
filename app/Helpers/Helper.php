<?php
namespace App\Helpers;


class Helper{

    /**
     * Handles an error response formatting it according to our spec.
     *
     * @param array $error
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function respondWithError($error){
        return response()->json(['status' => false,'errors' => $error]);
    }

    /**
     * Return success message.
     *
     * @param array $arr
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function respondWithSuccess($arr){
        return response()->json(['status' => true,'success' => $arr]);
    }

}
