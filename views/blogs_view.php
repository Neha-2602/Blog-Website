<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-9 text-center">LATEST BLOGS !!!</h1>

        <!-- 3 columns grid format with responsive adjustments -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"> <!-- Increased gap from 6 to 8 -->
            <?php foreach ($blogs as $blog): ?>
                <div class="bg-white border border-gray-300 rounded-lg shadow-lg flex flex-col transform hover:scale-105 hover:shadow-2xl transition-all duration-300 ease-in-out">
                    <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>">
                        <!-- Set fixed size for the images and ensure they maintain aspect ratio with a light gray bottom border -->
                        <img class="rounded-t-lg w-full h-48 object-cover border-b border-gray-300" src="<?= $blog['image']; ?>" alt="Blog Image" />
                    </a>
                    <div class="p-5 flex flex-col flex-grow">
                        <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>">
                            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-800" style="min-height: 3rem;">
                                <?= htmlspecialchars($blog['title'] ?? 'Blog Title') ?>
                            </h5>
                        </a>
                        <p class="mb-4 font-normal text-gray-600 flex-grow">
                            <?= htmlspecialchars($blog['description'] ?? 'Blog Description') ?>
                        </p>

                        <!-- "Read more" button stays at the bottom of the card -->
                        <a href="/PRACTICE/blog?id=<?= $blog['id']; ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 mt-auto">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php require 'partials/footer.php' ?>