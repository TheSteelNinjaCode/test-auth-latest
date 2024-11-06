<?php

use Lib\Prisma\Classes\Prisma;
use Lib\Auth\Auth;
use Lib\Request;
use Lib\StateManager;

$message = StateManager::getState('message');

function loginUser($data)
{
    $prisma = Prisma::getInstance();

    $email = $data->email;
    $password = $data->password;

    $user = $prisma->user->findUnique([
        'where' => [
            'email' => $email
        ],
        'include' => [
            'userRole' => true
        ]
    ], true);

    if ($user && password_verify($password, $user->password)) {
        // print_r($user);

        $userToRegister = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->userRole->name
        ];
        Auth::getInstance()->signIn($userToRegister);

        // Auth::getInstance()->signIn($user);
        Request::redirect('/dashboard');
    } else {
        StateManager::setState('message', 'Invalid email or password');
    }
}

?>

<div class="w-screen h-screen grid place-items-center">
    <div class="flex flex-col gap-2">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login to Your Account</h2>
        <?php if ($message) : ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline"><?= $message; ?></span>
            </div>
        <?php endif; ?>
        <form onsubmit="loginUser">
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2" for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Enter your password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded-md font-semibold hover:opacity-90">Login</button>
        </form>
        <p class="text-center text-sm text-gray-500 mt-4">Don't have an account? <a href="/signup" class="text-blue-500 cursor-pointer hover:underline">Register</a></p>
    </div>
</div>