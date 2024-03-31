<x-layout>


    <x-slot name="page_title">{{$book['title']}}</x-slot>

    <x-slot name="heading">Book Details</x-slot>
    <table>
        <tr>
            <td data-aos="fade-up">
                <a href="{{$book['link']}}" target="_blank">
                    <img src="{{$book['img']}}" alt='{{$book['title']}}' width='2500'>
                </a>
            </td>


            <td>
                <div data-aos="fade-up" class="text-gray-900 text-base text-xl">
                    {{$book['title']}} </div>
                <div data-aos="fade-up" class="text-gray-500 text-base text-xs">By
                    {{$book['Author']}} </div>
                <div data-aos="fade-up" class="text-gray-900 text-base text-s">
                    Robert Greene is a master guide for millions of readers, distilling ancient wisdom and philosophy
                    into
                    essential texts for seekers of power, understanding and mastery. Now he turns to the most important
                    subject of all - understanding people's drives and motivations, even when they are unconscious of
                    them
                    themselves.

                    We are social animals. Our very lives depend on our relationships with people. Knowing why people do
                    what they do is the most important tool we can possess, without which our other talents can only
                    take us
                    so far. Drawing from the ideas and examples of Pericles, Queen Elizabeth I, Martin Luther King Jr,
                    and
                    many others, Greene teaches us how to detach ourselves from our own emotions and master
                    self-control,
                    how to develop the empathy that leads to insight, how to look behind people's masks, and how to
                    resist
                    conformity to develop your singular sense of purpose. Whether at work, in relationships, or in
                    shaping
                    the world around you, The Laws of Human Nature offers brilliant tactics for success,
                    self-improvement,
                    and self-defense.
                </div>
            </td>

        </tr>
    </table>

</x-layout>
