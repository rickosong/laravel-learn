<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            'title' => 'Post pertama',
            'author' => 'Ricko',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia non dolore maiores ad cumque facilis voluptatem inventore laborum itaque quo eligendi nostrum, numquam atque harum, explicabo soluta consequuntur hic dolorem.'
        ],

        [
            'title' => 'Post kedua',
            'author' => 'Mohammad',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia non dolore maiores ad cumque facilis voluptatem inventore laborum itaque quo eligendi nostrum, numquam atque harum, explicabo soluta consequuntur hic dolorem.'
        ],
    ];

    public static function all() {
        // disini menggunakan OOP
        // jika properti biasa, maka harus menggunakan return $this-> nama var
        // tapi karena propertinya statis, maka menggunakan return self:: nava var
        return self:: $blog_post;
    }
}
