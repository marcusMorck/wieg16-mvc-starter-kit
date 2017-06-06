<?php
use App\Controllers\Controller;
use App\Database;
use App\Models\RecipeModel;

// Sökväg till grundmappen i projektet
$baseDir = __DIR__ . '/..';

// Ladda in Composers autoload-fil
require $baseDir . '/vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir. '/config/config.php';

// Normalisera url-sökvägar
$path = function($uri) {
	return ($uri == "/") ? $uri : rtrim($uri, '/');
};

$dsn = "mysql:host=".$config['host'].";dbname=".$config['db'].";charset=".$config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);
$db = new Database($pdo);

// Routing
$controller = new Controller($baseDir);

$url = $path($_SERVER['REQUEST_URI']);
switch ($url) {
    case '/':
        $randomAlbums = $db->getRandomAlbums(albums);
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/index.php';
        require $baseDir . '/views/footer.php';
        break;
    case '/my-albums':
        $userAlbums = $db->albumsByUser('albums', 1);
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/my-albums.php';
        require $baseDir . '/views/footer.php';
        break;
    case '/create':
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/create.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/create-album':
        $data = ['title' => 'Got Your Six',
            'artist' => 'Five Finger Death Punch',
            'release_year' => 2015,
            'album_image' => 'test'
        ];

        $create = $db->create('albums', $data);

        break;



    case '/update-profile':
        $user = $db->getById('users', 1);
        require $baseDir . '/views/update-profile.php';
        break;
    case '/user-albums':
        $album = $db->albumsByUser('albums', 1);
        require $baseDir . '/views/user-albums.php';
        break;
    case '/register':
        require $baseDir . '/views/register.php';
        break;
    case '/user-profile':
        $user = $db->getById('users', 1);
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/user-profile.php';
        require $baseDir . '/views/footer.php';
        break;
    case '/login':
        require $baseDir . '/views/login.php';
        break;
    case '/all-albums':
        $album = $db->getAll('albums');
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/all-albums.php';
        require $baseDir . '/views/footer.php';

        break;
    case '/about':
        require $baseDir . '/views/about.php';
        break;
    case '/register-user':
        /*$username = $_POST['username'];
        $data = ['username' => $_POST['username'],
                'email' => $_POST['email'],
                'birth' => $_POST['birth'],
                'country' => $_POST['country'],
                'adress' => $_POST['adress'],
                'zip-code' => $_POST['zip-code'],
        ];
*/
        $data = ['username' => 'maki',
            'email' => 'maki@gmail.com',
            'birth' => '1996-05-11',
            'country' => 'SE',
            'adress' => 'makistreet',
            'zip-code' => '177 767'
        ];
        $create = $db->create('users', $data);
        require $baseDir . '/views/register-user.php';
        break;

}



