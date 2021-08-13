<?php

namespace App\Widgets;

//namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

use Arrilot\Widgets\AbstractWidget;

class PagesCustomDimmer extends AbstractWidget
{

    protected $config = [];


    public function run()
    {
        $count = Voyager::model('Page')->count();
        $string = trans_choice('voyager::dimmer.page', $count);

        return view('widgets.page_custom_dimmer', array_merge($this->config, [
            'icon'   => 'voyager-archive',
            'title'  => "{$count} Páginas",
            'text'   =>"Você tem {$count} páginas cadastradas.",
            'button' => [
                'text' => 'Ver todos as páginas',
                'link' => route('voyager.pages.index'),
            ],
            'image' => '',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Page'));
    }
}


