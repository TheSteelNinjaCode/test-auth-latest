<?php

use Lib\Request; ?>

<div class="flex flex-col min-h-[100vh] bg-gradient-to-b from-[#a1b8c2] to-white dark:from-[#334455] dark:to-black">
    <header class="px-4 lg:px-6 h-14 flex items-center">
        <a class="flex items-center justify-center" href="/">
            <img class="size-9" src="<?= Request::baseUrl ?>/assets/images/prisma-php.svg" alt="Prisma PHP">
            <span class="sr-only">Prisma PHP</span>
        </a>
        <nav class="ml-auto flex gap-4 sm:gap-6">
            <a class="text-sm font-medium hover:underline underline-offset-4" href="https://prismaphp.tsnc.tech/features" target="_blank">
                Features
            </a>
            <a class="text-sm font-medium hover:underline underline-offset-4" href="https://prismaphp.tsnc.tech/newsletter" target="_blank">
                Join the Newsletter
            </a>
            <a class="text-sm font-medium hover:underline underline-offset-4" href="https://prismaphp.tsnc.tech/docs?doc=get-started" target="_blank">
                Documentation
            </a>
            <a class="text-sm font-medium hover:underline underline-offset-4" href="#">
                Community
            </a>
        </nav>
    </header>
    <main class="flex-1 flex justify-center items-center">
        <section id="hero" class="w-full">
            <div class="px-4 md:px-6">
                <div class="flex flex-col items-center space-y-4 text-center">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none flex items-center gap-3 justify-center">
                        Welcome to Prisma PHP <img class="size-20 hidden sm:block" src="<?= Request::baseUrl ?>/assets/images/prisma-php.svg" alt="Prisma PHP">
                    </h1>
                    <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                        Your Next Generation PHP Framework
                    </p>
                    <div class="flex gap-2">
                        <a class="inline-flex h-10 items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300" href="/signup">
                            Sign Up
                        </a>
                        <a class="inline-flex h-10 items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300" href="/signin">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
        <p class="text-xs text-gray-500 dark:text-gray-400">© <?= date("Y"); ?> Prisma PHP. All rights reserved.</p>
        <nav class="sm:ml-auto flex gap-4 sm:gap-6">
            <a class="text-xs hover:underline underline-offset-4" href="#">
                Twitter
            </a>
            <a class="text-xs hover:underline underline-offset-4" href="https://github.com/TheSteelNinjaCode" target="_blank">
                GitHub
            </a>
            <a class="text-xs hover:underline underline-offset-4" href="https://www.facebook.com/The-Steel-Ninja-Code-106729874409662" target="_blank">
                Facebook
            </a>
        </nav>
    </footer>
</div>