<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {   
        $allclient = Client::all();
        return view('client.index', compact('allclient'));
    }

    public function addclient()
    {
        return view('client.add_client');
    }

    public function Saveclient(Request $request)
    {
        // print_r($request->all());
        $post = new Client();

		$name = $request->name;
        $phone = $request->phone;
        $service = $request->service;
        $email = $request->email;
        $address = $request->address;
        $note = $request->note;

        //image 1
        if($request->hasFile('photo')){
            $image=$request->file('photo');
            $imageName1 = time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName1);
            $post->photo=$imageName1;
        }

        //image 2
        if($request->hasFile('file1')){
            $image2=$request->file('file1');
            $imageName2 = time().'.'.$image2->extension();
            $image2->move(public_path('images'),$imageName2);
            $post->file1=$imageName2;
        }

        //image 3
        if($request->hasFile('file2')){
            $image3=$request->file('file2');
            $imageName3 = time().'.'.$image3->extension();
            $image3->move(public_path('images'),$imageName3);
            $post->file2=$imageName3;
        }

        //image 4
        if($request->hasFile('file3')){
            $image4=$request->file('file3');
            $imageName4 = time().'.'.$image4->extension();
            $image4->move(public_path('images'),$imageName4);
            $post->file3=$imageName4;
        }

        //image 5
        if($request->hasFile('file4')){
            $image5=$request->file('file4');
            $imageName5 = time().'.'.$image5->extension();
            $image5->move(public_path('images'),$imageName5);
            $post->file4=$imageName5;
        }

        //image 6
        if($request->hasFile('file5')){
            $image6=$request->file('file5');
            $imageName6 = time().'.'.$image6->extension();
            $image6->move(public_path('images'),$imageName6);
            $post->file5=$imageName6;
        }

        //image 7
        if($request->hasFile('file6')){
            $image7=$request->file('file6');
            $imageName7 = time().'.'.$image7->extension();
            $image7->move(public_path('images'),$imageName7);
            $post->file6=$imageName7;
        }

        //image 8
        if($request->hasFile('file7')){
            $image8=$request->file('file7');
            $imageName8 = time().'.'.$image8->extension();
            $image8->move(public_path('images'),$imageName8);
            $post->file7=$imageName8;
        }

        //image 9
        if($request->hasFile('file8')){
            $image9=$request->file('file8');
            $imageName9 = time().'.'.$image9->extension();
            $image9->move(public_path('images'),$imageName9);
            $post->file8=$imageName9;
        }

        //image 10
        if($request->hasFile('file9')){
            $image10=$request->file('file9');
            $imageName10 = time().'.'.$image10->extension();
            $image10->move(public_path('images'),$imageName10);
            $post->file9=$imageName10;
        }
       
        
       
        $post->name=$name;
        $post->phone=$phone;
        $post->service=$service;
        $post->email=$email;
        $post->address=$address;
        $post->note=$note;

        $post->save();
        return redirect()->route('addClient')->with('post_client', 'Post has been created successfully');
        
    }

    public function editclient($id)
    {
        $client = Client::find($id);
    	return view('client.edit_client', compact('client'));
    }

    public function updateclient(Request $request)
    {
        $post = Client::find($request->id);

		$name = $request->name;
        $phone = $request->phone;
        $service = $request->service;
        $email = $request->email;
        $address = $request->address;
        $note = $request->note;

        //image 1
        if($request->hasFile('photo')){
            $image=$request->file('photo');
            $imageName1 = time().'.'.$image->extension();
            $image->move(public_path('images'),$imageName1);
            $post->photo=$imageName1;
        }

        //image 2
        if($request->hasFile('file1')){
            $image2=$request->file('file1');
            $imageName2 = time().'.'.$image2->extension();
            $image2->move(public_path('images'),$imageName2);
            $post->file1=$imageName2;
        }

        //image 3
        if($request->hasFile('file2')){
            $image3=$request->file('file2');
            $imageName3 = time().'.'.$image3->extension();
            $image3->move(public_path('images'),$imageName3);
            $post->file2=$imageName3;
        }

        //image 4
        if($request->hasFile('file3')){
            $image4=$request->file('file3');
            $imageName4 = time().'.'.$image4->extension();
            $image4->move(public_path('images'),$imageName4);
            $post->file3=$imageName4;
        }

        //image 5
        if($request->hasFile('file4')){
            $image5=$request->file('file4');
            $imageName5 = time().'.'.$image5->extension();
            $image5->move(public_path('images'),$imageName5);
            $post->file4=$imageName5;
        }

        //image 6
        if($request->hasFile('file5')){
            $image6=$request->file('file5');
            $imageName6 = time().'.'.$image6->extension();
            $image6->move(public_path('images'),$imageName6);
            $post->file5=$imageName6;
        }

        //image 7
        if($request->hasFile('file6')){
            $image7=$request->file('file6');
            $imageName7 = time().'.'.$image7->extension();
            $image7->move(public_path('images'),$imageName7);
            $post->file6=$imageName7;
        }

        //image 8
        if($request->hasFile('file7')){
            $image8=$request->file('file7');
            $imageName8 = time().'.'.$image8->extension();
            $image8->move(public_path('images'),$imageName8);
            $post->file7=$imageName8;
        }

        //image 9
        if($request->hasFile('file8')){
            $image9=$request->file('file8');
            $imageName9 = time().'.'.$image9->extension();
            $image9->move(public_path('images'),$imageName9);
            $post->file8=$imageName9;
        }

        //image 10
        if($request->hasFile('file9')){
            $image10=$request->file('file9');
            $imageName10 = time().'.'.$image10->extension();
            $image10->move(public_path('images'),$imageName10);
            $post->file9=$imageName10;
        }
       
        
       
        $post->name=$name;
        $post->phone=$phone;
        $post->service=$service;
        $post->email=$email;
        $post->address=$address;
        $post->note=$note;

        $post->save();
        return redirect()->route('clients')->with('post_client', 'Post has been created successfully');
    }

    public function viewclient($id)
    {
        $client = Client::find($id);
    	return view('client.view_client', compact('client'));
    }

    public function deleteclient($id)
    {
    	$deletepost = Client::find($id);
    	$deletepost->delete();
    	return redirect()->route('clients')->with('post_created', 'Post has been created Deleted');
    }
}
