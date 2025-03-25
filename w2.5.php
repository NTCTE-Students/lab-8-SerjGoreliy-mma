<?php

class SessionManager {
    public function __construct() {
        session_start();
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public function has($key) {
        return isset($_SESSION[$key]);
    }

    public function remove($key) {
        unset($_SESSION[$key]);
    }

    public function clear() {
        session_unset();
        session_destroy();
    }
}

$session = new SessionManager();

$session->set('username', 'serj_gor');
$session->set('role', 'admin');

echo "Никнейм: " . $session->get('username') . "<br>";
echo "Роль: " . $session->get('role') . "<br>";

if ($session->has('username')) {
    echo "Никнейм установлен.<br>";
}

$session->remove('role');

$session->clear();