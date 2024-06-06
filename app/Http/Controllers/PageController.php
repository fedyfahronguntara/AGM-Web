<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Order;
use App\Models\Feedback;
use Illuminate\View\View;
use App\Models\TravelPackage;
use App\Models\Car;
use App\Notifications\ExampleNotification;
use App\Notifications\ExampleNotification2;
use App\Mail\StoreContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\StoreEmailRequest;
use App\Models\Category;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreOrderRequest;

class PageController extends Controller
{
    public function home() : View
    {
        // $categories = Category::with('travel_packages')->get();
        $posts = Post::get();
        $order = Order::get();
        return view('home', compact('posts','order'));
    }

    public function detail(TravelPackage $travelPackage): View
    {
        return view('detail', compact('travelPackage'));
    }

    public function cardetail(Car $car, Request $request): View
    {
        $detailorder['pickupdate'] =$request->pickupdate;
        $detailorder['pickuptime'] =$request->pickuptime;
        $detailorder['location'] =$request->location;
        $detailorder['servicetype'] =$request->servicetype;
        $detailorder['goingto'] =$request->goingto;
        return view('cardetail', ['car'=>$car,'detailorder'=> $detailorder]);
    }

    public function orderdetail(Car $car, Request $request): View
    {
        $detailorder['pickupdate'] =$request->pickupdate;
        $detailorder['pickuptime'] =$request->pickuptime;
        $detailorder['location'] =$request->location;
        $detailorder['servicetype'] =$request->servicetype;
        $detailorder['goingto'] =$request->goingto;
        return view('orderdetail', ['car'=>$car,'detailorder'=> $detailorder]);
    }

    public function package(){
        $travelPackages = TravelPackage::with('galleries')->get();

        return view('package', compact('travelPackages'));
    }
    public function fullday(){
        $travelPackages = TravelPackage::with('galleries')->get();

        return view('fullday', compact('travelPackages'));
    }
    public function order(){
        // $travelPackages = TravelPackage::with('galleries')->get();

        return view('order');
    }
    public function transfer(){
        $travelPackages = TravelPackage::with('galleries')->get();

        return view('transfer', compact('travelPackages'));
    }

    public function posts(){
        $posts = Post::get();

        return view('posts', compact('posts'));
    }

    public function detailPost(Post $post){
        return view('posts-detail',compact('post'));
    }

    public function contact(){
        return view('contact');
    }

    public function getEmail(StoreEmailRequest $request){
        $detail = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('fedyfahron@gmail.com')->send(new StoreContactMail($detail));
        return back()->with('message', 'Terimakasih atas feedbacknya ! kami akan membacanya sesegera mungkin');
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		// $status = $request->status;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$cars = Car::get()
		->where('status','0');
        // $detailorder = [
        //     'cartype' => $request->cartype,
        //     'pickupdate' => $request->pickupdate,
        //     'pickuptime' => $request->pickuptime,
        //     'location' => $request->location
        // ];
        $detailorder =$request->all();

        // if ($request->cartype){
        //     return dd($request->cartype);
        //     $cars=Car::get()->where('status','0');
        // }
        // else{

        //     return view('fullday')->with('message', 'Data yang anda cari tidak tersedia');
        // }
 
    		// mengirim data pegawai ke view index
		return view('order',['cars'=>$cars,'detailorder'=> $detailorder]);
 
	}


    public function booking(Request $request) 
    {
        // $data = $request->all();
        
        $data['no_wa']=$request->wa;
        // $data['email']="1";
        $data['cartype']=$request->cartype;
        $data['pickupdate']=$request->pickupdate;
        $data['location']=$request->location;
        $data['pickuptime']=$request->pickuptime;
        $data['customer']=$request->name;
        $data['price']=$request->price;
        $data['Status']='0';
        $data['order_id']=$request->id;
        $data['goingto']=$request->goingto;
        $data['servicetype']=$request->servicetype;
        $data['car_id']=$request->car_id;
        $data['buktitf'] = $request->file('buktitf')->store(
            'assets/buktitf', 'public'
        );
        $data['tnc']=$request->tnc1;

        Mail::to($request->email)->send(new StoreContactMail($data));
        Order::create($data);
        Notification::route('telegram','300227958')->notify(new ExampleNotification());
        return redirect()->route('fullday')->with('message', 'Booking with ID '.$data['order_id'].' Successfully !  You can check on Status Track Menu');
    }

    public function feedback(Request $request) 
    {
        // $data = $request->all();
        $data['name']=$request->name;
        // $data['email']="1";
        $data['email']=$request->email;
        $data['message']=$request->message;
        $data['Status']='0';
        
        Feedback::create($data);
        Notification::route('telegram','300227958')->notify(new ExampleNotification2());
        return redirect()->route('contact')->with('message', 'Feedback Send Successfully ! ');
    }


    public function searchForm()
    {
        return view('ordersearch');
    }

    public function ordersearch(Request $request)
    {
        $query = $request->id;
        $hasil = Order::where('order_id', $query)->get();
                            

        return view('ordersearch', ['results'=>$hasil,'query'=> $query]);
    }
}
