<?php

namespace App\Http\Livewire;
use App\Models\Chat;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
Use \Carbon\Carbon;

class Chats extends Component
{
    use WithFileUploads;
	public $message;
	public $allmessages;
	public $sender;
    public $user_id;
    public $request_id;
    public $request_type;
    public $photo;
    public function render()
    {
    	$users=User::all();
        $request_id = $this->request_id;
        $request_type = $this->request_type;
    	$sender=$this->sender;
        $photo=$this->photo;
    	$this->allmessages;

        return view('livewire.chats',compact('users','sender','request_id','request_type'));
    }
    public function mountdata()
    {
       
       $this->getUser();
        if(isset($this->sender->id))
        {
            $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$this->sender->id)->where('request_id',$this->request_id)->where('request_type',$this->request_type)->orWhere('user_id',$this->sender->id)->where('reciever_id',auth()->id())->where('request_id',$this->request_id)->where('request_type',$this->request_type)->orderBy('id','desc')->get();
            $not_seen= Chat::where('user_id',$this->sender->id)->where('reciever_id',auth()->id())->where('request_id',$this->request_id)->where('request_type',$this->request_type);
            $not_seen->update(['is_seen'=> true]);
        }

    }
  
    public function resetForm()
    {
    	$this->message='';
        $this->photo=null;
    }
    public function SendMessage()
    {
        
    	$data=new Chat;
    	$msg = 'chatImg=&msg='.$this->message;
        $data->message=$msg;

    	$data->user_id=auth()->id();
    	$data->reciever_id=$this->sender->id;
        
        
    	if($this->photo!=null){
            $name = 'ChatImg-'.time(). time().'.'.$this->photo->getClientOriginalExtension();
            
            $this->photo->storeAs('chat',$name);
            // $this->photo->move(public_path('upload/chat/'), $name);
            $photoMsg = 'chatImg='.$name.'&msg=';
            $data->message = $photoMsg;
            $data->photo = $name;
            
        }
       
        $data->request_id=$this->request_id;
        $data->request_type=$this->request_type;
       
        $data->save();
    	$this->resetForm();

    }
    public function getUser($userId=1)
    {
        
        if(auth()->user()->role=='admin'){
            $userId=$this->user_id;
            $requestId=$this->request_id;
            $requestType=$this->request_type;
            $user=User::find($userId);
            $this->sender=$user;
            $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$userId)->where('request_id',$requestId)->where('request_type',$requestType)->orWhere('user_id',$userId)->where('reciever_id',auth()->id())->where('request_id',$requestId)->where('request_type',$requestType)->orderBy('id','desc')->get();
        }else{
            $requestId=$this->request_id;
            $requestType=$this->request_type;
  
            $user=User::find($userId);
            $this->sender=$user;
            $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$userId)->where('request_id',$requestId)->where('request_type',$requestType)->orWhere('user_id',$userId)->where('reciever_id',auth()->id())->where('request_id',$requestId)->where('request_type',$requestType)->orderBy('id','desc')->get();
      
        }
     
    }
 

}
