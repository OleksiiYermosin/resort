<?php


namespace App\Http\Controllers;
use DB;
use App\Models\Message;
use App\Models\Client;

class AdminController{

    public function uploadAdminPage(){
        $mails = DB::table('messages')
            ->join('clients', 'clients.id', '=', 'messages.client_id')
            ->select('clients.name', 'messages.message', 'clients.email', 'messages.is_read')
            ->orderBy('messages.is_read')
            /*->where('messages.is_read', 0)*/->get();
        return view('adminpanel', ['mails' => $mails]);
    }

    public function markMessages(){
        $mails = json_decode(base64_decode(request('mails')));
        if(!empty($mails)){
            foreach ($mails as $mail){
                $c = Client::where('name', $mail->name)->where('email', $mail->email)->first();
                $m = Message::where('message', $mail->message)->where('client_id', $c->id)->get();
                if(!empty($m[0])){
                    foreach ($m as $message){
                        $message->is_read = 1;
                        $message->save();
                    }
                }
            }
        }
        return redirect('/adminpanel');
    }

    public function markSingleMessage(){
        $name = request('name');
        $mail = request('mail');
        $text = request('text');
        $c = Client::where('name', $name)->where('email', $mail)->first();
        if(isset($c)){
            $m = Message::where('message', $text)->where('client_id', $c->id)->get();
            if(!empty($m[0])){
                foreach ($m as $message){
                    $message->is_read = 1;
                    $message->save();
                }
            }
        }
        return redirect('/adminpanel');
    }
}
