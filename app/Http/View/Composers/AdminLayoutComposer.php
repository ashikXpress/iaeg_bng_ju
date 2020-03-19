<?php

namespace App\Http\View\Composers;

use App\Models\Member;

use Illuminate\View\View;

class AdminLayoutComposer
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


        $data['unapproved_count']= Member::where('is_member',2)->count();
        $view->with($data);

    }
}
