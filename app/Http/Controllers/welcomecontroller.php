<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\Popmessage;
use App\Models\Subscribe;
use Carbon\Carbon;
use App\Models\Entreneurship;
use App\Models\Grants;
use App\Models\Internship;
use App\Models\Scholarship;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;

class welcomecontroller extends Controller
{
    public function view(Request $request)
    {
        
        $popmessages = Popmessage::get();
        
        $data = compact('popmessages');
        return view('frontend/page/home')->with($data);
    }
    public function subscribing(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribe,email', // Unique validation rule added here
        ]);
        $subscribe = new Subscribe;
        $subscribe->email = $request->input('email');
        $subscribe->verify = $request->input('verify') ?? 0;;
        $subscribe->save();
        return back()->with('success', 'Subscription successful');

    }
    public function search(Request $request)
    {   
        $search = $request->input('search', '');
        
        if ($search != "") {
            $model1 = Internship::where('tittleofopportunity', 'like', "%$search%")->get();
                $model2 = Scholarship::where('tittleofopportunity', 'like', "%$search%")->get();
                $model3 = Grants::where('tittleofopportunity', 'like', "%$search%")->get();
                $model4 = Entreneurship::where('tittleofopportunity', 'like', "%$search%")->get();
                $model5 = Posting::where('nameofcompany', 'like', "%$search%")->get();

                $posting = $model1
                ->merge($model2)
                ->merge($model3)
                ->merge($model4)
                ->merge($model5);
            // Retrieve the first item from the query results
            $post = $posting->first();
        
            return view('frontend.page.search', compact('posting', 'post', 'search'));
        }
        
            else {
           
                $model1 = Internship::latest()->paginate(6);
                $model2 = Scholarship::latest()->paginate(6);
                $model3 = Grants::latest()->paginate(6);
                $model4 = Entreneurship::latest()->paginate(6);
                $model5 = Posting::latest()->paginate(6);
                // Merge the paginated items, not the collections
                $mergedItems = array_merge($model1->items(), $model2->items(), $model3->items(), $model4->items(), $model5->items());
            
                // Create a new paginator instance based on the merged items
                $posting = new LengthAwarePaginator(
                    $mergedItems,
                    $model1->total() + $model2->total()+ $model3->total()+ $model4->total()+ $model5->total()
                    ,
                    $model1->currentPage(),
                    ['path' => $request->url(), 'query' => $request->query()]
                );
            
                $post = $posting->items()[0];
            
                return view('frontend/page/search', compact('posting', 'post', 'search'));
            }
    }

public function searching($id, $type)
    {
        if ($type == 'scholarships') {
            $record = Scholarship::findOrFail($id);}
        elseif ($type == 'internship') {
            $record = Internship::findOrFail($id);}
        elseif ($type == 'grants') {
            $record = Grants::findOrFail($id);}
        elseif ($type == 'entrepreneurship') {
            $record = Entrepreneurship::findOrFail($id);}
        else{
            $record = Posting::findOrFail($id);}
        return response()->json($record);
    }
    
  }