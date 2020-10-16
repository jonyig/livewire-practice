<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $searchTerm;

    public $list = [
        [ 'key' => 1 , 'name' => 'jonny' , 'content' => 'ada'],
        [ 'key' => 2 , 'name' => 'ruidie' , 'content' => 'hkrlitjlhr'],
        [ 'key' => 3 , 'name' => 'mary' , 'content' => 'vevee'],
        [ 'key' => 4 , 'name' => 'jane' , 'content' => 'mcbn,jn;lekn'],
        [ 'key' => 5 , 'name' => 'kevin' , 'content' => 'gieugoerighj'],
        [ 'key' => 6 , 'name' => 'illy' , 'content' => 'pjotuioj'],
        [ 'key' => 7 , 'name' => 'tina' , 'content' => 'qweqweqwe'],
        [ 'key' => 8 , 'name' => 'gina' , 'content' => 'vcvcxvc'],
        [ 'key' => 9 , 'name' => 'ruby' , 'content' => 'xzzxzx'],
        [ 'key' => 10 , 'name' => 'zoe' , 'content' => 'htht'],
    ];

    public $users;

    public function render()
    {
        $this->users = array_filter($this->list, function ($var) {
            if(empty($this->searchTerm)){
                return $var;
            }elseif(strstr($var['name'] , $this->searchTerm)){
                return $var;
            }elseif(strstr($var['content'] , $this->searchTerm)){
                return $var;
            }
        });
        return view('livewire.search');
    }

}
