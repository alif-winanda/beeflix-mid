<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        DB::table("movies")->insert([ //1 - drama, 2 - kids, 3 - tv
            //DRAMA
            ["genre_id"=>"1", "title"=>"Itaewon Class", "photo"=>"itaewon-class.jpg", "description"=>"
            On the first day of attending his 
            new high school, Park Sae-Ro-Yi (Park Seo-Joon) punches his classmate Jang Geun-Won, who was bullying another 
            classmate. The bully is the son of CEO Jang Dae-Hee (Yoo Jae-Myung). The bully's father runs restaurant business
            Jagga where Park Sae-Ro-Yi’s own father works. CEO Jang Dae-Hee demands to Park Sae-Ro-Yi that he apologizes 
            to his son, but Park Sae-Ro-Yi refuses. Because of his refusal, Park Sae-Ro-Yi gets expelled from school and 
            his father gets fired from his job. Soon, an accident takes place. Park Sae-Ro-Yi’s father dies in a motorcycle 
            accident caused by his ex-classmate Jang Geun-Won. Burning with anger, Park Sae-Ro-Yi viciously beats
            Jang Geun-Won. He is soon arrested and receives prison time for the violent assault.", "rating"=>"4"],

            ["genre_id"=>"1", "title"=>"W : Two worlds apart", "photo"=>"w-drama.jpg", "description"=>"
            The storyline of the webtoon W starts with the younger years of its main character Kang Chul (Lee Jong-suk), a handsome and intelligent boy who is also skilled in shooting. He becomes famous in South Korea as he won a shooting competition during the 2004 Athens Olympics. But this fame is interrupted when the unknown Murderer massacres his family, and he is erroneously accused of the crime. Another villain, Han Cheol-ho (Park Won-sang), handles the case to gain political popularity, urging the court to impose death penalty upon Kang Chul. Despite his efforts, Kang Chul is deemed innocent of the crime. Depressed over losing his family, he attempts to commit suicide over the Han River but stops himself and chooses to search for the real killer instead and devote his life to crime-fighting.
            <br>
            Ten years later, Kang Chul becomes a multimillionaire. He starts \"Project W\"W,\" after the initials of the interrogatives \"who\" and \"why\" (hence, the title of the webtoon). One night, he receives a suspicious phone call and is severely injured by the same mysterious Murderer on the rooftop of his penthouse. Then even stranger things happen. The story runs about the question whether he will be able to have a happy ending.
            ", "rating"=>"4"],

            ["genre_id"=>"1", "title"=>"It's okay to Not be Okay", "photo"=>"okay-drama.jpg", "description"=>"
            Moon Gang-tae (Kim Soo-hyun) lives with his autistic older brother Moon Sang-tae (Oh Jung-se). They frequently moves from town to town, ever since Sang-tae witnessed their mother's murder. Gang-Tae takes up jobs as a caretaker in a psychiatric ward at every place they settle in.[6] While working in a hospital, he meets a famous children's book writer Ko Moon-young (Seo Ye-ji), who some people suggest has antisocial personality disorder. 
            Circumstances lead Gang-tae to work at the OK Psychiatric Hospital in Seongjin City, the same city where they all lived when young. Meanwhile, Ko Moon-young forms a romantic obsession for Moon Gang-tae after finding out their pasts overlapped. She follows him to Seongjin, where the trio slowly begins to heal each other's emotional wounds. As the story progresses, more is revealed of their intertwining pasts, which have been haunting them.
", "rating"=>"5"],
            
            ["genre_id"=>"1", "title"=>"Crash Landing on You", "photo"=>"crashLand-drama.jpg", "description"=>"
            Yoon Se-Ri (Son Ye-Jin) is an heiress to a conglomerate in South Korea. One day, while paragliding, an accident caused by strong winds leads Yoon Se-Ri to make an emergency landing in North Korea. There, she meets Ri Jeong-Hyeok (Hyun-Bin), who is a North Korean army officer. He tries to protect her and hide her. Soon, Ri Jeong-Hyeok falls in love with Yoon Se-Ri.", "rating"=>"4"],

            //KIDS
            ["genre_id"=>"2", "title"=>"Jimmy Neutron", "photo"=>"jimmy-kids.jpg", "description"=>"
            Ten-year-old Jimmy is a genius inventor but lacks social skills. However, when adults from his hometown are abducted by aliens, Jimmy sets out to rescue them with the help of friends.", "rating"=>"4"],

            ["genre_id"=>"2", "title"=>"Spongebob Squarepants", "photo"=>"spongebob-kids.jpg", "description"=>"
            Spongebob Squarepants is a talking square sponge who lives in a pineapple under the sea. His relentless cheerfulness gets on the nerves of his grumpy neighbor, Squidward Tentacles. Spongebob works as a fry cook at the Krusty Krab, owned by the kind but greedy Mr. Krabs.", "rating"=>"4"],

            ["genre_id"=>"2", "title"=>"Ben 10", "photo"=>"ben10-kids.jpg", "description"=>"
            The series is about a 10-year-old boy named Ben Tennyson who gets a watch-style alien device called the \"Omnitrix\". Attached to his wrist, it allows him to transform into various alien creatures with different abilities, allowing him to fight evil from Earth and space with his cousin Gwen and grandfather Max", "rating"=>"4"],

            ["genre_id"=>"2", "title"=>"Kids Next Door", "photo"=>"knd-kids.jpg", "description"=>"
            The series follows the adventures of a group of five 10-year-old children who operate from a high-tech tree house, fighting against adult and teen villains with advanced 2×4 technology. Using their codenames (Numbuhs 1, 2, 3, 4, and 5), they are Sector V, part of a global organization called the Kids Next Door.", "rating"=>"4"],


            //TV SHOW
            ["genre_id"=>"3", "title"=>"My Hero Academia", "photo"=>"mha-tv.jpg", "description"=>"
            The appearance of \"quirks,\" newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual.

Since he was a child, the ambitious middle schooler has wanted nothing more than to be a hero. Izuku's unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Might's quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor!

Enduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this year's freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero.", "rating"=>"4"],

            ["genre_id"=>"3", "title"=>"Demon Slayer", "photo"=>"demonslayer-tv.jpg", "description"=>"
            Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado's shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal. On his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night.

When he finally arrives back home the ne    xt day, he is met with a horrifying sight—his whole family has been slaughtered. Worse still, the sole survivor is his sister Nezuko, who has been turned into a bloodthirsty demon. Consumed by rage and hatred, Tanjirou swears to avenge his family and stay by his only remaining sibling. Alongside the mysterious group calling themselves the Demon Slayer Corps, Tanjirou will do whatever it takes to slay the demons and protect the remnants of his beloved sister's humanity.", "rating"=>"4"],

            ["genre_id"=>"3", "title"=>"Your lie in april", "photo"=>"shigatsu-tv.jpg", "description"=>"
            Music accompanies the path of the human metronome, the prodigious pianist Kousei Arima. But after the passing of his mother, Saki Arima, Kousei falls into a downward spiral, rendering him unable to hear the sound of his own piano.

Two years later, Kousei still avoids the piano, leaving behind his admirers and rivals, and lives a colorless life alongside his friends Tsubaki Sawabe and Ryouta Watari. However, everything changes when he meets a beautiful violinist, Kaori Miyazono, who stirs up his world and sets him on a journey to face music again.

Based on the manga series of the same name, Shigatsu wa Kimi no Uso approaches the story of Kousei's recovery as he discovers that music is more than playing each note perfectly, and a single melody can bring in the fresh spring air of April.", "rating"=>"4"],

            ["genre_id"=>"3", "title"=>"March comes in like a lion", "photo"=>"3-gatsu-tv.jpg", "description"=>"
            Having reached professional status in middle school, Rei Kiriyama is one of the few elite in the world of shogi. Due to this, he faces an enormous amount of pressure, both from the shogi community and his adoptive family. Seeking independence from his tense home life, he moves into an apartment in Tokyo. As a 17-year-old living on his own, Rei tends to take poor care of himself, and his reclusive personality ostracizes him from his peers in school and at the shogi hall.

However, not long after his arrival in Tokyo, Rei meets Akari, Hinata, and Momo Kawamoto, a trio of sisters living with their grandfather who owns a traditional wagashi shop. Akari, the oldest of the three girls, is determined to combat Rei's loneliness and poorly sustained lifestyle with motherly hospitality. The Kawamoto sisters, coping with past tragedies, also share with Rei a unique familial bond that he has lacked for most of his life. As he struggles to maintain himself physically and mentally through his shogi career, Rei must learn how to interact with others and understand his own complex emotions.", "rating"=>"4"],
    

        ]);
    }
}
