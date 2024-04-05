<?php

namespace App\Models;
class books
{
    public static function get_all()
    {
        return [
            [
                'id' => 1,
                'title' => 'The Laws Of Human Nature',
                'author' => 'Robert Greene',
                'publish_date' => '2018',
                'pages' => '624',
                'cover_link' => 'https://m.media-amazon.com/images/I/71OMelbI6sL._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/Laws-Human-Nature-Robert-Greene/dp/0525428143',
                'heading' => " From the #1 New York Times-bestselling author of The 48 Laws of Power comes the definitive new book on decoding the behavior of the people around you",
                'description' => "Robert Greene is a master guide for millions of readers, distilling ancient wisdom and philosophy into essential texts for seekers of power, understanding and mastery. Now he turns to the most important subject of all - understanding people's drives and motivations, even when they are unconscious of them themselves.We are social animals. Our very lives depend on our relationships with people. Knowing why people do what they do is the most important tool we can possess, without which our other talents can only take us so far. Drawing from the ideas and examples of Pericles, Queen Elizabeth I, Martin Luther King Jr, and many others, Greene teaches us how to detach ourselves from our own emotions and master self-control, how to develop the empathy that leads to insight, how to look behind people's masks, and how to resist conformity to develop your singular sense of purpose. Whether at work, in relationships, or in shaping the world around you, The Laws of Human Nature offers brilliant tactics for success, self-improvement, and self-defense. "
            ],
            [
                'id' => 2,
                'title' => 'The 48 Laws of Power',
                'author' => 'Robert Greene',
                'publish_date' => '2000',
                'pages' => '452',
                'cover_link' => 'https://m.media-amazon.com/images/I/611X8GI7hpL._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/48-Laws-Power-Robert-Greene/dp/0140280197',
                'heading' => " Amoral, cunning, ruthless, and instructive, this multi-million-copy New York Times bestseller is the definitive manual for anyone interested in gaining, observing, or defending against ultimate control – from the author of The Laws of Human Nature.",
                'description' => " In the book that People magazine proclaimed “beguiling” and “fascinating,” Robert Greene and Joost Elffers have distilled three thousand years of the history of power into 48 essential laws by drawing from the philosophies of Machiavelli, Sun Tzu, and Carl Von Clausewitz and also from the lives of figures ranging from Henry Kissinger to P.T. Barnum. Some laws teach the need for prudence (“Law 1: Never Outshine the Master”), others teach the value of confidence (“Law 28: Enter Action with Boldness”), and many recommend absolute self-preservation (“Law 15: Crush Your Enemy Totally”). Every law, though, has one thing in common: an interest in total domination. In a bold and arresting two-color package, The 48 Laws of Power is ideal whether your aim is conquest, self-defense, or simply to understand the rules of the game. "
            ],
            [
                'id' => 3,
                'title' => 'The Power of your Subconscious Mind',
                'author' => 'Joseph Murphy',
                'publish_date' => '2015',
                'pages' => '297',
                'cover_link' => 'https://m.media-amazon.com/images/I/81gTwYAhU7L._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/Power-your-Subconscious-Mind/dp/8192910962',
                'heading' => "",
                'description' => " Please Read Notes: Brand New, International Softcover Edition, Printed in black and white pages, minor self wear on the cover or pages, Sale restriction may be printed on the book, but Book name, contents, and author are exactly same as Hardcover Edition. Fast delivery through DHL/FedEx express. "
            ], [
                'id' => 4,
                'title' => 'Think and Grow Rich',
                'author' => 'Napoleon Hill',
                'publish_date' => '2007',
                'pages' => '320',
                'cover_link' => 'https://m.media-amazon.com/images/I/61CIKpN5QjL._SL1200_.jpg',
                'book_link' => 'https://www.amazon.com/Think-Grow-Rich-Landmark-Bestseller/dp/1585424331',
                'heading' => " The bestselling success book of all time—now revised and updated for the 21st century.",
                'description' => "Think and Grow Rich has been called the “Granddaddy of All Motivational Literature.” It was the first book to boldly ask, “What makes a winner?” The man who asked and listened for the answer, Napoleon Hill, is now counted in the top ranks of the world's winners himself. The most famous of all teachers of success spent “a fortune and the better part of a lifetime of effort” to produce the “Law of Success” philosophy that forms the basis of his books and that is so powerfully summarized in this one.In the original Think and Grow Rich, published in 1937, Hill draws on stories of Andrew Carnegie, Thomas Edison, Henry Ford, and other millionaires of his generation to illustrate his principles. In the updated version, Arthur R. Pell, Ph.D., a nationally known author, lecturer, and consultant in human resources management and an expert in applying Hill's thought, deftly interweaves anecdotes of how contemporary millionaires and billionaires, such as Bill Gates, Mary Kay Ash, Dave Thomas, and Sir John Templeton, achieved their wealth. Outmoded or arcane terminology and examples are faithfully refreshed to preclude any stumbling blocks to a new generation of readers. "
            ], [
                'id' => 5,
                'title' => 'The Art of War',
                'author' => 'Sun TZU',
                'publish_date' => '2007',
                'pages' => '68',
                'cover_link' => 'https://m.media-amazon.com/images/I/51HwNMz3EuL._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/Art-War-Sun-Tzu/dp/1599869772',
                'heading' => "Note: The chapters in the book are not in order and it is intentional.This edition approved by the Holden-Crowther Organisation for Asian Studies. ",
                'description' => ""
            ], [
                'id' => 6,
                'title' => 'The Art of Mastery',
                'author' => 'Robert Greene',
                'publish_date' => '2013',
                'pages' => '368',
                'cover_link' => 'https://m.media-amazon.com/images/I/51V3121nmkL._SL1200_.jpg',
                'book_link' => 'https://www.amazon.com/Mastery-Robert-Greene/dp/014312417X',
                'heading' => " From the bestselling author of The 48 Laws of Power and The Laws of Human Nature, a vital work revealing that the secret to mastery is already within you. ",
                'description' => " Each one of us has within us the potential to be a Master. Learn the secrets of the field you have chosen, submit to a rigorous apprenticeship, absorb the hidden knowledge possessed by those with years of experience, surge past competitors to surpass them in brilliance, and explode established patterns from within. Study the behaviors of Albert Einstein, Charles Darwin, Leonardo da Vinci and the nine contemporary Masters interviewed for this book. The bestseller author of The 48 Laws of Power, The Art of Seduction, and The 33 Strategies of War, Robert Greene has spent a lifetime studying the laws of power. Now, he shares the secret path to greatness. With this seminal text as a guide, readers will learn how to unlock the passion within and become masters. "
            ], [
                'id' => 7,
                'title' => 'Rich dad Poor dad',
                'author' => 'Robert Kiyosaki',
                'publish_date' => '2017',
                'pages' => '336',
                'cover_link' => 'https://m.media-amazon.com/images/I/81bsw6fnUiL._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/Rich-Dad-Poor-Teach-Middle/dp/1612680194',
                'heading' => "",
                'description' => "  It's been nearly 25 years since Robert Kiyosaki’s Rich Dad Poor Dad first made waves in the Personal Finance arena.
It has since become the #1 Personal Finance book of all time... translated into dozens of languages and sold around the world.  Rich Dad Poor Dad is Robert's story of growing up with two dads  his real father and the father of his best friend, his rich dad  and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.20 Years... 20/20 Hindsight
In the 20th Anniversary Edition of this classic, Robert offers an update on what we’ve seen over the past 20 years related to money, investing, and the global economy. Sidebars throughout the book will take readers fast forward”  from 1997 to today  as Robert assesses how the principles taught by his rich dad have stood the test of time.
In many ways, the messages of Rich Dad Poor Dad, messages that were criticized and challenged two decades ago, are more meaningful, relevant and important today than they were 20 years ago.
As always, readers can expect that Robert will be candid, insightful... and continue to rock more than a few boats in his retrospective.
Will there be a few surprises? Count on it.
Rich Dad Poor Dad...
 Explodes the myth that you need to earn a high income to become rich
 Challenges the belief that your house is an asset
 Shows parents why they can't rely on the school system to teach their kids
about money
 Defines once and for all an asset and a liability
 Teaches you what to teach your kids about money for their future financial success. "
            ], [
                'id' => 8,
                'title' => '12 Rules of life',
                'author' => 'Jordan Peterson',
                'publish_date' => '2018',
                'pages' => '336',
                'cover_link' => 'https://m.media-amazon.com/images/I/61BRxtp9qtL._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/12-Rules-Life-Antidote-Chaos/dp/0345816021',
                'heading' => "#1 INTERNATIONAL BESTSELLERWhat does everyone in the modern world need to know?Renowned psychologist Jordan B. Peterson's answer to this most difficult of questions uniquely combines the hard-won truths of ancient tradition with the stunning revelations of cutting-edge scientific research.",
                'description' => " Humorous, surprising and informative, Dr. Peterson tells us why skateboarding boys and girls must be left alone, what terrible fate awaits those who criticize too easily, and why you should always pet a cat when you meet one on the street.What does the nervous system of the lowly lobster have to tell us about standing up straight (with our shoulders back) and about success in life? Why did ancient Egyptians worship the capacity to pay careful attention as the highest of gods? What dreadful paths do people tread when they become resentful, arrogant and vengeful?Dr. Peterson journeys broadly, discussing discipline, freedom, adventure and responsibility, distilling the world's wisdom into 12 practical and profound rules for life. 12 Rules for Life shatters the modern commonplaces of science, faith and human nature, while transforming and ennobling the mind and spirit of its readers. "
            ], [
                'id' => 9,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'publish_date' => '2018',
                'pages' => '320',
                'cover_link' => 'https://m.media-amazon.com/images/I/81YkqyaFVEL._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/Atomic-Habits-Proven-Build-Break/dp/0735211299',
                'heading'=>''
            ], [
                'id' => 10,
                'title' => 'The Subtle Art of Not Giving A F*ck',
                'author' => 'Mark Manson',
                'publish_date' => '2016',
                'pages' => '224',
                'cover_link' => 'https://m.media-amazon.com/images/I/71QKQ9mwV7L._SL1500_.jpg',
                'book_link' => 'https://www.amazon.com/Subtle-Art-Not-Giving-Counterintuitive/dp/0062457713'
            ],
        ];
    }


    public static function get_book($id): array
    {
        return books::get_all()[$id - 1];
    }


}
