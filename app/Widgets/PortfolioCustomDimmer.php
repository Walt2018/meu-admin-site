<?php

namespace App\Widgets;

//namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Models\Front\Work;

use Arrilot\Widgets\AbstractWidget;

class PortfolioCustomDimmer extends AbstractWidget
{

    protected $config = [];


    public function run()
    {
        $count =  Work::count();
      //  $string = trans_choice('voyager::dimmer.post', $count);

        return view('widgets.post_custom_dimmer', array_merge($this->config, [
            'icon'   => 'voyager-photo',
            'title'  => "{$count} Projetos",
            'text'   =>"Você tem {$count} projetos/portifólios cadastrados.",
            'button' => [
                'text' => 'Ver todos',
                'link' => route('voyager.portifolio.index'),
            ],
            'image' => '',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse',  Work::first());
    }
}


