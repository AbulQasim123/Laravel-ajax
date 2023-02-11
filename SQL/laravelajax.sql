-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221207.ce5ce76a8d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 05:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_table`
--

CREATE TABLE `api_table` (
  `id` int(11) NOT NULL,
  `user_id` int(3) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_table`
--

INSERT INTO `api_table` (`id`, `user_id`, `title`, `body`) VALUES
(1, 1, 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit', 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto'),
(2, 1, 'qui est esse', 'est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla'),
(3, 1, 'ea molestias quasi exercitationem repellat qui ipsa sit aut', 'et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut'),
(4, 1, 'eum et est occaecati', 'ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit'),
(5, 1, 'nesciunt quas odio', 'repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque'),
(6, 1, 'dolorem eum magni eos aperiam quia', 'ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae'),
(7, 1, 'magnam facilis autem', 'dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas'),
(8, 1, 'dolorem dolore est ipsam', 'dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae'),
(9, 1, 'nesciunt iure omnis dolorem tempora et accusantium', 'consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas'),
(10, 1, 'optio molestias id quia eum', 'quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error'),
(11, 2, 'et ea vero quia laudantium autem', 'delectus reiciendis molestiae occaecati non minima eveniet qui voluptatibus\naccusamus in eum beatae sit\nvel qui neque voluptates ut commodi qui incidunt\nut animi commodi'),
(12, 2, 'in quibusdam tempore odit est dolorem', 'itaque id aut magnam\npraesentium quia et ea odit et ea voluptas et\nsapiente quia nihil amet occaecati quia id voluptatem\nincidunt ea est distinctio odio'),
(13, 2, 'dolorum ut in voluptas mollitia et saepe quo animi', 'aut dicta possimus sint mollitia voluptas commodi quo doloremque\niste corrupti reiciendis voluptatem eius rerum\nsit cumque quod eligendi laborum minima\nperferendis recusandae assumenda consectetur porro architecto ipsum ipsam'),
(14, 2, 'voluptatem eligendi optio', 'fuga et accusamus dolorum perferendis illo voluptas\nnon doloremque neque facere\nad qui dolorum molestiae beatae\nsed aut voluptas totam sit illum'),
(15, 2, 'eveniet quod temporibus', 'reprehenderit quos placeat\nvelit minima officia dolores impedit repudiandae molestiae nam\nvoluptas recusandae quis delectus\nofficiis harum fugiat vitae'),
(16, 2, 'sint suscipit perspiciatis velit dolorum rerum ipsa laboriosam odio', 'suscipit nam nisi quo aperiam aut\nasperiores eos fugit maiores voluptatibus quia\nvoluptatem quis ullam qui in alias quia est\nconsequatur magni mollitia accusamus ea nisi voluptate dicta'),
(17, 2, 'fugit voluptas sed molestias voluptatem provident', 'eos voluptas et aut odit natus earum\naspernatur fuga molestiae ullam\ndeserunt ratione qui eos\nqui nihil ratione nemo velit ut aut id quo'),
(18, 2, 'voluptate et itaque vero tempora molestiae', 'eveniet quo quis\nlaborum totam consequatur non dolor\nut et est repudiandae\nest voluptatem vel debitis et magnam'),
(19, 2, 'adipisci placeat illum aut reiciendis qui', 'illum quis cupiditate provident sit magnam\nea sed aut omnis\nveniam maiores ullam consequatur atque\nadipisci quo iste expedita sit quos voluptas'),
(20, 2, 'doloribus ad provident suscipit at', 'qui consequuntur ducimus possimus quisquam amet similique\nsuscipit porro ipsam amet\neos veritatis officiis exercitationem vel fugit aut necessitatibus totam\nomnis rerum consequatur expedita quidem cumque explicabo'),
(21, 3, 'asperiores ea ipsam voluptatibus modi minima quia sint', 'repellat aliquid praesentium dolorem quo\nsed totam minus non itaque\nnihil labore molestiae sunt dolor eveniet hic recusandae veniam\ntempora et tenetur expedita sunt'),
(22, 3, 'dolor sint quo a velit explicabo quia nam', 'eos qui et ipsum ipsam suscipit aut\nsed omnis non odio\nexpedita earum mollitia molestiae aut atque rem suscipit\nnam impedit esse'),
(23, 3, 'maxime id vitae nihil numquam', 'veritatis unde neque eligendi\nquae quod architecto quo neque vitae\nest illo sit tempora doloremque fugit quod\net et vel beatae sequi ullam sed tenetur perspiciatis'),
(24, 3, 'autem hic labore sunt dolores incidunt', 'enim et ex nulla\nomnis voluptas quia qui\nvoluptatem consequatur numquam aliquam sunt\ntotam recusandae id dignissimos aut sed asperiores deserunt'),
(25, 3, 'rem alias distinctio quo quis', 'ullam consequatur ut\nomnis quis sit vel consequuntur\nipsa eligendi ipsum molestiae et omnis error nostrum\nmolestiae illo tempore quia et distinctio'),
(26, 3, 'est et quae odit qui non', 'similique esse doloribus nihil accusamus\nomnis dolorem fuga consequuntur reprehenderit fugit recusandae temporibus\nperspiciatis cum ut laudantium\nomnis aut molestiae vel vero'),
(27, 3, 'quasi id et eos tenetur aut quo autem', 'eum sed dolores ipsam sint possimus debitis occaecati\ndebitis qui qui et\nut placeat enim earum aut odit facilis\nconsequatur suscipit necessitatibus rerum sed inventore temporibus consequatur'),
(28, 3, 'delectus ullam et corporis nulla voluptas sequi', 'non et quaerat ex quae ad maiores\nmaiores recusandae totam aut blanditiis mollitia quas illo\nut voluptatibus voluptatem\nsimilique nostrum eum'),
(29, 3, 'iusto eius quod necessitatibus culpa ea', 'odit magnam ut saepe sed non qui\ntempora atque nihil\naccusamus illum doloribus illo dolor\neligendi repudiandae odit magni similique sed cum maiores'),
(30, 3, 'a quo magni similique perferendis', 'alias dolor cumque\nimpedit blanditiis non eveniet odio maxime\nblanditiis amet eius quis tempora quia autem rem\na provident perspiciatis quia'),
(31, 4, 'ullam ut quidem id aut vel consequuntur', 'debitis eius sed quibusdam non quis consectetur vitae\nimpedit ut qui consequatur sed aut in\nquidem sit nostrum et maiores adipisci atque\nquaerat voluptatem adipisci repudiandae'),
(32, 4, 'doloremque illum aliquid sunt', 'deserunt eos nobis asperiores et hic\nest debitis repellat molestiae optio\nnihil ratione ut eos beatae quibusdam distinctio maiores\nearum voluptates et aut adipisci ea maiores voluptas maxime'),
(33, 4, 'qui explicabo molestiae dolorem', 'rerum ut et numquam laborum odit est sit\nid qui sint in\nquasi tenetur tempore aperiam et quaerat qui in\nrerum officiis sequi cumque quod'),
(34, 4, 'magnam ut rerum iure', 'ea velit perferendis earum ut voluptatem voluptate itaque iusto\ntotam pariatur in\nnemo voluptatem voluptatem autem magni tempora minima in\nest distinctio qui assumenda accusamus dignissimos officia nesciunt nobis'),
(35, 4, 'id nihil consequatur molestias animi provident', 'nisi error delectus possimus ut eligendi vitae\nplaceat eos harum cupiditate facilis reprehenderit voluptatem beatae\nmodi ducimus quo illum voluptas eligendi\net nobis quia fugit'),
(36, 4, 'fuga nam accusamus voluptas reiciendis itaque', 'ad mollitia et omnis minus architecto odit\nvoluptas doloremque maxime aut non ipsa qui alias veniam\nblanditiis culpa aut quia nihil cumque facere et occaecati\nqui aspernatur quia eaque ut aperiam inventore'),
(37, 4, 'provident vel ut sit ratione est', 'debitis et eaque non officia sed nesciunt pariatur vel\nvoluptatem iste vero et ea\nnumquam aut expedita ipsum nulla in\nvoluptates omnis consequatur aut enim officiis in quam qui'),
(38, 4, 'explicabo et eos deleniti nostrum ab id repellendus', 'animi esse sit aut sit nesciunt assumenda eum voluptas\nquia voluptatibus provident quia necessitatibus ea\nrerum repudiandae quia voluptatem delectus fugit aut id quia\nratione optio eos iusto veniam iure'),
(39, 4, 'eos dolorem iste accusantium est eaque quam', 'corporis rerum ducimus vel eum accusantium\nmaxime aspernatur a porro possimus iste omnis\nest in deleniti asperiores fuga aut\nvoluptas sapiente vel dolore minus voluptatem incidunt ex'),
(40, 4, 'enim quo cumque', 'ut voluptatum aliquid illo tenetur nemo sequi quo facilis\nipsum rem optio mollitia quas\nvoluptatem eum voluptas qui\nunde omnis voluptatem iure quasi maxime voluptas nam'),
(41, 5, 'non est facere', 'molestias id nostrum\nexcepturi molestiae dolore omnis repellendus quaerat saepe\nconsectetur iste quaerat tenetur asperiores accusamus ex ut\nnam quidem est ducimus sunt debitis saepe'),
(42, 5, 'commodi ullam sint et excepturi error explicabo praesentium voluptas', 'odio fugit voluptatum ducimus earum autem est incidunt voluptatem\nodit reiciendis aliquam sunt sequi nulla dolorem\nnon facere repellendus voluptates quia\nratione harum vitae ut'),
(43, 5, 'eligendi iste nostrum consequuntur adipisci praesentium sit beatae perferendis', 'similique fugit est\nillum et dolorum harum et voluptate eaque quidem\nexercitationem quos nam commodi possimus cum odio nihil nulla\ndolorum exercitationem magnam ex et a et distinctio debitis'),
(44, 5, 'optio dolor molestias sit', 'temporibus est consectetur dolore\net libero debitis vel velit laboriosam quia\nipsum quibusdam qui itaque fuga rem aut\nea et iure quam sed maxime ut distinctio quae'),
(45, 5, 'ut numquam possimus omnis eius suscipit laudantium iure', 'est natus reiciendis nihil possimus aut provident\nex et dolor\nrepellat pariatur est\nnobis rerum repellendus dolorem autem'),
(46, 5, 'aut quo modi neque nostrum ducimus', 'voluptatem quisquam iste\nvoluptatibus natus officiis facilis dolorem\nquis quas ipsam\nvel et voluptatum in aliquid'),
(47, 5, 'quibusdam cumque rem aut deserunt', 'voluptatem assumenda ut qui ut cupiditate aut impedit veniam\noccaecati nemo illum voluptatem laudantium\nmolestiae beatae rerum ea iure soluta nostrum\neligendi et voluptate'),
(48, 5, 'ut voluptatem illum ea doloribus itaque eos', 'voluptates quo voluptatem facilis iure occaecati\nvel assumenda rerum officia et\nillum perspiciatis ab deleniti\nlaudantium repellat ad ut et autem reprehenderit'),
(49, 5, 'laborum non sunt aut ut assumenda perspiciatis voluptas', 'inventore ab sint\nnatus fugit id nulla sequi architecto nihil quaerat\neos tenetur in in eum veritatis non\nquibusdam officiis aspernatur cumque aut commodi aut'),
(50, 5, 'repellendus qui recusandae incidunt voluptates tenetur qui omnis exercitationem', 'error suscipit maxime adipisci consequuntur recusandae\nvoluptas eligendi et est et voluptates\nquia distinctio ab amet quaerat molestiae et vitae\nadipisci impedit sequi nesciunt quis consectetur'),
(51, 6, 'soluta aliquam aperiam consequatur illo quis voluptas', 'sunt dolores aut doloribus\ndolore doloribus voluptates tempora et\ndoloremque et quo\ncum asperiores sit consectetur dolorem'),
(52, 6, 'qui enim et consequuntur quia animi quis voluptate quibusdam', 'iusto est quibusdam fuga quas quaerat molestias\na enim ut sit accusamus enim\ntemporibus iusto accusantium provident architecto\nsoluta esse reprehenderit qui laborum'),
(53, 6, 'ut quo aut ducimus alias', 'minima harum praesentium eum rerum illo dolore\nquasi exercitationem rerum nam\nporro quis neque quo\nconsequatur minus dolor quidem veritatis sunt non explicabo similique'),
(54, 6, 'sit asperiores ipsam eveniet odio non quia', 'totam corporis dignissimos\nvitae dolorem ut occaecati accusamus\nex velit deserunt\net exercitationem vero incidunt corrupti mollitia'),
(55, 6, 'sit vel voluptatem et non libero', 'debitis excepturi ea perferendis harum libero optio\neos accusamus cum fuga ut sapiente repudiandae\net ut incidunt omnis molestiae\nnihil ut eum odit'),
(56, 6, 'qui et at rerum necessitatibus', 'aut est omnis dolores\nneque rerum quod ea rerum velit pariatur beatae excepturi\net provident voluptas corrupti\ncorporis harum reprehenderit dolores eligendi'),
(57, 6, 'sed ab est est', 'at pariatur consequuntur earum quidem\nquo est laudantium soluta voluptatem\nqui ullam et est\net cum voluptas voluptatum repellat est'),
(58, 6, 'voluptatum itaque dolores nisi et quasi', 'veniam voluptatum quae adipisci id\net id quia eos ad et dolorem\naliquam quo nisi sunt eos impedit error\nad similique veniam'),
(59, 6, 'qui commodi dolor at maiores et quis id accusantium', 'perspiciatis et quam ea autem temporibus non voluptatibus qui\nbeatae a earum officia nesciunt dolores suscipit voluptas et\nanimi doloribus cum rerum quas et magni\net hic ut ut commodi expedita sunt'),
(60, 6, 'consequatur placeat omnis quisquam quia reprehenderit fugit veritatis facere', 'asperiores sunt ab assumenda cumque modi velit\nqui esse omnis\nvoluptate et fuga perferendis voluptas\nillo ratione amet aut et omnis'),
(61, 7, 'voluptatem doloribus consectetur est ut ducimus', 'ab nemo optio odio\ndelectus tenetur corporis similique nobis repellendus rerum omnis facilis\nvero blanditiis debitis in nesciunt doloribus dicta dolores\nmagnam minus velit'),
(62, 7, 'beatae enim quia vel', 'enim aspernatur illo distinctio quae praesentium\nbeatae alias amet delectus qui voluptate distinctio\nodit sint accusantium autem omnis\nquo molestiae omnis ea eveniet optio'),
(63, 7, 'voluptas blanditiis repellendus animi ducimus error sapiente et suscipit', 'enim adipisci aspernatur nemo\nnumquam omnis facere dolorem dolor ex quis temporibus incidunt\nab delectus culpa quo reprehenderit blanditiis asperiores\naccusantium ut quam in voluptatibus voluptas ipsam dicta'),
(64, 7, 'et fugit quas eum in in aperiam quod', 'id velit blanditiis\neum ea voluptatem\nmolestiae sint occaecati est eos perspiciatis\nincidunt a error provident eaque aut aut qui'),
(65, 7, 'consequatur id enim sunt et et', 'voluptatibus ex esse\nsint explicabo est aliquid cumque adipisci fuga repellat labore\nmolestiae corrupti ex saepe at asperiores et perferendis\nnatus id esse incidunt pariatur'),
(66, 7, 'repudiandae ea animi iusto', 'officia veritatis tenetur vero qui itaque\nsint non ratione\nsed et ut asperiores iusto eos molestiae nostrum\nveritatis quibusdam et nemo iusto saepe'),
(67, 7, 'aliquid eos sed fuga est maxime repellendus', 'reprehenderit id nostrum\nvoluptas doloremque pariatur sint et accusantium quia quod aspernatur\net fugiat amet\nnon sapiente et consequatur necessitatibus molestiae'),
(68, 7, 'odio quis facere architecto reiciendis optio', 'magnam molestiae perferendis quisquam\nqui cum reiciendis\nquaerat animi amet hic inventore\nea quia deleniti quidem saepe porro velit'),
(69, 7, 'fugiat quod pariatur odit minima', 'officiis error culpa consequatur modi asperiores et\ndolorum assumenda voluptas et vel qui aut vel rerum\nvoluptatum quisquam perspiciatis quia rerum consequatur totam quas\nsequi commodi repudiandae asperiores et saepe a'),
(70, 7, 'voluptatem laborum magni', 'sunt repellendus quae\nest asperiores aut deleniti esse accusamus repellendus quia aut\nquia dolorem unde\neum tempora esse dolore'),
(71, 8, 'et iusto veniam et illum aut fuga', 'occaecati a doloribus\niste saepe consectetur placeat eum voluptate dolorem et\nqui quo quia voluptas\nrerum ut id enim velit est perferendis'),
(72, 8, 'sint hic doloribus consequatur eos non id', 'quam occaecati qui deleniti consectetur\nconsequatur aut facere quas exercitationem aliquam hic voluptas\nneque id sunt ut aut accusamus\nsunt consectetur expedita inventore velit'),
(73, 8, 'consequuntur deleniti eos quia temporibus ab aliquid at', 'voluptatem cumque tenetur consequatur expedita ipsum nemo quia explicabo\naut eum minima consequatur\ntempore cumque quae est et\net in consequuntur voluptatem voluptates aut'),
(74, 8, 'enim unde ratione doloribus quas enim ut sit sapiente', 'odit qui et et necessitatibus sint veniam\nmollitia amet doloremque molestiae commodi similique magnam et quam\nblanditiis est itaque\nquo et tenetur ratione occaecati molestiae tempora'),
(75, 8, 'dignissimos eum dolor ut enim et delectus in', 'commodi non non omnis et voluptas sit\nautem aut nobis magnam et sapiente voluptatem\net laborum repellat qui delectus facilis temporibus\nrerum amet et nemo voluptate expedita adipisci error dolorem'),
(76, 8, 'doloremque officiis ad et non perferendis', 'ut animi facere\ntotam iusto tempore\nmolestiae eum aut et dolorem aperiam\nquaerat recusandae totam odio'),
(77, 8, 'necessitatibus quasi exercitationem odio', 'modi ut in nulla repudiandae dolorum nostrum eos\naut consequatur omnis\nut incidunt est omnis iste et quam\nvoluptates sapiente aliquam asperiores nobis amet corrupti repudiandae provident'),
(78, 8, 'quam voluptatibus rerum veritatis', 'nobis facilis odit tempore cupiditate quia\nassumenda doloribus rerum qui ea\nillum et qui totam\naut veniam repellendus'),
(79, 8, 'pariatur consequatur quia magnam autem omnis non amet', 'libero accusantium et et facere incidunt sit dolorem\nnon excepturi qui quia sed laudantium\nquisquam molestiae ducimus est\nofficiis esse molestiae iste et quos'),
(80, 8, 'labore in ex et explicabo corporis aut quas', 'ex quod dolorem ea eum iure qui provident amet\nquia qui facere excepturi et repudiandae\nasperiores molestias provident\nminus incidunt vero fugit rerum sint sunt excepturi provident'),
(81, 9, 'tempora rem veritatis voluptas quo dolores vero', 'facere qui nesciunt est voluptatum voluptatem nisi\nsequi eligendi necessitatibus ea at rerum itaque\nharum non ratione velit laboriosam quis consequuntur\nex officiis minima doloremque voluptas ut aut'),
(82, 9, 'laudantium voluptate suscipit sunt enim enim', 'ut libero sit aut totam inventore sunt\nporro sint qui sunt molestiae\nconsequatur cupiditate qui iste ducimus adipisci\ndolor enim assumenda soluta laboriosam amet iste delectus hic'),
(83, 9, 'odit et voluptates doloribus alias odio et', 'est molestiae facilis quis tempora numquam nihil qui\nvoluptate sapiente consequatur est qui\nnecessitatibus autem aut ipsa aperiam modi dolore numquam\nreprehenderit eius rem quibusdam'),
(84, 9, 'optio ipsam molestias necessitatibus occaecati facilis veritatis dolores aut', 'sint molestiae magni a et quos\neaque et quasi\nut rerum debitis similique veniam\nrecusandae dignissimos dolor incidunt consequatur odio'),
(85, 9, 'dolore veritatis porro provident adipisci blanditiis et sunt', 'similique sed nisi voluptas iusto omnis\nmollitia et quo\nassumenda suscipit officia magnam sint sed tempora\nenim provident pariatur praesentium atque animi amet ratione'),
(86, 9, 'placeat quia et porro iste', 'quasi excepturi consequatur iste autem temporibus sed molestiae beatae\net quaerat et esse ut\nvoluptatem occaecati et vel explicabo autem\nasperiores pariatur deserunt optio'),
(87, 9, 'nostrum quis quasi placeat', 'eos et molestiae\nnesciunt ut a\ndolores perspiciatis repellendus repellat aliquid\nmagnam sint rem ipsum est'),
(88, 9, 'sapiente omnis fugit eos', 'consequatur omnis est praesentium\nducimus non iste\nneque hic deserunt\nvoluptatibus veniam cum et rerum sed'),
(89, 9, 'sint soluta et vel magnam aut ut sed qui', 'repellat aut aperiam totam temporibus autem et\narchitecto magnam ut\nconsequatur qui cupiditate rerum quia soluta dignissimos nihil iure\ntempore quas est'),
(90, 9, 'ad iusto omnis odit dolor voluptatibus', 'minus omnis soluta quia\nqui sed adipisci voluptates illum ipsam voluptatem\neligendi officia ut in\neos soluta similique molestias praesentium blanditiis'),
(91, 10, 'aut amet sed', 'libero voluptate eveniet aperiam sed\nsunt placeat suscipit molestias\nsimilique fugit nam natus\nexpedita consequatur consequatur dolores quia eos et placeat'),
(92, 10, 'ratione ex tenetur perferendis', 'aut et excepturi dicta laudantium sint rerum nihil\nlaudantium et at\na neque minima officia et similique libero et\ncommodi voluptate qui'),
(93, 10, 'beatae soluta recusandae', 'dolorem quibusdam ducimus consequuntur dicta aut quo laboriosam\nvoluptatem quis enim recusandae ut sed sunt\nnostrum est odit totam\nsit error sed sunt eveniet provident qui nulla'),
(94, 10, 'qui qui voluptates illo iste minima', 'aspernatur expedita soluta quo ab ut similique\nexpedita dolores amet\nsed temporibus distinctio magnam saepe deleniti\nomnis facilis nam ipsum natus sint similique omnis'),
(95, 10, 'id minus libero illum nam ad officiis', 'earum voluptatem facere provident blanditiis velit laboriosam\npariatur accusamus odio saepe\ncumque dolor qui a dicta ab doloribus consequatur omnis\ncorporis cupiditate eaque assumenda ad nesciunt'),
(96, 10, 'quaerat velit veniam amet cupiditate aut numquam ut sequi', 'in non odio excepturi sint eum\nlabore voluptates vitae quia qui et\ninventore itaque rerum\nveniam non exercitationem delectus aut'),
(97, 10, 'quas fugiat ut perspiciatis vero provident', 'eum non blanditiis soluta porro quibusdam voluptas\nvel voluptatem qui placeat dolores qui velit aut\nvel inventore aut cumque culpa explicabo aliquid at\nperspiciatis est et voluptatem dignissimos dolor itaque sit nam'),
(98, 10, 'laboriosam dolor voluptates', 'doloremque ex facilis sit sint culpa\nsoluta assumenda eligendi non ut eius\nsequi ducimus vel quasi\nveritatis est dolores'),
(99, 10, 'temporibus sit alias delectus eligendi possimus magni', 'quo deleniti praesentium dicta non quod\naut est molestias\nmolestias et officia quis nihil\nitaque dolorem quia'),
(100, 10, 'at nam consequatur ea labore ea harum', 'cupiditate quo est a modi nesciunt soluta\nipsa voluptas error itaque dicta in\nautem qui minus magnam et distinctio eum\naccusamus ratione error aut');

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(3) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Shoes'),
(2, 'Cloth'),
(3, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `checkbox_table`
--

CREATE TABLE `checkbox_table` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `language` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkbox_table`
--

INSERT INTO `checkbox_table` (`id`, `name`, `language`) VALUES
(1, 'Hello', '[\"PHP\",\"LARAVEL\"]'),
(2, 'Ram', '[\"jQUERY\",\"PYTHON\",\"JAVASCRIPT\"]'),
(3, 'Rana', '[\"JAVA\"]');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `state_id`) VALUES
(1, 'Allahabad', 3),
(2, 'Agra', 3),
(3, 'Mundka', 1),
(4, 'Banaras', 3),
(5, 'Lucknow', 3),
(6, 'Sultan pur majra', 1),
(7, 'Mehrauli', 1),
(8, 'Bawana', 1),
(9, 'Gwalior', 4),
(10, 'Bhopal', 4),
(11, 'Jabalpur', 4),
(12, 'Indore ', 4),
(13, 'Mumbai UA', 2),
(14, 'Pune UA', 2),
(15, 'Nagpur UA', 2),
(16, 'Nashik  ', 2),
(17, 'Patna', 5),
(18, 'Gaya', 5),
(19, 'Nalanda', 5),
(20, 'Bhagalpur ', 5),
(21, 'Alipur Farash', 6),
(22, 'Arazi Masnali.', 6),
(23, 'Bhaghatpura', 7),
(24, 'Gujjarpura ', 7),
(25, 'Gorani', 8),
(26, 'Kurdish', 8),
(30, 'Tehran Ray', 9),
(31, 'Tehran Central ', 9),
(32, 'New Rome.', 10),
(33, 'Lygos', 10),
(34, 'Akyurt', 11),
(35, 'Ayaş', 11),
(38, 'Al-Deerah', 12),
(39, 'Nemar', 12),
(40, 'Taibah', 13),
(41, 'Al-Hijrah', 13);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'Pakistan'),
(3, 'Iran'),
(4, 'Turkiye'),
(5, 'Saudia');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `image`, `firstname`, `lastname`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'watson.jpg', 'Shen', 'Watsons', NULL, '2023-01-11 12:18:53', NULL),
(3, 'trudo.jpg', 'Justin', 'Trudo', NULL, '2022-11-29 10:09:32', NULL),
(17, '719665616.png', 'Mohd', 'Kamran', '2022-11-27 10:58:42', '2022-11-29 12:25:46', NULL),
(18, '752051637.png', 'Mohd', 'Ali', '2022-11-27 10:58:57', '2022-11-29 10:09:32', NULL),
(19, '1299561167.png', 'Miss', 'Inaya', '2022-11-27 10:59:34', '2022-11-29 10:09:32', NULL),
(20, '330211775.jpg', 'Mark', 'Henry', '2022-11-28 01:03:19', '2022-11-29 10:09:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `download_images`
--

CREATE TABLE `download_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `download_images`
--

INSERT INTO `download_images` (`id`, `name`, `path`, `count`, `created_at`, `updated_at`) VALUES
(1, 'Monitor', '246864128.jpg', '3', NULL, '2022-12-21 06:59:56'),
(2, 'Watch', '391067797.jpg', '4', NULL, '2022-12-21 07:08:24'),
(3, 'Headphone', '733218857.jpg', '2', NULL, '2022-12-21 06:58:25'),
(4, 'Toyes', 'toys3.jpg', '4', NULL, '2022-12-21 06:58:44'),
(5, 'Mobile', '1001096571.jpg', '4', NULL, '2022-12-21 06:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_fields`
--

CREATE TABLE `dynamic_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dynamic_fields`
--

INSERT INTO `dynamic_fields` (`id`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(1, 'Abul', 'Qasim', NULL, NULL),
(2, 'Abu', 'Talib', NULL, NULL),
(3, 'Mohd', 'Ali', NULL, NULL),
(6, 'Mohd', 'Tarique', '2022-12-01 02:34:02', '2022-12-01 02:34:02'),
(8, 'Ram', 'Kumar', NULL, NULL),
(9, 'Raj', 'Yadav', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hobey_table`
--

CREATE TABLE `hobey_table` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hobey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobey_table`
--

INSERT INTO `hobey_table` (`id`, `name`, `hobey`) VALUES
(1, 'Hello', 'Cricket,Playing,Travelling');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `images`) VALUES
(1, '[\"toys2.jpg\",\"toys3.jpg\"]'),
(2, '[\"beauty2.jpg\",\"beauty3.jpg\",\"beauty4.jpg\",\"beauty5.jpg\",\"crouselmobile.jpg\",\"crouselmonitor.jpg\"]'),
(3, '[\"headphone4.jpg\"]'),
(4, '[\"crouselmobile.jpg\"]'),
(5, '[\"moniter1.jpg\"]'),
(6, '[\"toys2.jpg\"]'),
(7, '[\"headphone7.jpg\"]'),
(8, '1709077869.jpg'),
(9, '2031832503.jpg'),
(10, '1528298426.jpg'),
(11, '246864128.jpg'),
(12, '1084223421.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `livetable`
--

CREATE TABLE `livetable` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livetable`
--

INSERT INTO `livetable` (`id`, `first_name`, `last_name`) VALUES
(1, 'Abu', 'Qasim'),
(2, 'Ram', 'Kumar'),
(3, 'Naina', 'Kumari'),
(4, 'Rohit', 'Gupta'),
(5, 'Deepak', 'Teli'),
(6, 'Puja', 'Kumari'),
(7, 'Lalu', 'prashad'),
(8, 'Rahul', 'Yadav'),
(9, 'Saurabh', 'Kumar'),
(10, 'Mohd', 'Ali'),
(11, 'Abu', 'Talib');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_11_16_131801_create_students_table', 1),
(12, '2022_11_27_121928_create_cruds_table', 1),
(13, '2022_11_28_081902_create_dynamic_fields_table', 2),
(14, '2022_11_28_132928_create_send_mails_table', 3),
(15, '2022_11_29_144252_add_soft_delete_column', 4),
(16, '2022_12_21_104548_create_download_images_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `post_title` text DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_description`, `author`, `date`) VALUES
(1, 'something title', 'This is where we use a script to automatically.', 'kim jones', '2022-11-15'),
(2, 'More title', 'I am pretty new to oracle and i would like.', 'mix herry', '2022-11-16'),
(3, 'hello world', 'This is talking about the universe(world)', 'mark ottwel', '2022-11-17'),
(4, 'larry page', 'This statement is talking about webpages.', 'tim berners lee', '2022-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category_id`) VALUES
(1, 'spark', '2500', 'This is long term shoes', 1),
(2, 'Eila', '1500', 'This is branded shoes', 1),
(3, 'Jeans', '2000', 'Allen Solly jeans fashionable brand', 2),
(4, 'Shirt', '1800', 'Allen Solly Shirt fashionable brand ', 2),
(5, 'Nokia', '5000', 'Nokia is long term branded mobile phone', 3),
(6, 'Sumsung', '4500', 'Sumsung is new term branded cell phone', 3);

-- --------------------------------------------------------

--
-- Table structure for table `send_mails`
--

CREATE TABLE `send_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_mails`
--

INSERT INTO `send_mails` (`id`, `firstname`, `email`, `messages`, `created_at`, `updated_at`) VALUES
(1, 'Talib', 'ansaritalib9511@gmail.com', 'jQuery Form Validation in Laravel with Send Email', NULL, NULL),
(2, 'Talib', 'ansaritalib9511@gmail.com', 'jQuery Form Validation in Laravel with Send Email', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `country_id`) VALUES
(1, 'Delhi', 1),
(2, 'MH', 1),
(3, 'UP', 1),
(4, 'MP', 1),
(5, 'Bihar', 1),
(6, 'Islamabad', 2),
(7, 'Larhor', 2),
(8, 'Ardalan', 3),
(9, 'Tehran', 3),
(10, 'Istambul', 4),
(11, 'Ankara', 4),
(12, 'Riyadh', 5),
(13, 'Madinah', 5);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(4, 'Puja', 'Yadav', 'puja@gmail.com', '9225418574', '2022-12-03 14:58:35', '2022-12-03 14:58:35'),
(5, 'Raju', 'Gupta', 'raju@gmail.com', '8596742541', '2022-12-15 12:59:37', '2022-12-15 12:59:37'),
(12, 'Ram', 'Kumar', 'ram@gmail.com', '9897254163', NULL, NULL),
(13, 'Raj', 'Gupta', 'raj@gmail.com', '9514523625', NULL, NULL),
(14, 'Rohit', 'Pandey', 'rohit@gmail.com', '9584145236', NULL, NULL),
(15, 'Neha', 'smriti', 'neha@gmail.com', '9485742541', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `register_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `website` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`register_id`, `first_name`, `last_name`, `email`, `password`, `website`) VALUES
(1, 'Abul', 'Qasim', 'abul@gmail.com', '$2y$10$ApWWDxopQuO3ZfvaPADyZuiOvlnaPyLJpi7aISmZd7zckGrhwGdFi', 'laravel.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Izabella Pfannerstill', 'weber.afton@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hLadDEVFju', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(2, 'Heber Wehner', 'xbode@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rZVKMaojx1', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(3, 'Elwin Walker', 'leonora37@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gSwvOM8IhL', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(4, 'Logan Monahan', 'rocio.dickens@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'efxgBGlbX5', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(5, 'Dr. Melody Larson', 'fannie64@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZMFJyCFXGP', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(6, 'Lyric Eichmann', 'lubowitz.naomie@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KMZoI3XfGW', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(7, 'Domenico Doyle', 'marie.heidenreich@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hF5F0NJ1A6', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(8, 'Abelardo Waters', 'tyrese01@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4JLECPUmjU', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(9, 'Lucie Marks', 'wilmer.klocko@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JmgsB3VbwN', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(10, 'Anabel Hickle DDS', 'susana.bergstrom@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wOAQRWGaAg', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(11, 'Dagmar Legros', 'allie58@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QIV1CFvdYQ', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(12, 'Frederique Halvorson', 'kovacek.walter@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i9alVCtZbr', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(13, 'Abagail Thompson', 'guido.keeling@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CIsqL3mIY4', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(14, 'Katarina Wintheiser V', 'elisabeth73@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'P9LJa0FZXP', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(15, 'Camron Hessel', 'ibatz@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'psUegZizyj', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(16, 'Keshawn Senger', 'kane.denesik@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mFxoTSMOfq', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(17, 'Florine Dickinson V', 'elisa30@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1FAz963FKA', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(18, 'Mrs. Daniela Ward PhD', 'whitney55@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5pCiTZNk4V', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(19, 'Mr. Trever Davis', 'jean.jerde@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H8Z2F55xu7', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(20, 'Herbert Shanahan', 'lennie01@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7EaX06JmHv', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(21, 'Howard Satterfield', 'jturner@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'roAvBfgZvF', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(22, 'Dr. Sonny Stanton', 'murray.sarina@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GmnnUOldfx', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(23, 'Noel Franecki', 'zoila12@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Jn1B6DZ7Zm', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(24, 'Ms. Audreanne Auer', 'tcorkery@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fDRGYhjUw3', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(25, 'Prof. Marisa Wunsch', 'heathcote.cathryn@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N5FikwSdPW', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(26, 'Dr. Carolyn Witting', 'willy.herzog@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VkmXwR1XPR', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(27, 'Ceasar Parisian PhD', 'hansen.cydney@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'STTr0PteKs', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(28, 'Ms. Christina Tillman DVM', 'kutch.adelia@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5DlfM8Ap5P', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(29, 'Gracie Doyle', 'hbergstrom@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jvd8gPvknK', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(30, 'Bonnie Kilback', 'sedrick.legros@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FaYKpu4P6V', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(31, 'Oran Will', 'spinka.alessandro@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W1AtEEvqLm', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(32, 'Myrtie Barrows Sr.', 'zorn@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0wwqUDg6o0', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(33, 'Prof. Izaiah Abbott', 'toney.armstrong@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9EVWOmmLYa', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(34, 'Georgette Gerhold', 'habernathy@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ytk1fj5ifo', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(35, 'Brannon Ondricka', 'olson.giuseppe@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W7GwiyXVfR', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(36, 'Santina Runte', 'deron70@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8LIcv1F47r', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(37, 'Ruben Schmidt', 'ricardo.muller@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M6th83GKeW', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(38, 'Dannie Weimann', 'mcdermott.howell@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pngxnwVKLS', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(39, 'Mrs. America Koss', 'margarete.ernser@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PUqDzByk2U', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(40, 'Jany Zboncak', 'thalia.morar@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TNdlmXZ2Fc', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(41, 'Mr. Eugene Kerluke MD', 'kyra35@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9SiYAfBy53', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(42, 'Angela Reichel', 'xbatz@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I17Kaw6230', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(43, 'Ms. Sabrina Block', 'adolph.hayes@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's9SDe7OyEz', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(44, 'Hardy Gerlach DDS', 'thalia.reilly@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MJ0BD2q7Lm', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(45, 'Mrs. Marielle Barton', 'kihn.haley@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AaQvsHnucc', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(46, 'Markus Rice', 'parisian.noemie@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd2FS6zlxT5', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(47, 'Miss Helga Murphy Sr.', 'qeichmann@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'krdToUy1vZ', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(48, 'Misty Ullrich MD', 'josefina.hyatt@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RJzJhyAV8b', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(49, 'Vern Cartwright V', 'mann.elenora@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WrVdXeMLHs', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(50, 'Nico Grady', 'jovan89@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YhJTpGQnyL', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(51, 'Queen Considine', 'angelina.volkman@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aa8BkwB6oK', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(52, 'Jolie Williamson III', 'goodwin.presley@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YSyq5sZI7Y', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(53, 'Arnoldo O\'Kon', 'americo.cronin@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FciV80SAoD', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(54, 'Clifford Trantow', 'gilberto.lehner@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oTBhgiWa4v', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(55, 'Leonora Schmidt', 'ykertzmann@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9g2WwWOqDE', '2022-12-19 04:26:20', '2022-12-19 04:26:20'),
(56, 'Juliet Hintz', 'melissa93@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cEyEvoYAtQ', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(57, 'Wilford Hickle', 'ecollier@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'F4MumtqK6C', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(58, 'Cesar Treutel', 'gino09@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IOI0BOcDqQ', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(59, 'Nelle Lind', 'vandervort.isaiah@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZvNi6txKSG', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(60, 'Hillard Dicki', 'rath.raquel@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0wZL7KUoa5', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(61, 'Eliane Brown', 'ogerlach@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RB93p2wSCl', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(62, 'Guiseppe Hessel', 'lilian07@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zwAfXuI7ke', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(63, 'Willis Boehm', 'blick.jayne@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '89OzqgWWBD', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(64, 'Dorthy Hahn', 'hansen.fletcher@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5SgC8SLf44', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(65, 'Ms. Vesta Feeney', 'elinore25@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '87yMkolJpC', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(66, 'Ms. Adeline Lebsack V', 'cecile73@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hqH7jE5iL1', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(67, 'Burdette Carter II', 'qdare@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's68Hqf1C6X', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(68, 'Meagan Feest', 'jschmeler@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HFFHUvocfg', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(69, 'Brigitte Larkin', 'gusikowski.denis@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1xzLGrGt9f', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(70, 'Keira Keebler', 'armando30@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YNk2zlCCV6', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(71, 'Jalon Abshire MD', 'kiana26@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's9mlqlgEl5', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(72, 'Theodore Lang', 'ygislason@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gSpAqpA2PT', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(73, 'Una Kihn', 'whills@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AvrIsLZ4ba', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(74, 'Laney Kerluke', 'laury70@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9Lvi9zmLlD', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(75, 'Dr. Agustina Reynolds', 'earlene34@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OZfS8jXukD', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(76, 'Cyrus Dickens DDS', 'pdibbert@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qAU0EdQzgw', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(77, 'Prof. Tremaine Murazik', 'torrance08@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6njpH3IDYL', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(78, 'Brant Trantow', 'jhintz@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CGMaMj4DQm', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(79, 'Deshaun Lemke', 'adeline.hamill@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'X61dIVbbU3', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(80, 'Kaylah Hand V', 'palma.bins@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4Oav8I2460', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(81, 'Devante Swaniawski', 'beth00@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ggAMSuQccq', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(82, 'Retta Huels', 'penelope.rippin@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BfL85fHoGQ', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(83, 'Ulises Shields', 'nikko.oreilly@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BsSjIHQCuH', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(84, 'Alfonzo Schmitt MD', 'wuckert.herminio@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6smjfhuB51', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(85, 'Prof. Cloyd Johns II', 'larson.gavin@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1I2oYCiRsy', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(86, 'Elizabeth Crooks', 'rolfson.mylene@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1VTWxepUQB', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(87, 'Solon Spencer I', 'veda92@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zyuUtIUj8m', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(88, 'Willard Abbott', 'wabbott@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd32XSKh7QR', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(89, 'Evalyn Lowe', 'mdurgan@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3CczhWT6ZN', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(90, 'Wilford Mueller', 'domenica28@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cn4Inqze8Y', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(91, 'Tyreek Wuckert', 'udouglas@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Vz85j9sjrn', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(92, 'Martina Jenkins', 'spencer.hudson@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'k9nBJdEFy3', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(93, 'Columbus Rolfson Sr.', 'kane.hane@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YWYxSJgWgq', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(94, 'Mollie Crona', 'hollie.feil@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DDOnfakP18', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(95, 'Morgan Schiller', 'amos.thompson@example.net', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lNf8xZdw4e', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(96, 'Mr. Miguel Christiansen', 'huels.lee@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zE5aqw0HHv', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(97, 'Annabel White', 'carissa.luettgen@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ILE6YaJJYm', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(98, 'Wilburn Cartwright', 'gkilback@example.org', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tQ5Xt5tmx0', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(99, 'Cleora Lowe', 'dickens.daron@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'za6HMsPP7c', '2022-12-19 04:26:21', '2022-12-19 04:26:21'),
(100, 'Dr. Madisyn Witting II', 'zwisoky@example.com', '2022-12-19 04:26:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aKY5WHLMkn', '2022-12-19 04:26:21', '2022-12-19 04:26:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_table`
--
ALTER TABLE `api_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkbox_table`
--
ALTER TABLE `checkbox_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_images`
--
ALTER TABLE `download_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_fields`
--
ALTER TABLE `dynamic_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hobey_table`
--
ALTER TABLE `hobey_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livetable`
--
ALTER TABLE `livetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_mails`
--
ALTER TABLE `send_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_table`
--
ALTER TABLE `api_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkbox_table`
--
ALTER TABLE `checkbox_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `download_images`
--
ALTER TABLE `download_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dynamic_fields`
--
ALTER TABLE `dynamic_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hobey_table`
--
ALTER TABLE `hobey_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `livetable`
--
ALTER TABLE `livetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `send_mails`
--
ALTER TABLE `send_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
