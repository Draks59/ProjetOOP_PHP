CREATE DATABASE IF NOT EXISTS `Beers`DEFAULT CHARACTER SET latin1;

USE `Beers`;

CREATE TABLE IF NOT EXISTS `categories`(
        `ID` int(11) NOT NULL AUTO_INCREMENT,
        `Name` varchar(100) NOT NULL,
        PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`ID`, `Name`) VALUES
(1, 'Ambrée'),
(2, 'Blanche'),
(3, 'Blonde'),
(4, 'Brune'),
(5, 'Spécial');


CREATE TABLE IF NOT EXISTS `products`(
        `ID` INT  NOT NULL AUTO_INCREMENT,
        `Name` varchar(60) NOT NULL DEFAULT '',
        `Cat_ID` INT NOT NULL,
        `Desc` varchar(900) DEFAULT NULL,
        `Photo` varchar(255) DEFAULT NULL,
        PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO
    `products` (
        `ID`,
        `Name`,
        `Cat_ID`,
        `Desc`,
        `Photo`
    )
VALUES (
        1,
        'Cabrio Blonde',
        3,
        "La bière Cabrio blonde de la microbrasserie Cabrio située en Alsace est une bière artisanale proposée aux professionnels du CHR, cavistes, épiceries fines...
        Sa robe dorée et brillante est surmontée d'une belle mousse blanche généreuse. Son nez est marqué par des arômes doux aux notes florales. En bouche la Cabrio blonde est souple et rafraîchissante.",
        "biere1.png"
    ), (
        2,
        "Hoppy Wheat",
        2,
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une blanche houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. En bouche, elle vous offrira directement une belle amertume, des saveurs agrumes et des notes herbacées.Cette bière accompagnera des fromages de chèvre ou des plats épicés.",
        "biere2.png"
    ), (
        3,
        "Rêves d'étoiles",
        5,
        "La bière Rêves d'étoiles de la microbrasserie Bendorf de Strasbourg en Alsace, est une bière de style Black IPA proposée aux professionnels du CHR, cavistes, épiceries fines... Avec sa robe noire aux reflets rubis, elle est surmontée d'une mousse crémeuse abondante. Au nez elle est extrêmement puissante avec des arômes de malts torréfiés allant du pain grillé au café en passant par le chocolat, combinés à des arômes herbacés et d'agrumes. En bouche elle est expressive et gourmande.",
        "biere3.png"
    ), (
        4,
        "Miel Harmonie",
        4,
        "La bière Miel Harmonie de la microbrasserie Bendorf de Strasbourg est une bière de style Honey Ale proposée aux professionnels du CHR, cavistes et épiceries fines. Sa la robe brune prononcée est surmontée d'une fine mousse blanche tirant sur l'ivoire à la bonne tenue. Son nez est doux avec de légers accents torréfiés et des notes de café, cacao et une touche de miel.",
        "biere4.png"
    ), (
        5,
        "Bière Panic at Munich",
        4,
        "Cette bière Panic at Munich de la brasserie Galibot, située dans le Grand Est, est une bière de style Munich Dunkel, proposée aux professionnels du CHR, cavistes, épiceries fines... Elle présente une robe brune surmontée d'une mousse fine et une pétillante moyenne. Au nez, elle développe un nez biscuit, malté et caramel. En bouche, vous apprécierez son amertume très légère toute en longueur et saveurs maltées. Gourmande mais très fine, avec une petite sucrosité, elle est légère et bénéficie d'une très bonne buvabilité. ",
        "biere5.png"
    ), (
        6,
        "La Minotte Ambrée",
        1,
        "Cette bière ambrée de la brasserie La Minotte a un nez caramel (toffee), une bouche sweety maltée et une finale sur le clou de girofle. Une bière gourmande, toute en rondeur avec une amertume maîtrisée.",
        "biere6.png"
    ), (
        7,
        "L'Âge de Raison",
        1,
        "Cette bière L'Âge de raison de la brasserie La Minotte, basée en région Provence Alpes Côte d'Azur, est une Double IPA (DIPA). Au nez, elle est intensément fruitée (fruits exotiques et épices). En bouche, des notes végétales et houblonnées terminent sur une finale sèche, longue et résineuse.",
        "biere7.png"
    ), (
        8,
        "The Yeast And The Beast",
        1,
        "Cette bière The Yeast and the Beast de la brasserie La Minotte, installée en région Provence Alpes Côte d'Azur est une Triple Belge. Elle possède un nez fruité comme un bonbon anglais, des notes de banane mure et de miel. En bouche, c'est une bière ronde et onctueuse, sur une finale légèrement houblonnée.",
        "biere8.png"
    ), (
        9,
        "La Polaris",
        2,
        "La bière Polaris de la microbrasserie de Strasbourg Trois Mâts en Alsace est une bière de style Witbier proposée aux professionnels du CHR, cavistes, épiceries fines... Sa robe de couleur paille est surmontée d'une belle mousse blanche et fine. Au nez se dégagent des arômes de coriandre, de camomille et d’orange pour cette bière d'inspiration Belge forte en gout et résolument épicée. ",
        "biere9.png"
    ), (
        10,
        "Quatre Pays",
        2,
        "Proposée aux professionnels du CHR, cavistes, épiceries fines... la bière Quatre Pays Blanche de la microbrasserie des Quatre Pays située à Hirtzbach dans le Haut-Rhin, est une bière de fermentation haute à la robe laiteuse ornée d'une mousse blanche et fine. Au nez se dégagent de subtils arômes de pins et d'agrumes complétés de notes céréalières (pain de mie).",
        "biere10.png"
    ), (
        11,
        "White Rabbit",
        2,
        "La bière White Rabbit de la microbrasserie Sainte Cru (située en Alsace à Colmar) est une bière artisanale française proposée aux professionnels distribuant de la bière artisanale. La White Rabbit est une bière blanche de style American Wheat Ale à la robe blanche laiteuse et au trouble léger apporté par le froment. ",
        "biere11.png"
    ), (
        12,
        "La gabarde blonde BIO",
        3,
        "La Gabarde est une Bière artisanale fabriquée selon une méthode traditionnelle.
        Classé parmi les meilleurs bières artisanales, elle est brassée avec des malts non torréfiés et des céréales d'exceptions. Ce subtil mélange lui apporte un caractère épicé et fruité. Idéal sur les viandes blanches, barbecue et pizza, elle se déguste également en apéritif ou avec vos viandes grillées et fromages.",
        "biere12.png"
    ), (
        13,
        "Wheat ale Brasserie Effet Papillon",
        2,
        "Laissez-vous surprendre par la légèreté d'Adèle, la blanche de la Brasserie Effet Papillon !

        Brassée à Merignac, près de Bordeaux, cette wheat ale est le fruit d'une fermentation haute lui conférant une riche palette aromatique dans laquelle on retrouve de joyeuses notes d'agrumes",
        "biere13.png"
    ), (
        14,
        "Pale ale Brasserie Effet Papillon",
        3,
        "Laissez-vous surprendre par le pouvoir désaltérant d'Adèle, la blonde de la Brasserie Effet Papillon !
        Sèche et finement amère en bouche, cette pale ale est le fruit d'une fermentation haute lui conférant une riche palette aromatique, dans laquelle on retrouve des notes fruitées gourmandes.",
        "biere14.png"
    ), (
        15,
        "Ipa Vezelay artisanale et bio",
        3,
        "Implantée au coeur du parc du Morvan, la Brasserie de Vézelay se distingue par un haut niveau d'exigence. Labellisée Entrepreneurs plus engagés, elle produit des bières 100% bio répondant aux critères stricts de la reinheitsgebot , loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon... et rien d'autre !",
        "biere15.png"
    ), (
        16,
        "Nonne Triple Bio",
        3,
        "La bière Nonne Triple des Brasseurs Savoyards est une bière forte, de caractère. À la fois ronde, savoureuse et savamment houblonnée, elle est à l’image de ces femmes Ingénieuses et légendaires qui surent nous transmettre leur héritage.",
        "biere16.png"
    ), (
        17,
        "Nonne de printemps",
        1,
        "Laissez-vous tenter par la Nonne de mars bio des Brasseurs Savoyards : une spring pale ale légèrement ambrée aux saveurs gourmandes de noisettes grillées, de caramel et de fruits secs et une finale soutenue par une fine pointe d’amertume.",
        "biere17.png"
    ), (
        18,
        "Amber Ale de Vezelay",
        1,
        "Implantée au coeur du parc du Morvan, la Brasserie de Vézelay se distingue par un haut niveau d'exigence. Labellisée Entrepreneurs plus engagés, elle produit des bières 100% bio répondant aux critères stricts de la reinheitsgebot , loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon...",
        "biere18.png"
    ), (
        19,
        "Nonnette ",
        4,
        "La bière Nonnette est brassée par Mélusine, une brasserie Française située dans le bocage Vendéen. Elle propose des produits artisanaux élaborés avec 100% d'ingrédients naturels traditionnels comme l'orge maltée et le houblon qui s'allient à des plantes locales. Une fois versée dans un verre, la bière Nonette dévoile une belle robe de couleur brune foncée aux somptueux reflets couleur rubis. ",
        "biere19.png"
    ), (
        20,
        "Stout de Vezelay",
        4,
        "Implantée au coeur du parc du Morvan, la Brasserie de Vézelay se distingue par un haut niveau d'exigence. Labellisée Entrepreneurs plus engagés, elle produit des bières 100% bio répondant aux critères stricts de la reinheitsgebot, loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon... et rien d'autre ! Le résultat ? Des bières pur malt, sans sucre ajoutés, ni additifs, non filtrées et non pasteurisées, restituant tous les arômes du malt et du houblon.",
        "biere20.png"
    ), (
        21,
        "La gabarde",
        4,
        "La gabarde est une Bière artisanale fabriquée selon une méthode traditionnelle.
        Classé parmi les meilleurs bières artisanales, elle est brassée avec des malts torréfiés et des céréales d'exceptions. Ce subtil mélange lui apporte des notes café et chocolaté. Idéal sur les viandes rouges, barbecue et pizza épicé, elle se déguste également en apéritif ou avec vos viandes grillées et fromages.",
        "biere21.png"
    ), (
        22,
        "Bière dorée biologique Dremmwel",
        5,
        "La bière dremmwel blé noir est une bière de dégustation ambrée bio et sans gluten titrant 5,4°. Au nez, on retrouve des arômes de malts légèrement torréfiés ainsi que des notes de fruits. En bouche, le blé noir se dévoile et on relève de délicates notes grillées ainsi qu'un soupçon de caramel et de levures. La note finale en bouche est plutôt douce, on retrouve un côté fruits à coques ( noisettes et noix) et pomme cidrée avec une légère amertume. Elle est idéale pour accompagner vos crêpes !",
        "biere22.png"
    ), (
        23,
        "Organic Chocolat Stout",
        5,
        "Nez rond et délicat de chocolat chaud, de torréfaction légère. En bouche, elle se fait soyeuse, elle tapisse le palais de ses arômes gourmands de chocolat crémeux. Le milieu de bouche révèle des notes de café, davantage grillées, sans oublier de rester sur des nuances de caramel. La finale, crémeuse, est en harmonie avec le reste de la dégustation : suave et chocolatée, elle a su parler à notre palais.",
        "biere23.png"
    ), (
        24,
        "Coedo Shikkoku",
        5,
        "Shikkoku est une couleur japonaise signifiant « noir de jais ». Le nom est donc tout  à fait évocateur de la robe sombre et brillante de cette bière.
        Cette bière noire se démarque par un profil aromatique qui reste léger. Agréable et douce au palais, elle ravira les amateurs de Guiness !
        La Coedo Shikkoku a été médaille d'or à l'european BIERE star en 2011.",
        "biere24.png"
    ), (
        25,
        "Breiz'Ile - Les Frères de la Côte Camaret/Bretagne/France",
        5,
        "La Bière de fête by Breiz'île !
        Voilà maintenant plus de 15 ans que l'aventure Breiz'île a commencé avec ses légendaires punchs au rhum arrangés aux fruits frais. Les Frères de la Côtes, restaurateur voyageurs, ont dévelopé l'art de nous surprendre chaque jour un peu plus, inventant des nouvelles recettes, des nouvelles gammes, alliant leur Bretagne natale à l'exotisme le plus enchanteur, sans jamais perdre l'esprit d'origine de la fabrication artisanale et des ingrédients de qualité...",
        "biere25.png"
    );

--
-- Contraintes pour la table `product`
--

ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;


CREATE TABLE
    if not EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `username` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--

-- Déchargement des données de la table `admin`

--

INSERT INTO
    `users` (
        `id`,
        `username`,
        `password`
    )
VALUES (1, 'admin', 'admin');
