<?php


namespace App\Http\Controllers;
use DB;
use App\Models\Message;

class AdminController{

    public function uploadAdminPage(){
        $mails = DB::table('messages')
            ->join('clients', 'clients.id', '=', 'messages.client_id')
            ->select('clients.name', 'messages.message', 'clients.email')
            ->where('messages.is_read', 0)->get();
        return view('adminpanel', ['mails' => $mails]);
    }

    public function markMessages(){
        $m = Message::where('is_read', '0')->get();
        if(!empty($m[0])){
            foreach ($m as $message){
                $message->is_read = 1;
                $message->save();
            }
        }
        return redirect('/adminpanel');
    }

}
