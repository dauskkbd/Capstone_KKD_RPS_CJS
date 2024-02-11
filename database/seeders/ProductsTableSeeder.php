<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 20,
                'name' => 'Century: Spice Road',
                'w_price' => 1800,
                'price' => 2500,
                'description' => 'Grow and trade spices and use them to gain estate.

Century: Spice Road is the first in a series of games that explores the history of each century with spice-trading as the theme for the first installment. In Century: Spice Road, players are caravan leaders who travel the famed silk road to deliver spices to the far reaches of the continent for fame and glory. Each turn, players perform one of four actions:
Establish a trade route (by taking a market card)
Make a trade or harvest spices (by playing a card from hand)
Fulfill a demand (by meeting a victory point card\'s requirements and claiming it)
Rest (by taking back into your hand all of the cards you\'ve played)
The last round is triggered once a player has claimed their fifth victory point card, then whoever has the most victory points wins.

2–5 Players
30–45 Min
Age: 8+',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'century-spice-road.jpg',
                'offers' => NULL,
            ),
            1 => 
            array (
                'product_id' => 1,
                'name' => 'Chronicles of Crime',
                'w_price' => 1000,
                'price' => 1650,
                'description' => 'Chronicles of Crime is a cooperative game of crime investigation, mixing an app, a board game and a touch of Virtual Reality.

With the same physical components (board, locations, characters and items), players will be able to play plenty of different scenarios and solve as many different crime stories.

Players start the app, choose the scenario they want to play, and follow the story. The goal being to catch the killer of the current case in the shortest short time possible.

Using the Scan&Play technology, each component (locations, characters, items, etc.) has a unique QR code, which, depending on the scenario selected, will activate and trigger different clues and stories. That means players will be able to get new stories way after the game is released simply by downloading the app\'s updates, without any shipping of new physical components involved.

The VR experience only requires a mobile phone. Players simply put the VR glasses (optional buy) onto their mobile device, and put the VR glasses on their nose, holding their mobile device in front of their eyes, to immerse themselves in the game\'s universe and search for clues in a virtual world.

The game comes with 1 tutorial and 5 scenarios, but more can be downloaded directly inside the app!
Each session last around 1h to 1h30 minutes and many scenarios are connected to each others in order to tell a much bigger story.

—description from the publisher',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'chronicles-of-crime.jpg',
                'offers' => 'latest',
            ),
            2 => 
            array (
                'product_id' => 2,
                'name' => 'Sleeping Gods',
                'w_price' => 4500,
                'price' => 5500,
                'description' => '"Are the stars unfamiliar here?" she asked, and the sky grew suddenly dark, the star\'s patterns alien and exotic. "This is the Wandering Sea. The gods have brought you here, and you must wake them if you wish to return home."

In Sleeping Gods, you and up to 3 friends become Captain Sofi Odessa and her crew, lost in a strange world in 1929 on your steamship, the Manticore. You must work together to survive, exploring exotic islands, meeting new characters, and seeking out the totems of the gods so that you can return home.

Sleeping Gods is a campaign game. Each session can last as long as you want. When you are ready to take a break, you mark your progress on a journey log sheet, making it easy to return to the same place in the game the next time you play. You can play solo or with friends throughout your campaign. It\'s easy to swap players in and out at will. Your goal is to find at least fourteen totems hidden throughout the world. Like reading a book, you\'ll complete this journey one or two hours at a time, discovering new lands, stories, and challenges along the way.

Sleeping Gods is an atlas game. Each page of the atlas represents only a small portion of the world you can explore. When you reach the edge of a page and you want to continue in the same direction, you simply turn to a new page and sail onward.

Sleeping Gods is a storybook game. Each new location holds wild adventure, hidden treasures, and vivid characters. Your choices affect the characters and the plot of the game, and may help or hinder your chances of getting home!

Welcome to a vast world. Your journey starts now.',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'sleeping-gods.webp',
                'offers' => NULL,
            ),
            3 => 
            array (
                'product_id' => 3,
                'name' => 'The Lord of the Rings: Journeys in Middle-Earth',
                'w_price' => 5500,
                'price' => 6650,
                'description' => '“It’s a dangerous business, Frodo, going out of your door,” he used to say. “You step into the Road, and if you don’t keep your feet, there is no knowing where you might be swept off to.”
–J.R.R. Tolkien, The Fellowship of the Ring

Form your Fellowship and set out on your own adventures in The Lord of the Rings: Journeys in Middle-earth, a fully-cooperative, app-supported board game set in J.R.R. Tolkien’s iconic land of Middle-earth! As the dark forces gather, players band together to unravel mysteries, make courageous choices, and fight against the evil that threatens the land.

No matter if you choose to set out on your own or venture forth with four other players, a free companion app takes control of the evil forces arrayed against you, freeing you and your companions to stand together in a single Fellowship and battle against the darkness. What’s more, the app guides you through entire campaigns, filling each adventure with content from a host of possibilities and allowing you to leave your own mark on Middle-earth.

"There is naught that you can do, other than to resist, with hope or without it. But you do not stand alone."
–Elrond, The Fellowship of the Ring

In every game of The Lord of the Rings: Journeys in Middle-earth, you and your friends become heroes of the Free Peoples of Middle-earth, preparing your skills and testing your might and wisdom in combat against the encroaching darkness. Each of the iconic characters you can choose to embody have their own special abilities to contribute to your Fellowship, giving each one a distinct identity for your campaign.

A hero like Aragorn, for example, is a born leader, helping the entire party prepare for any situation. The leader of the Dúnedain of the North and a descendant of Isildur himself, Aragorn is a Man destined for greatness. But his lineage cannot stop a foe’s blade, nor can it feed his people. To survive the trials ahead, every hero must muster all their strength and make effective use of all their abilities.

In addition to their special ability and the items they claim at the beginning of a campaign, every hero sets off on their journey with a unique deck of skill cards that they use to ward off dangers and make progress in their adventures. These cards represent a character’s accumulated knowledge from their days exploring Middle-earth, including tactics, innate abilities, and even songs they can draw on in the heat of battle. Whether you’re playing as Legolas or Beravor, however, you must carefully choose how to apply your skills.',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'lord_of_the_rings.jpg',
                'offers' => 'popular',
            ),
            4 => 
            array (
                'product_id' => 5,
                'name' => 'Destinies',
                'w_price' => 2500,
                'price' => 3400,
                'description' => 'Destinies is a competitive, story-driven, game of adventure and exploration, mixing an app and a board game. The Destinies system offers a fully story-driven, app-supported, RPG-like board game experience without the need for a game master. Each scenario pictures a part of a vivid world, full of dark stories, epic characters, and mysteries to solve. Each player takes the role of a hero on a quest to fulfill their destiny.

Destinies use an app and Scan&Play technology to offer players a unique story-driven experience full of dynamic events, epic adventures, and an ever-changing game world. At every turn, players discover new parts of the world presented on tiles, explore them, and pick one point of interest to visit. There, they will learn more about the story and make crucial choices about how they want to interact with people, creatures, and challenges faced. The consequences of each choice are meaningful and often change the state of the world forever.

“Player agency” is truly rewarded in Destinies as players are able to freely explore, interact with characters, make impactful decisions and truly feel the consequences of their actions in the world. Scanning item cards into the app will present players with contextual outcomes to their actions. For example, choosing to throw a flaming torch into a mystical grove or applying medicinal herbs to a wounded druid could have very impactful opposing effects on the entire game world.',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'destinies.jpg',
                'offers' => NULL,
            ),
            5 => 
            array (
                'product_id' => 6,
                'name' => 'Aftermath',
                'w_price' => 4200,
                'price' => 5100,
                'description' => 'Aftermath is an Adventure Book Game in which players take on the role of small critters struggling to survive and thrive in a big, dangerous world. Humans have mysteriously vanished, and the remnants of civilization are quickly being reclaimed by nature and the animals who still remain.

In the game, you play as a misfit band of critters known by their colony as "providers". There\'s the guinea pig with anger issues, a hamster that talks fast and drives faster, a small mouse with keen eyes and a lot to prove, and a mysterious vole who\'s borderline feral. These characters each have their own personalities, play-styles, and personal goals.

You\'ll leave the safety of your colony and venture out into the abandoned world on one of 20+ story-driven missions and side missions. Scavenge the ruins of mankind in search of food and supplies for your colony, but beware — the world is filled with bandits and predators, and you must fight or flee to stay alive.

Return to your colony with resources and information that will help your friends and family survive. Grow your colony and keep it safe by building structures and improvements with the spoils of your adventures, but plan accordingly, for the colony will face hardship each time you leave it...

—description from the publisher',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'aftermath.jpg',
                'offers' => 'latest',
            ),
            6 => 
            array (
                'product_id' => 7,
            'name' => 'Roll Player Adventures (Base Game)',
                'w_price' => 4000,
                'price' => 7500,
                'description' => 'In Monsters & Minions, you went to war against Dragul invaders. In Fiends & Familiars, you befriended wild beasts and dispelled cruel spirits. Now your fully formed, battle-hardened heroes must defend the kingdom of Nalos and uncover a mystery that lies at the heart of the Abandoned Lands.

Navigate your missions with care. It’s up to you who to befriend and who to battle.

Will you slay the Giant Troll, or attempt to make peace?

Will you do the Vampire’s bidding, or defend the mysterious cultists he wants to destroy?

Will you remain loyal to King and Country, or side with the enemies of Nalos?

Whatever choices you make, someone will remember and respond.

Roll Player Adventures is a cooperative storybook board game for 1-4 players set in the world of Roll Player. Player characters face challenges, explore new lands, make friends and enemies, solve puzzles, fight monsters and make important decisions that will shape the story as they progress through 11 core Adventures and a re-playable Side Quest.

Choose from one of many characters, or import a favorite Roll Player character and take them on a heroic journey. If you do import a character you\'ve built in Roll Player, any number of expansions and any number of promo cards/boards that were used, may continue to be used in Roll Player Adventures!
Roll Player Adventures does not require the Roll Player base game or any of its expansions to play',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'roll-player-adventures.webp',
                'offers' => NULL,
            ),
            7 => 
            array (
                'product_id' => 8,
            'name' => 'Tainted Grail: The Fall of Avalon (Core Box)',
                'w_price' => 6000,
                'price' => 7750,
                'description' => 'Exploration, combat, and diplomacy in a dark Arthurian realm.

Tainted Grail: the Fall of Avalon is an unforgettable, solo or cooperative adventure experience for 1-4 players. Blending Arthurian legends and Celtic mythology with a unique vision, it allows you to impact the game world in deep and meaningful ways. A deep, branching storyline allows you to tackle problems in different ways, ensuring no two games play alike. Difficult decisions or harrowing choices wait behind every corner and seemingly minor tasks may reverberate with major long-term consequences.

In a land slowly sinking into the Wyrdness and torn apart by conﬂict; surviving each day is a challenge on its own. Starvation, sickness, violent weather, and random incidents all conspire to end your journey. Guardian Menhirs, that ensured safe travel throughout the realm, are slowly going dark turning simple logistics into an involving puzzle. To overcome these challenges, your character develops along several conﬂicting lines, such as Brutality / Empathy or Practicality / Spirituality. These traits unlock a rich choice of mutually exclusive skills and lead to diﬀerent deck-building strategies, making character advancement meaningful and deep.

The character you develop is going to be tested during dozens of combat and non-combat encounters. Sometimes you will need to brute force your way, but often diplomacy might be a better option. Regardless whether you fight with your strength or your wits, our unique dice-less encounter system makes resolving each conﬂict fun and exciting, while keeping you immersed in the game.

In Avalon, there’s a legend waiting behind every stone and every tree. All locations have their own rich stories and secrets to discover. Places and characters are often much more than they seem. As you slowly put all the pieces of the larger puzzle together, the land will always have a surprise waiting for you just around the corner. Many secrets can be discovered only after several games. Created by one of the best polish fantasy authors, Krzysztof Piskorski, the story of Tainted Grail: the Fall of Avalon aims to push the boundaries of non-linear narrative, building upon the rich experience.

1–4 Players
60–120 Min Playing Time
Age: 14+',
                'genre' => 'Adventure Games',
                'stock' => 100,
                'image' => 'tainted-grail.webp',
                'offers' => 'latest',
            ),
            8 => 
            array (
                'product_id' => 9,
                'name' => 'Through the Ages: A New Story of Civilization',
                'w_price' => 3000,
                'price' => 4500,
                'description' => 'Rewrite history as you build up your civilization in this epic card drafting game!

Through the Ages: A New Story of Civilization is the new edition of Through the Ages: A Story of Civilization, with many changes small and large to the game\'s cards over its three ages and extensive changes to how military works.

Through the Ages is a civilization building game. Each player attempts to build the best civilization through careful resource management, discovering new technologies, electing the right leaders, building wonders and maintaining a strong military. Weakness in any area can be exploited by your opponents. The game takes place throughout the ages beginning in the age of antiquity and ending in the modern age.

One of the primary mechanisms in TTA is card drafting. Technologies, wonders, and leaders come into play and become easier to draft the longer they are in play. In order to use a technology you will need enough science to discover it, enough food to create a population to man it and enough resources (ore) to build the building to use it. While balancing the resources needed to advance your technology you also need to build a military. Military is built in the same way as civilian buildings. Players that have a weak military will be preyed upon by other players. There is no map in the game so you cannot lose territory, but players with higher military will steal resources, science, kill leaders, take population or culture. It is very difficult to win with a large military, but it is very easy to lose because of a weak one.

Victory is achieved by the player whose nation has the most culture at the end of the modern age.
2–4 Players
120 Min
Age: 14+',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'through-the-ages.webp',
                'offers' => NULL,
            ),
            9 => 
            array (
                'product_id' => 10,
                'name' => 'Ankh: Gods of Egypt',
                'w_price' => 4000,
                'price' => 6000,
                'description' => 'Take the role of Egyptian gods fighting to survive and be remembered.

Play as a god of ancient Egypt, competing to survive as society begins to forget the old ways, so that only you and your followers remain.

Build caravans, summon monsters, and convert followers in your quest to reign supreme in Ankh: Gods of Egypt. Deities, monsters, and the people of ancient Egypt have been lovingly reimagined and interpreted in beautiful illustrations and detailed miniatures, and players will truly feel like gods as they shake the very foundations of Egypt. All gameplay in Ankh, including combat, is streamlined and non-random. Compete and win solely on your godly wits alone.

2–5 Players
90 Min
Age: 14+',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'ankh-gods-of-egypt.jpg',
                'offers' => NULL,
            ),
            10 => 
            array (
                'product_id' => 11,
                'name' => 'Unmatched: Hell\'s Kitchen',
                'w_price' => 2100,
                'price' => 3000,
                'description' => 'Two assassins and a crime-fighting lawyer brawling in the streets? Welcome to Hell.  Unmatched is a highly asymmetrical miniature fighting game for two or four players. Each hero is represented by a unique deck designed to evoke their style and legend. Tactical movement and no-luck combat resolution create a unique play experience that rewards expertise, but just when you\'ve mastered one set, new heroes arrive to provide all new match-ups.  Unmatched: Hell\'s Kitchen features three characters from the Marvel comics universe: Daredevil, Elektra, and Bullseye. 2–3 Players 20–40 Min Age: 14+',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'unmatched-hells-kitchen.webp',
                'offers' => 'popular',
            ),
            11 => 
            array (
                'product_id' => 12,
                'name' => 'Hegemony: Lead Your Class to Victory',
                'w_price' => 4000,
                'price' => 5500,
                'description' => 'Simulate a whole contemporary nation in this asymmetric, politico-economic euro-game.

The Nation is in disarray and a war is waging between the classes. The working class faces a dismantled welfare system, the capitalists are losing their hard-earned profits, the middle class is gradually fading and the state is sinking into a deep deficit. Amidst all this chaos, the only person who can provide guidance is... you. Will you take the side of the working class and fight for social reforms? Or will you stand with the corporations and the free market? Will you help the government try to keep it all together, or will you try to enforce your agenda no matter the cost to the country?

Hegemony is an asymmetric politico-economic card-driven board game for 2-4 players that puts you in the role of one of the socio-economic groups in a fictional state: The Working Class, the Middle Class, the Capitalist Class and the State itself.

The Working class controls the workers. The Capitalist class controls the companies. The Middle class combines elements from both the Working class and the Capitalist. It has workers who can work in the Capitalist\'s companies but it can also build companies of its own, yet smaller. Finally the State is trying to keep everyone happy, providing benefits and subsidies when needed but trying also to maintain a steady income through taxes to avoid going into debt.

While players have their own separate goals, they are all limited by a series of policies that affect most of their actions, like Taxation, Labor Market, Foreign Trade etc. Voting on those policies and using their influence to change them is also very important. Through careful planning, strategic actions and political maneuvering, you will do your best to increase the power of your class and carry out your agenda. Will you be the one to lead your class to victory?

Hegemony is heavily based on actual academic principles such as Social-Democracy, Neoliberalism, Nationalism and Globalism, and allows players to see their real world applications through engaging gameplay. There are many ways to achieve hegemony- which one will you take?

2–4 Players
90–180 Min
Age: 14+',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'hegemony.webp',
                'offers' => NULL,
            ),
            12 => 
            array (
                'product_id' => 13,
                'name' => 'Bloodborne: The Board Game',
                'w_price' => 4500,
                'price' => 6000,
                'description' => 'The town of Yharnam is at the mercy of a plague, only the Hunters can stop it.
Revered for its healing techniques, the town of Yharnam is rapidly degenerating as a plague that turns people into beasts spreads uncontrollably. As a Hunter, it falls on you to quell this growing threat. You will have to fight through beasts, monsters, and townsfolk alike to survive the night and discover the source of this madness.

In Bloodborne: The Board Game, a campaign-based action-adventure game, players will take on the role of Hunters working together against the game to uncover the mysteries hidden within the city of Yharnam and beyond. Featuring unique Trick Weapons, each with various forms and powers, Hunters will have to think quickly and adapt their tactics to overcome the multitude of foes that stand in their way. Learn their behavior, exploit their weaknesses, and strike them down! Featuring unique card-driven combat, luck has little place here. Success or failure will depend on your choices and how you approach each engagement!',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'bloodborne.webp',
                'offers' => 'popular',
            ),
            13 => 
            array (
                'product_id' => 14,
                'name' => 'The Witcher : Old World',
                'w_price' => 4000,
                'price' => 6000,
                'description' => 'The Witcher: Old World
Explore the Continent, upgrade your skills, and fight monsters/witchers for trophies.

In The Witcher: Old World, you become a witcher — a professional monster slayer — and immerse yourself in the legendary universe of The Witcher franchise.

Set years before the saga of Geralt of Rivia, The Witcher: Old World explores a time when monsters roamed the Continent in greater numbers, creating a constant peril that required the attention of expertly trained monster slayers, known as witchers. Five competing schools trained their adepts through brutal regimes, and once fully prepared, these now recognized witchers set off to explore the land, seeking trouble and adventures and helping others for coin.

In this competitive adventure board game, 2-5 players travel across a vast map, embarking on masterfully penned quests, encountering and making ambiguous moral choices, fighting monsters — and sometimes brawling with other witchers to defend their school\'s honor!

The game lets players construct their own unique decks of cards by choosing from a wide range of abilities: attacks, dodges, and witcher combat magic — known as "signs". Through card synergy, players aim to achieve powerful combos as they utilize their witcher school\'s hallmark abilities to their full potential. Quests, battles, and even dice poker allow each player to earn money, obtain new items, and train their skills.

The first player to acquire 4-6 trophies, with the number being set at the start of play, wins the game instantly. You can obtain trophies by killing monsters, instigating and winning chaotic tavern brawls against another witcher, training attributes to their highest level, and resolving certain quests throughout their adventure.

The game will include a Solo Mode that will allow for a solitaire adventure on the Continent.

1–5 Players
90–150 Min
Age: 14+

-This is a retail edition-',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'the-witcher.jpg',
                'offers' => 'trending',
            ),
            14 => 
            array (
                'product_id' => 15,
                'name' => 'Tiletum',
                'w_price' => 3000,
                'price' => 3600,
                'description' => 'Use dice for resources and actions to gain riches in the Renaissance.

Tiletum is a dice management game in which dice have a dual function: gaining resources and performing actions. A certain number of dice will be rolled each round. On your turn, choose a die to gain the number of corresponding resources equal to the value of the die, then perform the associated action. The power of the action is inversely proportional to the value of the die, so the fewer resources you gain, the more powerful the actions you take and vice versa.

In Tiletum, you and your fellow players take on the roles of rich merchants traveling throughout Europe, from the city of Tiletum (modern-day Tielt, Belgium) to Venice, during the days of early Renaissance.

You will travel to various cities to acquire trade contracts for wool and iron and establish trade houses. You must collect the required resources to fulfill contracts, invest in the construction of monumental cathedrals, gain the favor of noble families, and participate in important fairs, where your main business occurs. You will also use the services of notable people who will be welcomed into your houses. You will thus gain prestige that will make you the most famous merchant of the early Renaissance.

1–4 Players
60–100 Min
Age: 14+',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'tiletum.webp',
                'offers' => NULL,
            ),
            15 => 
            array (
                'product_id' => 16,
                'name' => 'Organ ATTACK!',
                'w_price' => 950,
                'price' => 1650,
                'description' => 'The Perfectly Legal Organ Harvesting Card Game
Remove your opponent\'s body parts before they get yours!

It’s the family friendly game of organ harvesting!

The object of OrganATTACK is to remove your opponents’ organs before they remove yours. The last person to still have at least one organ is the winner! Use related afflictions to attack your opponents (for example, playing Gallstones on Gallbladder or Thyroiditis on Thyroid). The game requires absolutely no medical knowledge and only takes about one round to learn.

OrganATTACK was produced thanks to the help of nearly 13,000 Kickstarter backers! And thanks to them, this edition of the game includes the Ready Player 6 Expansion Pack, which contains an extra 4 organs, corresponding afflictions, and lots of fun new cards! Ready Player 6 makes a great addition to the deck whether you want to play with more people, or just want to bring more excitement to the game.

In Awkward Yeti’s Organ ATTACK, you don’t need a medical degree to perform organ harvests on your friends and family. All you need is sheer determination to win the game!

2–6 Players
15 Min
Age: 8+',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'organ-attack.webp',
                'offers' => 'trending',
            ),
            16 => 
            array (
                'product_id' => 17,
                'name' => 'Pandemic',
                'w_price' => 1800,
                'price' => 2700,
                'description' => 'Your team of experts must prevent the world from succumbing to a viral pandemic.

In Pandemic, several virulent diseases have broken out simultaneously all over the world! The players are disease-fighting specialists whose mission is to treat disease hotspots while researching cures for each of four plagues before they get out of hand.

The game board depicts several major population centers on Earth. On each turn, a player can use up to four actions to travel between cities, treat infected populaces, discover a cure, or build a research station. A deck of cards provides the players with these abilities, but sprinkled throughout this deck are Epidemic! cards that accelerate and intensify the diseases\' activity. A second, separate deck of cards controls the "normal" spread of the infections.

Taking a unique role within the team, players must plan their strategy to mesh with their specialists\' strengths in order to conquer the diseases. For example, the Operations Expert can build research stations which are needed to find cures for the diseases and which allow for greater mobility between cities; the Scientist needs only four cards of a particular disease to cure it instead of the normal five—but the diseases are spreading quickly and time is running out. If one or more diseases spreads beyond recovery or if too much time elapses, the players all lose. If they cure the four diseases, they all win!

The 2013 edition of Pandemic includes two new characters—the Contingency Planner and the Quarantine Specialist—not available in earlier editions of the game.

Pandemic is the first game in the Pandemic series.

2–4 Players
45 Min
Age: 8+',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'pandemic.jpg',
                'offers' => NULL,
            ),
            17 => 
            array (
                'product_id' => 18,
                'name' => 'Munchkin Deluxe',
                'w_price' => 1200,
                'price' => 2100,
                'description' => 'A Dungeon Adventure Minus the Roleplaying
Attack and loot in this humorous, card-based dungeon crawler.

What makes this edition "deluxe"? It\'s got a big gameboard to keep your decks in place and 12 standies (six male and six female) that you move on the gameboard as you level up!

Go down in the dungeon. Kill everything you meet. Backstab your friends and steal their stuff. Grab the treasure and run.

Admit it. You love it.

Munchkin is the mega-hit card game about dungeon adventure . . . with none of that stupid roleplaying stuff. You and your friends compete to kill monsters and grab magic items. And what magic items! Don the Horny Helmet and the Boots of Butt-Kicking. Wield the Staff of Napalm . . . or maybe the Chainsaw of Bloody Dismemberment. Start by slaughtering the Potted Plant and the Drooling Slime, and work your way up to the Plutonium Dragon . . .

And it\'s illustrated by John Kovalic!

Fast-playing and silly, Munchkin can reduce any roleplaying group to hysteria. And, while they\'re laughing, you can steal their stuff.

Jump start your Munchkin game with the Munchkin Tutorial by Dized! It will walk your group through game setup and several rounds of gameplay. Use your Chrome browser, or download the app to your mobile device.

3–6 Players
60–120 Min
Age: 10+
Munchkin Deluxe the Board Game gives you and your friends the freedom to explore a dungeon, steal treasure, and backstab your friends — oh no, who said that? No one would ever think about betraying their friends to reach level 10 before them *wink wink*.',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'munchkin.jpg',
                'offers' => NULL,
            ),
            18 => 
            array (
                'product_id' => 19,
                'name' => 'Ticket to Ride',
                'w_price' => 2800,
                'price' => 3600,
                'description' => 'With elegantly simple gameplay, Ticket to Ride can be learned in 3 minutes, while providing players with intense strategic and tactical decisions every turn. Players collect cards of various types of train cars they then use to claim railway routes in North America. The longer the routes, the more points they earn. Additional points come to those who fulfill Destination Tickets or goal cards that connect distant cities; and to the player who builds the longest continuous route. ',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'ticket-to-ride.jpg',
                'offers' => 'trending',
            ),
            19 => 
            array (
                'product_id' => 21,
                'name' => 'Stardew Valley: The Board Game',
                'w_price' => 2600,
                'price' => 3900,
                'description' => 'A cooperative board game of farming and friendship based on the Stardew Valley video game by Eric Barone. Work together with your fellow farmers to save the Valley from the nefarious JojaMart Corporation! To do this, you\'ll need to farm, fish, friend and find all kinds of different resources to fulfill your Grandpa\'s Goals and restore the Community Center. Collect all kinds of items, raise animals, and explore the Mine. Gain powerful upgrades and skills and as the seasons pass see if you\'re able to protect the magic of Stardew Valley!

The goal of the game is to complete Grandpa\'s Goals and restore the Community Center, which requires you to gather different types of resources represented by tiles. You have a fixed amount of turns to accomplish this. This is driven by the Season Deck of 20 cards, one of which is drawn each turn to trigger certain events. Cooperatively the players decide each turn where they will focus their individual actions and place their pawn in that part of the Valley. Using their actions, they visit specific locations, trying to gather resources to complete their collective goals. Actions include things like: watering crops, trying to catch fish, rolling dice to explore the mines, and many more. When the Season Deck is exhausted, the game ends.


1–4 Players
45–200 Min
Age: 13+',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'stardew-valley.webp',
                'offers' => 'trending',
            ),
            20 => 
            array (
                'product_id' => 22,
                'name' => 'Katamino Family',
                'w_price' => 1200,
                'price' => 2000,
                'description' => 'Katamino fun designed for younger ages and parents!


In a duel, be the fastest to fill your space with the imposed pieces. In solo mode, make as many figures as possible from the thousands of possible combinations. Realize even 3D figures! Alone or with other players, fun for the whole family! A game of logic and construction not to be missed!',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'katamino-family.webp',
                'offers' => NULL,
            ),
            21 => 
            array (
                'product_id' => 23,
                'name' => 'Photosynthesis',
                'w_price' => 1800,
                'price' => 2999,
                'description' => 'Trees compete for sunlight to grow taller, as the sun moves around the board.

The sun shines brightly on the canopy of the forest, and the trees use this wonderful energy to grow and develop their beautiful foliage. Sow your crops wisely and the shadows of your growing trees could slow your opponents down, but don\'t forget that the sun revolves around the forest. Welcome to the world of Photosynthesis, the green strategy board game!


2–4 Players
30–60 Min
Age: 10+',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'photosynthesis.webp',
                'offers' => 'latest',
            ),
            22 => 
            array (
                'product_id' => 24,
                'name' => 'Azul: Master Chocolatier',
                'w_price' => 1500,
                'price' => 3000,
                'description' => 'Join the best chocolate makers in the world in Azul - Master Chocolatier by creating the most desired chocolate selection ever! This unique edition of the multiple award-winning game Azul includes 5 new special factory variants for a new, and delicious, twist on the original game!

Azul: Master Chocolatier includes double-sided factory boards, with these tiles being placed on these boards at the start of each round. One side of the factories is blank, and when using this side the game plays exactly like Azul. The other side of each factory tile has a special effect on it that modifies play in one way or another, putting a twist on the normal game. Additionally, the tiles are modeled to look like chocolates and other treats, despite remaining as inedible as the tiles in the original game.',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'azul-master-chocolatier.webp',
                'offers' => NULL,
            ),
            23 => 
            array (
                'product_id' => 25,
                'name' => 'Coatl',
                'w_price' => 700,
                'price' => 1300,
            'description' => 'The election of the Aztec High Priest is imminent. In order to prove their value and merit, the contenders engage in a race for prestige to win the favor of the gods. Will you be able to make the most beautiful sculptures of feathered snakes (called Cóatl) to stand out and gain access to the coveted title of High Priest?



In Cóatl, players work to build the most beautiful and valuable serpents. The serpents, or Cóatl, are constructed with a head, a tail, and a number of body tiles, each made from chunky, colorful plastic. On a turn, players will either take tiles from the central board to their personal board, or work to construct one of their Cóatls with the different tiles they\'ve collected. The game end is triggered when one player finishes their third Cóatl. Players receive points for fulfilling objectives, and the one with the most is named the new High Priest!',
                'genre' => 'Family Games',
                'stock' => 100,
                'image' => 'coatl.webp',
                'offers' => 'trending',
            ),
            24 => 
            array (
                'product_id' => 26,
                'name' => 'Side Quest: 7Th Sea',
                'w_price' => 400,
                'price' => 1000,
                'description' => 'Make your way into a sealed chapel to locate the treasure within

Hurry! From what you\'ve heard in the inn the Dragonsteel Shield can be found in Nüllrode, but the Inquisition is already on their way! You\'re lucky they chose to use the roads – you can overtake them using the shortcut. A few hours, two terrified settlements, and one totally honorable saber duel later, you are here. The village looks boring, but there is an old, pagan chapel, seemingly sealed tightly. Sneaking in is not an option, so it\'s time to get these doors open!

Get inside the chapel and reach for treasure before others! SideQuest: 7th Sea is an escape room-style game set in the world of well-known TTRPG system 7th Sea, published by Chaosium.

1–4 Players
90–120 MinPlaying Time
Age: 14+',
                'genre' => 'Escape Games',
                'stock' => 100,
                'image' => 'side-quest-7th-sea.jpg',
                'offers' => NULL,
            ),
            25 => 
            array (
                'product_id' => 27,
                'name' => 'Perspectives',
                'w_price' => 1200,
                'price' => 2300,
                'description' => 'Information sharing investigation game.

In Perspectives, each player holds key information for piecing together what has happened and finding the solution.

Three cases, each in four acts.
Cross-reference photographs, reports, and clues... without looking at the documents of your team players!
Will you find the details connecting all the pieces of the puzzle?
WORK TOGETHER TO SOLVE THE CASES!

The three scenarios:
THE NAGARAJA - CASE 1: India - Museum – Theft
THE DREGS - CASE 2: California - Rock music – Poison
FROM BUENAVISTA WITH LOVE - CASE 3: South America - Gangs – Murders

2–6 Players
60–90 Min Playing Time
Age: 12+',
                'genre' => 'Escape Games',
                'stock' => 100,
                'image' => 'perspectives.jpg',
                'offers' => 'latest',
            ),
            26 => 
            array (
                'product_id' => 28,
                'name' => 'Septima',
                'w_price' => 2100,
                'price' => 3900,
                'description' => 'Build your witch coven, enthrall the townsfolk, and rise to power as the new Septima.

Only in a few corners of the world is the memory of magic still alive, even though a few centuries ago its healing power permeated everything. Witches, its last remaining practitioners, have always been outcasts and could help human society only in strict secrecy. The leader of their people, the Septima, has always been the wisest, most knowledgeable witch. Now, as her time is coming to an end, witches from all over the world gather at Noctenburg to leave their mark on the hostile town and prove to the Septima that they are her worthy successor.

Septima is a competitive, highly interactive strategy game of witchcraft. As the leader of your coven, you must prove your worth in the town of Noctenburg to become the successor of Septima, the High Witch. Practice your craft and gain Wisdom by collecting herbs, brewing potions, healing the townsfolk, mastering charms and rescuing your fellow brothers and sisters from the trials. But beware: magic, even if used for good, invokes suspicion in the townsfolk...

Simultaneous action selection with positive player interaction: Septima’s central mechanism revolves around the simultaneous, secret selection of one of nine Action cards each turn: Move, Collect, Brew, Heal, Recruit, Plea, Chant, Rite and Remember. Each Action gets a powerful bonus if it is chosen by multiple players, but performing them together also raises suspicion in the townsfolk and attracts the attention of the Witch Hunters. Decisions of when to do a shared action (and who to do it with) adds a fresh, semi-cooperative touch to a competitive game, and lots of player interaction.

Rescue witches to build your Coven: Heal, enthrall or convince the townsfolk and amass enough support to sway the periodic Witch Trials in your favor. If the hostile witnesses are outvoted, the convicted witch is absolved and joins the coven that rescued them. You start small but you can grow your coven to up to four witches this way, each with their own personality and special ability to help your cause. Reckless Witches caught by Witch Hunters are also put to trial, so with enough support from the townsfolk, even witches from other, less careful players’ coven can end up in yours.

Accessible, intuitive and familiar: Septima is Mindclash Games’ most accessible title to date, with beautiful, hand-drawn art style by Villő Farkas and with the character art of Barbara Bernát, wooden components and intuitive, theme-inspired mechanisms. It is very quick to teach and set up, and takes less than 2 hours to play, even with four players.

1–4 Players
50–100 Min Playing Time
Age: 12+',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'septima.jpg',
                'offers' => NULL,
            ),
            27 => 
            array (
                'product_id' => 29,
                'name' => 'Tribes of the Wind',
                'w_price' => 2300,
                'price' => 3250,
                'description' => 'Pollution has covered the ruins of past civilizations. Only remain the Tribes of the Wind, flying from tree to tree to clean up the Forsaken Lands.
Play as a Guide of one of those tribes, and use the back of the cards of your opponents to optimize each of your actions. Reach your goals and make your territory a nice place to live in!



After centuries of exploiting nature, mankind caused a new type of pollution to spread on the whole planet, destroying all forms of life on its path. Scattered groups of men and women managed to survive in small forests that somehow remained unscathed, hiding in high cities built in the tree’s canopy. They are called the Wind Tribes, for they fly from one place to another, avoiding any contact with pollution.

In this game, you’ll play as a Guide who uses elemental magic to fight against pollution. Have forests grow, build new cities in the canopy, and secure the future of mankind.

During your turn, you will be able to:

– Play a card from your hand in order to collect water, move your wind riders, cleanse some pollution or plant a forrest. But be careful, as the conditions for your cards to be played depend on the rest of your hand, and the back of your opponents’ cards.

– Build a Teample so as to earn the corresponding bonus, and to score some points at the end of the game. This action is also a good way to change your hand’s content, as you will have to discard 3 cards to build your temple.

– Build a village: if you meet the requirement (number of Wind Riders on a forrest tile) you will be able to flip the concerned tile on its village side. Beware, some villages will generate pollution in nearby territories, but they will also grant you very useful effects to help you fulfill your quest. They will also grant you a village card which you will be able to use either for its immediate effect, or as an end game objecive that will bring you a lot of points if you manage to meet its conditions.

All along the game, you will be able to unlock one and then two of your Guide’s special abilities (among four). There are 5 different Guides (seen on the player boards), which allows a great asymetric replayability.

The first Tribe managing to build their 5th village launches the end of the game!
The one that earned the more points, depending on villages, temples, objectives, pollution, wins the game and is now considered as the best of the Tribes of the Wind.',
                'genre' => 'Expert Games',
                'stock' => 100,
                'image' => 'tribes-of-the-wind.webp',
                'offers' => NULL,
            ),
            28 => 
            array (
                'product_id' => 30,
                'name' => 'Arkham Horror: The Card Game – The Circle Undone',
                'w_price' => 800,
                'price' => 1650,
                'description' => 'Judgement. Temperance. Justice. The Tower.

The soothsayer’s tarot wove a tale of a grim future, hard to put out of your mind. But when you learn that four people have disappeared without a trace from an estate in French Hill, you begin to wonder if this cruel fate is meant only for you, or for the entirety of Arkham…

The Circle Undone is the fourth deluxe expansion for Arkham Horror: The Card Game. Here, your team of investigators delve into the mysteries of Arkham’s past, uncovering its macabre history and the motives of those who dwell in its shadows. This expansion contains a playable prologue, first two scenarios of The Circle Undone campaign, as well as new investigator and player cards to further customize your investigations in the world of H. P. Lovecraft’s Mythos.

Designer: Nate French, Matthew Newman
Publisher: Fantasy Flight Games
Number of Players: 1-2
Playing Time: 60-120 minutes
Recommended Age: 14+
Mechanisms: Action Point Allowance System, Cooperative Play, Deck/Pool Building, Hand Management, Role Playing, Variable Player Powers',
                'genre' => 'Living Card Games',
                'stock' => 100,
                'image' => 'arkham-horror.jpg',
                'offers' => 'popular',
            ),
            29 => 
            array (
                'product_id' => 31,
                'name' => 'That Sound Game',
                'w_price' => 1000,
                'price' => 2000,
                'description' => 'Bring the Noise to Your Next Party
That Sound Game is a fast paced, interactive and very noisy party game.

The goal is to get your team to guess as many answers on the category cards as they can in a minute. Use any combination of sounds and movements, but your hands must be behind your back.

You also get Lifelines. Use them strategically to help you win.

In the Box:
325 Category Cards
16 Lifeline Cards
4 Lowdown Cards
1 Dice
1 One Minute Timer 
1 Dry Erase Marker 
1 Scorecard (reusable)
Hear why That Sound Game is so famous on TikTok! Forget what you look like; the goal of this game is to win and forge an unbreakable bond through laughter and mutual embarrassment.

If your neighbors thought your parties weren’t loud enough, then they’re in for a surprise. Kick up the decibels and have them wondering what’s going on when you get a copy of That Sound Game to bring to your social events.',
                'genre' => 'Party Games',
                'stock' => 100,
                'image' => 'that-sound-game.webp',
                'offers' => 'popular',
            ),
            30 => 
            array (
                'product_id' => 32,
                'name' => 'One Night Ultimate Werewolf Daybreak',
                'w_price' => 1000,
                'price' => 1400,
                'description' => 'No ordinary game of Werewolf as now everyone has special roles. Werewolves beware!

One Night Ultimate Werewolf Daybreak is a fast game for 3-7 players in which everyone gets a hidden role, each with a special ability. (No plain "villagers" here!) In the course of a single morning, your village will decide who among them is a werewolf...because all it takes is finding one werewolf to win!

Daybreak includes eleven new roles, and it can be played on its own or combined with the original One Night Ultimate Werewolf game; when combined, you can have up to ten players in a single game.',
                'genre' => 'Detective Games',
                'stock' => 100,
                'image' => 'one-night-ultimate-werewolf-daybreak.jpg',
                'offers' => NULL,
            ),
        ));
        
        
    }
}