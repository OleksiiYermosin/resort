<?php


namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Room;

class MyController extends Controller{
    public function changePage($page){
        return view($page);
    }

    private function makeOrder($data){
        $clients = Client::where('name', $data[5])->get();
        if(!isset($clients)){
            $c = new Client();
            $c->name = $data[5];
            $c->save();
        }
        $client = Client::where('name', $data[5])->first()->id;
        $room = new Room();
        $prices = array("Standard RoomLand view"=>1500, "Standard RoomGarden view"=>2000, "Standard RoomPool view"=>2200, "Standard RoomSea view"=>2500,
            "Standard Jac. RoomLand view"=>2000, "Standard Jac. RoomGarden view"=>2300, "Standard Jac. RoomPool view"=>2500, "Standard Jac. RoomSea view"=>3000,
            "Superior StandardLand view"=>4000, "Superior StandardGarden view"=>4200, "Superior StandardPool view"=>4300, "Superior StandardSea view"=>4500,
            "Family RoomLand view"=>3500, "Family RoomGarden view"=>3700, "Family RoomPool view"=>4000, "Family RoomSea view"=>4500,
            "SuiteLand view"=>4500, "SuiteGarden view"=>4700, "SuitePool view"=>5000, "SuiteSea view"=>5500,
            "Honey Moon SuiteLand view"=>4500, "Honey Moon SuiteGarden view"=>4700, "Honey Moon SuitePool view"=>5000, "Honey Moon SuiteSea view"=>5500);
        $price = $prices($data[2].$data[3]);
    }

    public function bookRoom(){
        $data = array();
        $data[0] = request('trip-start');
        $data[1] = request('trip-end');
        $data[2] = request('room-type');
        $data[3] = request('features');
        $data[4] = request('guests');
        $data[5] = request('nameSurname');
        $rooms = Room::where('type', $data[2])->where('features', $data[3])->get();
        $message=array();
        if(isset($rooms)&&count($rooms)==2){
            $isEmpty = 0;
            foreach ($rooms as $room){
                $outDate = $room->check_out_date;
                if($data[0]>$outDate){
                    $isEmpty = 1;
                    break;
                }
            }
            if ($isEmpty==0){
                $message[0] = "Номерів типу ".$data[2]." з видом на ".$data[3]." наразі немає в наявності";
            }else{
                $message[0] = "c";
                $message[1] = "d";
            }
        }else {
            $message[0] = "a";
            $message[1] = "b";
        }
        return redirect('/page=afterBooking')->with('message', $message);
    }
}
