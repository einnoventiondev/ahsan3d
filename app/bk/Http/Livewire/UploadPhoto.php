<?php
namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
 
class UploadPhoto extends Component
{
    use WithFileUploads;
 
    public $photo;
 
    public function render()
    {
    	$users=User::all();
    	$sender=$this->sender;
    	$this->allmessages;
        
        return view('livewire.chats',compact('users','sender'));
    }
    public function mountdata()
    {
       $this->getUser();
        if(isset($this->sender->id))
        {
              $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$this->sender->id)->orWhere('user_id',$this->sender->id)->where('reciever_id',auth()->id())->orderBy('id','desc')->get();

               $not_seen= Chat::where('user_id',$this->sender->id)->where('reciever_id',auth()->id());
               $not_seen->update(['is_seen'=> true]);
        }

    }
    public function resetForm()
    {
    	$this->message='';
    }
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
 
        $this->photo->store('photos');

        $data=new Chat;
    	$msg = 'link=&msg='.$this->message;
        $data->message=$msg;

    	$data->user_id=auth()->id();
    	$data->reciever_id=$this->sender->id;
    	$data->save();
        $this->resetForm();

        
    }
    public function getUser($userId=1)
    {
        
        if(auth()->user()->role=='admin'){
            $userId=$this->user_id;
            $user=User::find($userId);
            $this->sender=$user;
            $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$userId)->orWhere('user_id',$userId)->where('reciever_id',auth()->id())->orderBy('id','desc')->get();
        }else{
            $user=User::find($userId);
            $this->sender=$user;
            $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$userId)->orWhere('user_id',$userId)->where('reciever_id',auth()->id())->orderBy('id','desc')->get();
        }
       
     
    }
}
?>