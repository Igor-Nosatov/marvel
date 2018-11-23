<?php

use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            'nick' => 'Black Panther',
            'real_name​' => 'T’Challa',
            'origin_description​' => 'The king of the African nation of Wakanda, who gains enhanced strength by ingesting the heart-shaped herb',
             'superpowers' => '​solar energy absorption and healing factor, solar flare and heat vision,
                solar invulnerability, flight',
                'catch_phrase' => 'Truth, Justice and the American Way.',
            'image_id' => '1'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Superman',
            'real_name​' => 'Clark Kent',

            'origin_description​' => "he was born Kal-El on the planet Krypton, before being rocketed to
             Earth as an infant by his scientist father Jor-El, moments before Krypton's destruction",

            'superpowers' => '​solar energy absorption and healing factor, solar flare and heat vision,
                solar invulnerability, flight',

            'catch_phrase' => 'Truth, Justice and the American Way.',
            'image_id' => '2'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Incredible Hulk',
            'real_name​' => 'Bruce Banner',
            'origin_description​' => 'In his comic book appearances, the character is both the Hulk, a green-skinned, hulking and muscular humanoid possessing a vast degree of physical strength, and his alter ego Dr. Robert Bruce Banner, a physically weak, socially withdrawn, and emotionally reserved physicist, the two existing as independent personalities ',

            'superpowers' => 'With super-powered muscles all over his body, the Hulk is able to do all sorts of things that regular humans can only dream of. This includes his ability to casually travel miles in a single jump – thanks to his leg muscles - which the Hulk often uses as his main method of transportation. When he’s really trying, however, the Hulk can leap into the Earth’s atmosphere or even travel across oceans and land on different continents.',

            'catch_phrase' => 'You wouldn’t like me when I’m angry.',
            'image_id' => '3'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Wonder Woman',
            'real_name​' => 'Diana Prince',

            'origin_description​' => "The 'Diana Prince' identity has been part of Wonder Woman's history since her comics debut in 1941. In the early Golden Age stories, Wonder Woman served as a military secretary during World War II, using Prince as her cover. Later occupations Wonder Woman performed as Prince included translator at the United Nations, Air Force captain and ambassador, and in the '70s TV series, Lynda Carter's Wonder Woman used Prince to serve as an agent of the Inter-Agency Defense Command. ",

            'superpowers' => 'Lasso of Truth, Tiara, and her bracelets which protects her from sharp objects and project force fields which can block energy attacks. Sometimes has a sword and shield made by Hephaestus.',

            'catch_phrase' => 'I am Diana, princess of the Amazons',
            'image_id' => '4'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Batman',
            'real_name​' => 'Bruce Wayne',

            'origin_description​' => 'Batman is the superhero protector of Gotham City, a man dressed like a bat who fights against evil and strikes terror into the hearts of criminals everywhere.',

            'superpowers' => 'After consuming the pill, Batman’s tensile and muscle strength increases by several thousand times their normal strength, giving him super strength and durability. ',

            'catch_phrase' => 'Criminals are a cowardly, superstitous lot. ',
            'image_id' => '5'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Wolverine',
            'real_name​' => 'Logan',

            'origin_description​' => 'Wolverine was born as James Howlett in northern Alberta, Canada, during the late 1880s, purportedly to rich farm owners John and Elizabeth Howlett,property for an attempted rape perpetrated by his other son, named simply Dog, he returns to the Howlett manor and kills John Howlett. In retaliation, young James kills Thomas with bone claws that emerge from the back of his hands, as his mutation manifests. He flees with his childhood companion, Rose, and grows into manhood on a mining colony in the Yukon, adopting the name "Logan".',

            'superpowers' => 'Thanks to his increased healing factor Wolverine’s muscles don’t tire or wear down, and his body is resistant to the toxins that a body produces when overworked. That means that Wolverine has the stamina necessary to exert himself at superhuman levels for hours on end. Add to that the fact that Wolverine’s agility, reflexes, and athletic skills are enhanced well-beyond even the most adept superheroes, and what you have is a badass fighter that you most definitely shouldn’t pick a fight with.',

            'catch_phrase' => 'I’m the best I am at what I do.',
            'image_id' => '6'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Thor',
            'real_name​' => 'Thor Odinson',

            'origin_description​' => 'The five-page featurette "Tales of Asgard" was added in Journey into Mystery #97 (Oct. 1963),[14] followed by "The Mighty Thor" becoming the dominant cover logo with issue #104 (May 1964). The feature itself expanded to 18 pages in #105, which eliminated the remaining anthological story from each issue; it was reduced to 16 pages five issues later. Comics historian Les Daniels noted that "the adventures of Thor were gradually transformed from stories about a strange-looking superhero into a spectacular saga."[15] Artist Chic Stone, who inked several early Thor stories, observed that "Kirby could just lead you through all these different worlds. The readers would follow him anywhere.',

            'superpowers' => 'In addition to his immunity, Thor is virtually invulnerable. Not only is his skin is impenetrable to human weaponry and tools, but he also has flown into the center of the Sun (as well as other stars), withstood the weight of planets, resisted blasts from Odin, Celestials, and the Asgardian weapon Destroyer, and has survived - unscathed - the blast from the Doomsday Bomb. By the sound of it, Thor is a god who seemingly cannot be harmed. But the fact of the matter is, he can; it just takes a lot of power - or magic.',

            'catch_phrase' => 'Odin’s beard',
            'image_id' => '7'
        ]);
        DB::table('heroes')->insert([
            'nick' => 'Captain Marvel',
            'real_name​' => 'Billy Batson',

            'origin_description​' => 'Shazam is a free application that helps users figure out the name of a catchy song being played on the radio, television or other place. Users simply hold their iPhone device up to the speaker playing the music and the Shazam application will attempt to identify the tune album, artist and song title.',

            'superpowers' => 'S - for the wisdom of Solomon H - for the strength of Hercules A - for the stamina of Atlas Z - for the power of Zeus (which enhances all Marvels other physical abilities and allows for interdimensional travel) A - for the courage of Achilles (which would include invulnerability from ancient mythology) M - for the speed of Mercury (and, by extension, the power to fly)',

            'catch_phrase' => 'Shazam.',
            'image_id' => '8'
        ]);

        DB::table('heroes')->insert([
            'nick' => 'Green Lantern',
            'real_name​' => 'Kyle Rayner',
            'origin_description​' => "Green Lantern is quite possibly the most fiendishly complicated of all the superheroes, surrounded by cosmic mythology, strange aliens, and convoluted backstory. But let us help you through the insanity with this beginner's guide to all things Green Lantern.

            For the purposes of this post, I'm going to assume you know absolutely nothing about Green Lantern - after all, that's probably true of a fair amount of people going to see Green Lantern this weekend, and even the basic premise is a little tricky. So let's tackle the simple stuff before getting into some more advanced studies.",

            'superpowers' => "The Green Lantern power ring isn't just a hunk of metal. It's actually a powerful object with dimensions that go beyond time and space, and abilities that are almost limitless. The best example of that came from the Green Lantern Kilowog, when he used his ring to preserve the population of his entire planet.",

            'catch_phrase' => 'The Emerald Crusader.',
            'image_id' => '9'
           
        ]);

        DB::table('heroes')->insert([
            'nick' => 'Spiderman',
            'real_name​' => 'Peter Parker',

            'origin_description​' => 'Spider-Man has had a large range of supporting characters introduced in the comics that are essential in the issues and storylines that star him. After his parents died, Peter Parker was raised by his loving aunt, May Parker, and his uncle and father figure, Ben Parker.',

            'superpowers' => "The web-head’s strength is appropriately proportional to an actual spider's, meaning that he can lift somewhere around 10 tons. While that’s certainly nothing to laugh at, in the aforementioned story arc, The Queen, Spidey’s strength was doubled, allowing him to lift over 20 tons. So while there’s no doubting that our favorite web-slinger is stronger than most would assume, it just isn’t that exciting. Especially because he never dominates his enemies by force, but rather by using intelligence and athleticism. ",
            
            'catch_phrase' => 'With great power comes great responsibilty.',
            'image_id' => '10'
           
        ]);
    }
}
