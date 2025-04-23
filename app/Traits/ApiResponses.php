<?php
namespace App\Traits;

trait ApiResponses
{
         protected function ok($message,$data=[])
     {
         return $this->success($message,$data,200);
     }
     protected function success($message,$data=[],$statuscode=200)
     {
         return response()->json([
             'data'=>$data,
             'message'=>$message,
             'status'=>$statuscode,]);
     }
    protected function error($message,$statuscode)
    {
        return response()->json([
            'message'=>$message,
            'status'=>$statuscode,]);
    }
}
