<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
            'created_at' => '3 mins ago', 
            'creator' => 'Jim',
        ]
    ];

    public $newComment;
    
    public function add_comment(){
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(), 
            'creator' => 'Jim',
        ]);
    }

    

    public function render()
    {
        return view('livewire.comments');
    }
}
