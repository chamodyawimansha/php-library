<?php

/**
 * User controller class : handles user related stuff
 *
 * PHP Version 7.4.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Users extends Controller
{

    /**
     * Loads the index view
     *
     * @param null
     *
     * @return Model
     */
    public function index()
    {
        $this->view("user/index", []);
    }

    /**
     * If the request is get shows the login form
     * If the request is post authenticate the user
     *
     * @param null
     *
     * @return Model
     */
    public function login()
    {
        // shows the login page
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $this->view("user/login", []);
        }

        // Authenticate the user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return print("user authenticating");
        }
    }

    /**
     * If the request is get shows the login form
     * If the request is post authenticate the user
     *
     * @param null
     *
     * @return Model
     */
    public function new()
    {
        // loads the new create new user form
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view("user/create", []);
        }
    }
}
