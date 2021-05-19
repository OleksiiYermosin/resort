<?php


namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Room;
use App\Models\Message;

class MyController extends Controller{
    public function changePage($page){
        return view($page);
    }

    private function makeOrder($data){
        $clients = Client::where('phone', $data[6])->get();
        if(empty($clients[0])){
            $clients = Client::where('name', $data[5])->get();
            if(empty($clients[0])){
                $c = new Client();
                $c->name = $data[5];
                $c->phone = $data[6];
                $c->is_customer = true;
                $c->save();
            }else{
                $c = $clients->first();
                $c->phone=$data[6];
                $c->save();
            }
        }
        $client = Client::where('phone', $data[6])->first();
        if($client->is_customer==false){
            $client->is_customer = true;
            $client->save();
        }
        $room = new Room();
        $room->type = $data[2];
        $room->features = $data[3];
        $prices = array("Standard RoomLand view"=>1500, "Standard RoomGarden view"=>2000, "Standard RoomPool view"=>2200, "Standard RoomSea view"=>2500,
            "Standard Jac. RoomLand view"=>2000, "Standard Jac. RoomGarden view"=>2300, "Standard Jac. RoomPool view"=>2500, "Standard Jac. RoomSea view"=>3000,
            "Superior StandardLand view"=>4000, "Superior StandardGarden view"=>4200, "Superior StandardPool view"=>4300, "Superior StandardSea view"=>4500,
            "Family RoomLand view"=>3500, "Family RoomGarden view"=>3700, "Family RoomPool view"=>4000, "Family RoomSea view"=>4500,
            "SuiteLand view"=>4500, "SuiteGarden view"=>4700, "SuitePool view"=>5000, "SuiteSea view"=>5500,
            "Honey Moon SuiteLand view"=>4500, "Honey Moon SuiteGarden view"=>4700, "Honey Moon SuitePool view"=>5000, "Honey Moon SuiteSea view"=>5500);
        $room->price = $prices[$data[2].$data[3]];
        $room->client_id = $client->id;
        $room->guests = $data[4];
        $room->check_in_date = $data[0];
        $room->check_out_date = $data[1];
        $room->save();
    }

    public function sendMessage(){
        $message=array();
        $name = request('name');
        $mail = request('email');
        $text = request('text');
        $id = null;
        if(!isset($name)||!isset($mail)||!isset($text)){
            $message[0] = "Для відправки повідомлення треба обов'язково вказати email, ім'я та текст повідомлення";
        }else{
            $clients = Client::where('email', $mail)->get();
            $id = null;
            if(empty($clients[0])){
                $clients = Client::where('name', $name)->get();
                if(empty($clients[0])){
                    $c = new Client();
                    $c->name = $name;
                    $c->email = $mail;
                    $c->save();
                    $id =$c->id;
                }
                $c = $clients->first();
                $c->email = $mail;
                $c->save();
                $id =$c->id;
            }else{
                $c = $clients->first();
                if(!isset($c->name)){
                    $c->name = $name;
                    $c->save();
                }
                $id = $c->id;
            }
            $m = new Message();
            $m->client_id = $id;
            $m->message = $text;
            $m->save();
            $message[0] = "Дякуємо за зворотній зв'язок!";
            $message[1] = "Ми обов'язково опрацюємо Ваше повідомлення.";
        }
        return redirect('/page=afterBooking')->with('message', $message);
    }

    public function bookRoom(){
        $data = array();
        $data[0] = request('trip-start');
        $data[1] = request('trip-end');
        $data[2] = request('room-type');
        $data[3] = request('features');
        $data[4] = request('guests');
        $data[5] = request('nameSurname');
        $data[6] = request('phone');
        $rooms = Room::where('type', $data[2])->where('features', $data[3])->where('check_out_date', '>=', date('Y-m-d'))->get();
        $message=array();
        if(!isset($data[6])||!isset($data[5])){
            $message[0] = "Для бронювання необхідно заповнити поля з ПІБ та номером телефону";
            return redirect('/page=afterBooking')->with('message', $message);
        }
        if(isset($rooms)&&count($rooms)>=2){
            $isEmpty = 0;
            foreach ($rooms as $room){
                $outDate = $room->check_out_date;
                if($data[0]>$outDate&&$room->status==0){
                    $isEmpty = 1;
                    $room->status=1;
                    $room->save();
                    break;
                }
            }
            if ($isEmpty==0){
                $message[0] = "Номерів типу ".$data[2]." з видом на ".$data[3]." наразі немає в наявності";
            }else{
                $this->makeOrder($data);
                $message[0] = "Шановний ".$data[5]."!";
                $message[1] = "Бронювання кімнати ".$data[2]." з видом на ".$data[3]." було здійснено успішно!";
                $message[2] = "Термін бронювання: з ".$data[0]." до ".$data[1];
            }
        }else {
            $this->makeOrder($data);
            $message[0] = "Шановний ".$data[5]."!";
            $message[1] = "Бронювання кімнати ".$data[2]." з видом на ".$data[3]." було здійснено успішно!";
            $message[2] = "Термін бронювання: з ".$data[0]." до ".$data[1];
        }
        return redirect('/page=afterBooking')->with('message', $message);
    }
}
