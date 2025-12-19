<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function checkRole($role)
    {
        return session()->has('user_id') && session('user_role') === $role;
    }

    protected function setUserSession($data)
    {
        session($data);
    }

    protected function getUserSession($key, $default = null)
    {
        return session($key, $default);
    }

    protected function clearSession()
    {
        session()->flush();
    }
}