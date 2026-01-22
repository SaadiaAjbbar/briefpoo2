<section class=" hero_section bg-white py-16 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-4">
            Decouvrez ici les meilleurs <span class="text-indigo-600">Articles</span> .
        </h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Explorez un monde de connaissances grâce à nos catégories soigneusement sélectionnées et à nos auteurs experts.
        </p>
    </div>
</section>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <div class="flex items-center space-x-4 mb-10 overflow-x-auto pb-4 no-scrollbar">
        <button class="bg-indigo-600 text-white px-6 py-2 rounded-full whitespace-nowrap">tous les articles</button>
        </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php foreach ($articles as $article): ?>
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col">

                <div class="h-16 bg-indigo-100 flex items-center justify-center">
                </div>

                <div class="p-6 flex-grow">

                    <div class="flex flex-wrap gap-2 mb-3">
                        <?php foreach ($article['categories'] as $cat): ?>
                            <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 bg-indigo-50 px-2 py-1 rounded">
                                <?= htmlspecialchars($cat) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        <?= htmlspecialchars($article['titre']) ?>
                    </h3>

                    <p class="text-gray-600 text-sm mb-4">
                        <?= htmlspecialchars($article['content']) ?>
                    </p>
                </div>

                <div class="p-6 pt-0 border-t border-gray-50 mt-auto">
                    <p class="text-xs text-gray-500">
                        Publie le <?= htmlspecialchars($article['date_creation']) ?>
                    </p>
                </div>

            </article>
        <?php endforeach; ?>



    </div>
</main>