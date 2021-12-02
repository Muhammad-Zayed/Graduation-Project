<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class siteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function profile(){
	    	if(auth()->check()){
	    	$user = auth()->user();
	    	//dd($user->image);
	    	return view('site.profile')->with('user' , $user);
    		}
			return Redirect(route('login'))->withErrors(['You have to login first']);
    }

    public function meeting($id)
    {
            $host = User::findOrfail($id);
            $user = auth()->user();

        if($host->status || $host->id==$user->id){

                if($user->status)
                    return redirect(route('index'));

                $user->status = 1;
                $user->save();
                return Redirect('https://localhost:9000/?roomid='.$id.'&userid='. auth()->user()->id);

            }
        return back()->withErrors('The Meeting not started');
    }

    public function joinMeeting(Request $request)
    {

        $this->validate($request , [
           'id' => 'required',
           'password' => 'required'
        ]);

        $host = User::findOrfail($request->id);
        $user = auth()->user();

        if ($host->status==0)
            return back()->withErrors('The Meeting not started');

        if($host->meeting_password == $request->password){
            if($user->status)
                return redirect(route('index'));

            $user->status = 1;
            $user->save();
            return Redirect('https://localhost:9000/?roomid='.$host->id.'&userid='. auth()->user()->id);
        }
        return back()->withErrors('Password is not correct');
    }


    public function findUser($id)
    {
             $user = User::findOrfail($id);
             return $user;
    }

    public function leaveMeeting($id)
    {
             $user = User::findOrfail($id);
             $user->status = 0;
             $user->save();
             return redirect(route('index'));
    }
    public function close($id)
    {
             $user = User::findOrfail($id);
             $user->status = 0;
             $user->save();
    }

    public function changePhoto(Request $request)
    {
        $this->validate($request ,[
           'image' => 'required|file|max:2048|mimes:jpg,png,jpeg',
        ]);

        auth()->user()->update([
            'image' => $request->image->store('images','public'),
        ]);
        $image = Image::make( public_path('storage/' . auth()->user()->image))->fit(400,400);
        $image->save();
        return back();
    }

}

