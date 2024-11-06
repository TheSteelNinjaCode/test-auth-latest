<?php

use Lib\MainLayout;
use Lib\Auth\Auth;

MainLayout::$title = 'Dashboard';
MainLayout::$description = 'Dashboard description';

$user = Auth::getInstance()->getPayload();

function handleSignOut()
{
    Auth::getInstance()->signOut('/signin');
}

?>

<div class="flex flex-col min-h-screen">
    <!-- Top Head -->
    <header class="bg-gray-800 text-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-2">
                <span>Role: <?= $user->role; ?></span>
                <span>Name: <?= $user->name; ?></span>
            </div>
            <button onclick="handleSignOut">Sign Out</button>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside class="bg-gray-200 w-1/4 p-4">
            <div class="flex flex-col gap-2">
                <a href="/dashboard">Dashboard</a>
                <hr class="border-gray-700">
                <a href="/dashboard/users">Users</a>
                <a href="/dashboard/adds">Adds</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex flex-col gap-4 flex-1 p-4">
            <?= MainLayout::$childLayoutChildren ?>
        </main>
    </div>
</div>