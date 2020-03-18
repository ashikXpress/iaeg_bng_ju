<?php

namespace App\Http\View\Composers;

use App\Models\CategoryGallery;
use App\Models\CategoryNews;
use App\Models\EventCategory;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\MemberType;
use Illuminate\View\View;

class FrontLayoutComposer
{
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {


        $data['gallery_category']= CategoryGallery::all();
        $data['news_category']= CategoryNews::all();
        $data['member_types']= MemberType::all();
        $data['event_category']= EventCategory::all();
        $view->with($data);

    }
}
