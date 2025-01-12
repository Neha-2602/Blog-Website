<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Updated Hero Section -->
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl mb-6">
                Uncover fresh perspectives, ideas, and knowledge through the power of blogs.
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-6">
                We have an open platform where readers find dynamic thinking, and where expert and undiscovered voices can share their writing on any topic.
            </p>
            <a href="/PRACTICE/blogs" class="inline-flex items-center px-6 py-3 text-lg font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Start Reading
                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </section>

        <?php
        // Shuffle blogs to randomize the order
        shuffle($blogs);

        // Split blogs: 3 larger blogs on the left and 4 smaller blogs on the right
        $largerBlogs = array_slice($blogs, 0, 3);
        $smallerBlogs = array_slice($blogs, 3, 4);
        ?>

        <div class="flex flex-wrap lg:flex-nowrap gap-10"> <!-- Increased gap to 10 (2.5rem or 40px) -->
            <div class="w-full lg:w-2/3 space-y-6">
                <?php foreach ($largerBlogs as $blog): ?>
                    <div class="bg-white border border-gray-300 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-2xl transition-all duration-300 ease-in-out">
                        <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>">
                            <img class="rounded-t-lg w-full h-72 object-cover border-b border-gray-300" src="<?= $blog['image']; ?>" alt="Blog Image" />
                        </a>
                        <div class="p-5">
                            <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>">
                                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-800">
                                    <?= htmlspecialchars($blog['title'] ?? 'Blog Title') ?>
                                </h5>
                            </a>
                            <p class="mb-4 font-normal text-gray-600">
                                <?= htmlspecialchars($blog['description'] ?? 'Blog Description') ?>
                            </p>
                            <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="w-full lg:w-1/3 space-y-6">
                <?php foreach ($smallerBlogs as $blog): ?>
                    <div class="bg-white border border-gray-300 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-2xl transition-all duration-300 ease-in-out">
                        <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>">
                            <img class="rounded-t-lg w-full h-32 object-cover border-b border-gray-300" src="<?= $blog['image']; ?>" alt="Blog Image" />
                        </a>
                        <div class="p-4">
                            <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>">
                                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-800">
                                    <?= htmlspecialchars($blog['title'] ?? 'Blog Title') ?>
                                </h5>
                            </a>
                            <p class="mb-2 font-normal text-gray-600">
                                <?= htmlspecialchars(substr($blog['description'], 0, 80) . '...') ?>
                            </p>
                            <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>" class="inline-flex items-center text-sm font-medium text-blue-500 hover:underline">
                                Read more
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-5 text-center">
                    <h5 class="text-lg font-bold text-gray-800 mb-4">Want to explore more?</h5>
                    <a href="/PRACTICE/blogs" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Check out more blogs
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>

<?php require 'partials/footer.php' ?>