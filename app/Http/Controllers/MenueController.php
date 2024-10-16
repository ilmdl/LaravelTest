<?php

namespace App\Http\Controllers;

use App\Models\menue;
use App\Http\Requests\StoremenueRequest;
use App\Http\Requests\UpdatemenueRequest;
use Illuminate\Http\Request;

class MenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('welcome',['menue'=> menue::all()]);
    }
    public function addToMenue(Request $request){
        $availability = 0;
        \Log::info(json_encode($request));
        if ($request->avail == "on"){
            $availability = 1;
        }
        $newListItem = new menue;
        $newListItem->name = $request->item;
        $newListItem->price = $request->price;
        $newListItem->is_available = $availability;
        $newListItem->description = $request->description;
        $newListItem->allergens = $request->allergens;
        $newListItem->offers = $request->offers;
        $newListItem->category_id = $request->category_id;
        $newListItem->save();
        return redirect('/');
    }
    public function showOrder(Request $request){
        \Log::info(json_encode( $request ));
        \Log::info(json_encode( $request->order ));
        $orderIds = explode(',',  $request->order);
        \Log::info(json_encode( $orderIds ));
        $orderList = [];
        $orederTotal = 0;
        foreach ($orderIds as $order){
            $orderList[] = menue::where('id', $order)->get( )[0];
            \Log::info(json_encode($order));
            \Log::info(json_encode(menue::where('id', $order)->get( 'price')));
            \Log::info(json_encode(menue::where('id', $order)->get( 'price')[0]));
            \Log::info(json_encode(menue::where('id', $order)->get( 'price')[0]->price));
            $orederTotal += menue::where('id', $order)->get( 'price')[0]->price;
        }
        return view('anOrder',['yourOrders'=>$orderList, 'total'=>$orederTotal, 'menue'=> menue::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremenueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(menue $menue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menue $menue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemenueRequest $request, menue $menue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menue $menue)
    {
        //
    }
}
