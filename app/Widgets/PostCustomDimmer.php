<?php

namespace App\Widgets;

//namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

use Arrilot\Widgets\AbstractWidget;

class PostCustomDimmer extends AbstractWidget
{

    protected $config = [];


    public function run()
    {
        $count = Voyager::model('Post')->count();
        $string = trans_choice('voyager::dimmer.post', $count);

        return view('widgets.post_custom_dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} Posts",
            'text'   =>"Você tem {$count} notícias/posts cadastrados.",
            'button' => [
                'text' => 'Ver todos os Posts',
                'link' => route('voyager.posts.index'),
            ],
            'image' => '',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}


