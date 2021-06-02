<?php
namespace App;

use App\Utils\Session;

class Renderer
{
    /**
     * render
     *
     * @param  string $path
     * @param  array $variables
     * @return void
     */
    public static function render(string $path, array $variables = [])
    {
        $session = Session::getInstance();
        extract($variables);
        ob_start();
        require '../views/' . $path . '.html.php';
        $pageContent = ob_get_clean();

        require '../views/layout.html.php';
    }
}