<?php

namespace App\Http\Controllers\User;

use App\Models\Business;
use App\Models\Category;
use App\Models\ContactUser;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BusinessReview;
use App\Models\ImportantLink;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::whereIsActive(1)->get();
        $recent_listings = Business::whereIsApproved(1)->whereIsActive(1)->with('category', 'subCategory')->orderBy('id', 'DESC')->limit(12)->get();
        return view('user.pages.home.index', compact('categories', 'recent_listings'));
        
    }
    public function about()
    {
        $important_links = ImportantLink::all();
        return view('user.pages.about.index', compact('important_links'));
        
    }
    public function privacy()
    {
        
        return view('user.pages.privacy.index');
        
    }

    public function listing()
    {
        $categories = Category::whereIsActive(1)->get();
        $data = Business::whereIsApproved(1)->whereIsActive(1)->with('category', 'subCategory')->latest();
        // $data = ContactUser::latest();
        if (request()->has('search') && !empty(request()->search)) {
           $data->where('business_name', 'like', '%'. request()->search. '%');
           $data->orWhere('short_description', 'like', '%'. request()->search. '%');
        }
        if (request()->has('location') && !empty(request()->location)) {
            $data->where('business_address', 'like', '%'. request()->location. '%');
            $data->orWhere('business_city', 'like', '%'. request()->location. '%');
         }
        $data = $data->paginate(15)->withQueryString();
        $important_links = ImportantLink::whereIsActive(1)->get();

        return view('user.pages.listing.index', compact('data', 'categories', 'important_links'));
        
    }
    
    public function listingDetail($id)
    {
        $reviews = BusinessReview::whereBusinessId($id)->get();
        // return $reviews->AVG('rating');
        $categories = Category::whereIsActive(1)->get();
        $data = Business::whereId($id)->whereIsApproved(1)->whereIsActive(1)->with('category', 'subCategory')->first();
        // $data = ContactUser::latest();
        if (!isset($data)) {
            return abort('404');
        }
        return view('user.pages.listing.listing_detail', compact('data', 'categories', 'reviews'));
        
    }
    
    public function submit_review(Request $req, $id)
    {
        // return $req;
        $review = new BusinessReview();
        $review->business_id = $req->id;
        $review->rating = $req->rating;
        $review->name = $req->name;
        $review->email = $req->email;
        $review->phone = $req->phone;
        $review->review = $req->review;
        $review->save();
        return back()->with('msg', 'Review Submitted Successfully');
    }

    public function getSubCategory(Request $req)
    {
        $data =  SubCategory::whereCategoryId($req->category_id)->select('id', 'name')->get();
        return response()->json($data);
        // return $req;
    }

    public function contact()
    {
        return view('user.pages.contact');
    }
    
    public function submitQuery(Request $req)
    {
        // return $req;
        $query = new ContactUser();
        $query->name = $req->name;
        $query->phone = $req->phone;
        $query->email = $req->email;
        $query->subject = $req->message;
        $query->description = $req->message;
        $query->save();
        return view('user.pages.contact');
    }
}
