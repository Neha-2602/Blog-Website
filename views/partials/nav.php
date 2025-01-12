<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/PRACTICE/" class="<?= urlIs('/PRACTICE/') ? 'rounded-md bg-gray-900 text-white px-3 py-2' : "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" ?>">Home</a>
                        <a href="/PRACTICE/blogs" class="<?= urlIs('/PRACTICE/blogs') ? 'rounded-md bg-gray-900 text-white px-3 py-2' : "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" ?>">Blogs</a>
                        <a href="/PRACTICE/about" class="<?= urlIs('/PRACTICE/about') ? 'rounded-md bg-gray-900 text-white px-3 py-2' : "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" ?>">About</a>
                        <a href="/PRACTICE/contact" class="<?= urlIs('/PRACTICE/contact') ? 'rounded-md bg-gray-900 text-white px-3 py-2' : "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" ?>">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>