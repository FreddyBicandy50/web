<?php

namespace App\Models;
class books
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'book_page' => "/book/1",
                'img' => 'https://m.media-amazon.com/images/I/71OMelbI6sL._SL1500_.jpg',
                'link' => 'https://www.amazon.com/Laws-Human-Nature-Robert-Greene/dp/0525428143',
                'title' => 'The Laws of Human Nature',
                'Publish_Date' => '2018',
                'Author' => 'Robert Greene',
                'Page' => '624'
            ],
            [
                'id' => 2,
                'book_page' => "/book/2",
                'img' => 'https://m.media-amazon.com/images/I/611X8GI7hpL._SL1500_.jpg',
                'link' => 'https://www.amazon.com/48-Laws-Power-Robert-Greene/dp/0140280197',
                'title' => 'The 48 Laws of Power',
                'Publish_Date' => '1998',
                'Author' => 'Robert Greene',
                'Page' => '480'
            ], [
                'id' => 3,
                'book_page' => "/book/3",
                'img' => 'https://m.media-amazon.com/images/I/81gTwYAhU7L._SL1500_.jpg',
                'link' => 'https://www.amazon.com/Power-your-Subconscious-Mind/dp/8192910962',
                'title' => 'The Power of your Subconscious Mind',
                'Publish_Date' => '1963',
                'Author' => 'Joseph Murphy',
                'Page' => '146'
            ], [
                'id' => 4,
                'book_page' => "/book/4",
                'img' => 'https://m.media-amazon.com/images/I/61CIKpN5QjL._SL1200_.jpg',
                'link' => 'https://www.amazon.com/Think-Grow-Rich-Landmark-Bestseller/dp/1585424331',
                'title' => 'Think and Grow Rich',
                'Publish_Date' => '1937',
                'Author' => 'Napoleon Hill',
                'Page' => '238'
            ], [
                'id' => 5,
                'book_page' => "/book/5",
                'img' => 'https://m.media-amazon.com/images/I/51HwNMz3EuL._SL1500_.jpg',
                'link' => 'https://www.amazon.com/Art-War-Sun-Tzu/dp/1599869772',
                'title' => 'The Art Of War',
                'Publish_Date' => '5th Century',
                'Author' => 'Sun Tzu',
                'Page' => '500'
            ], [
                'id' => 6,
                'book_page' => "/book/6",
                'img' => 'https://m.media-amazon.com/images/I/51YZMMo5RuL._SL1200_.jpg',
                'link' => 'https://www.amazon.com/Art-Seduction-Robert-Greene/dp/0142001198',
                'title' => 'The Art of Seduction',
                'Publish_Date' => '2001',
                'Author' => 'Robert Greene',
                'Page' => '468'
            ], [
                'id' => 7,
                'book_page' => "/book/7",
                'img' => 'https://m.media-amazon.com/images/I/51V3121nmkL._SL1200_.jpg',
                'link' => 'https://www.amazon.com/Mastery-Robert-Greene/dp/014312417X',
                'title' => 'Mastery',
                'Publish_Date' => '2012',
                'Author' => 'Robert Greene',
                'Page' => '353'
            ], [
                'id' => 8,
                'book_page' => "/book/8",
                'img' => 'https://m.media-amazon.com/images/I/81bsw6fnUiL._SL1500_.jpg',
                'link' => 'https://www.amazon.com/Rich-Dad-Poor-Teach-Middle/dp/1612680194',
                'title' => 'Rich Dad Poor Dad',
                'Publish_Date' => '1997',
                'Author' => 'Robert Kiyosaki',
                'Page' => '336'
            ], [
                'id' => 9,
                'book_page' => "/book/9",
                'img' => 'https://m.media-amazon.com/images/I/61BRxtp9qtL._SL1500_.jpg',
                'link' => 'https://www.amazon.com/12-Rules-Life-Antidote-Chaos/dp/0345816021',
                'title' => '12 Rules for Life',
                'Publish_Date' => '2018',
                'Author' => 'Jordan Peterson',
                'Page' => '448'
            ]
        ];
    }

    public static function Get_book($id)
    {

        return empty(self::all()[$id - 1]) ? abort(404):self::all()[$id - 1];
    }
}
