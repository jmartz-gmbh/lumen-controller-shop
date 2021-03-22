<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function all(Request $request){
        $connection = DB::table('shops');

        $shops = $connection->get();

        $this->addData('shops',$shops);
        $this->addMessage('success','All your Shops.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function view(Request $request, int $id){
        $shop = DB::table('shops')
            ->where('id','=',$id);

        $count = $shop->count();

        if($count === 1){
            $this->addData('shop',$shop->first());
        }
        else{
            $this->addMessage('success','Shop doesnt exists.');
        }

        return $this->getResponse();
    }
}
