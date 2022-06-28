<?php

namespace App\Http\Controllers;
use App\Models\Printing;
use App\Models\Product;
use App\Models\Software;
use Illuminate\Http\Request;

class PrintingController extends Controller
{
     /**
     * Display a listing of the resourceprinting
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $printings = Printing::all();
        return view('pages.admin.dashboard.printing.index', compact('printings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.printing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required',

        ]);
        Printing::create([
            'name' => $request->name,

        ]);
        return redirect()->route('printing.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $printing = Printing::find($id);
        return view('pages.admin.dashboard.printing.edit', compact('printing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        printing::find($id)->update([

            'name' => $request->name,

        ]);
        return redirect()->route('printing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        printing::find($id)->delete();
        return redirect()->route('printing.index');
    }
    public function search_print(Request $request){
        $print = Product::query();
        if($request->name)
        {
            $products=$print->with('user')->where('print_technology','LIKE', "%{$request->name}%" )->get();

            return response()->json([
                'search'=>$products,

            ]);
        }
    }
    public function search_print_title(Request $request){
       
        $print = Product::query();
        if($request->search)
        {
            $products=$print->with('user')->where('description','LIKE', "%{$request->search}%" )->get();
            return response()->json([
                'search'=>$products,

            ]);
        }

    }
}
