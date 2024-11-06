<?php

use Lib\Prisma\Classes\Prisma;
use Lib\Request;

function registerUser($data)
{
    print_r($data);
    $prisma = Prisma::getInstance();

    $name = $data->name;
    $email = $data->email;
    $password = $data->password;

    $user = $prisma->user->create([
        'data' => [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'userRole' => [
                'connectOrCreate' => [
                    'where' => [
                        'name' => 'User'
                    ],
                    'create' => [
                        'name' => 'User'
                    ]
                ]
            ]
        ]
    ]);

    if ($user) {
        Request::redirect('/signin');
    }
}

?>

<div class="w-screen h-screen grid place-items-center">
    <div class="flex flex-col gap-2">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Create an Account</h2>
        <form onsubmit="registerUser">
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="Enter your name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                <input name="email" type="email" id="register-email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2" for="password">Password</label>
                <input name="password" type="password" id="register-password" placeholder="Enter your password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded-md font-semibold hover:opacity-90">Register</button>
        </form>
        <p class="text-center text-sm text-gray-500 mt-4">Already have an account? <a href="/signin" class="text-blue-500 cursor-pointer hover:underline">Login</a></p>
    </div>
</div>