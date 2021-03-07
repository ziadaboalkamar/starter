<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
public function getOffers(){
return Offer::select('id','name')->get();
}
//public function store(){
//        Offer::create([
//            'name' => 'offer2',
//            'price' => '700',
//            'details' => 'this offer for kids',
//            ]);
//}

public  function create(){
return view('offer.create');
}

public function  store(offerRequest  $request){
// validate data before insert to database
//    $messages = $this->getMessages();
//    $rules = $this->getRules();
//    $validatore = Validator::make($request->all(),$rules,$messages);
//    if ($validatore ->fails()){
//        return redirect()->back()->withErrors($validatore)->withInputs($request->all());
//    }
    //insert
            Offer::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'price' =>$request->price ,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
            ]);
return redirect()->back()->with(['success' => 'تم اضافة العرض بنجاح']);

}
//protected function getMessages(){
//        return $messages=[
//            'name.required'=>__('messages.offer name required'),
//            'name.unique' => __('messages.offer name unique'),
//            'price.numeric' => __('messages.offer price numeric'),
//            'price.required' => __('messages.offer price required'),
//            'details.required' =>__('messages.offer details required'),
//        ];
//}
//    protected function getRules(){
//        return $rules=[
//            'name' => 'required|max:100|unique:offer,name',
//            'price' =>'required|numeric' ,
//            'details' => 'required',
//        ];
//    }


public function getAllOffer(){
       $offers= Offer::select('id',
           'name_' .LaravelLocalization::getCurrentLocale().' as name',
           'details_'. LaravelLocalization::getCurrentLocale() . ' as details',
           'price')->get();
       return view('offer.all',compact('offers'));
}

}
