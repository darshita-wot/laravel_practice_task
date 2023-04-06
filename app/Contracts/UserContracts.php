<?php

namespace App\Contracts;

interface UserContracts
{
    public function userRegistration();

    public function userLogin();

    public function forgotPassword();

    public function loadResetPassword();

    public function resetPassword();
}