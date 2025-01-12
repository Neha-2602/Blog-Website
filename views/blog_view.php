<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main class="flex flex-col lg:flex-row justify-between gap-8 py-12 px-6 sm:px-8 lg:px-12">
    <div class="w-full lg:w-2/3 bg-white rounded-lg shadow-lg overflow-hidden ml-20">

        <h1 class="text-4xl font-bold text-gray-800 mb-6 px-8 py-6"><?= htmlspecialchars($blog['title'] ?? 'Blog Title') ?></h1>

        <div class="mb-6">
            <img class="rounded-lg w-full max-w-xl mx-auto h-full object-cover" src="<?= $blog['image']; ?>" alt="Blog Image" />
        </div>

        <div class="prose max-w-none px-8 py-6 text-gray-800 text-xl">
            <p><?= htmlspecialchars($blog['body'] ?? 'Blog Body Content') ?></p>
        </div>

        <p class="mt-6 px-8 py-4 mb-3">
            <a href="/PRACTICE/blogs" class="inline-block px-3 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-md font-semibold text-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                Go back
            </a>
        </p>

    </div>

    <!-- Sidebar for Random Blogs -->

    <?php
    $queryRandom = "SELECT * FROM blog ORDER BY RAND() LIMIT 5";
    $randomBlogs = $db->query($queryRandom)->fetchAll(); ?>

    <div class="w-full lg:w-1/4 bg-white rounded-lg shadow-lg p-6 border-l-4 border-gray-300">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Check Out Other Blogs</h2>

        <ul class="space-y-4">
            <?php foreach ($randomBlogs as $randomBlog): ?>
                <li class="border-b border-gray-300 pb-4 last:border-none">
                    <a href="/PRACTICE/blog?id=<?= $randomBlog['id']; ?>" class="block text-blue-600 hover:text-blue-800 font-semibold text-lg hover:underline transition duration-200 ease-in-out transform hover:scale-105">
                        <?= htmlspecialchars($randomBlog['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>


</main>

<?php require 'partials/footer.php' ?>