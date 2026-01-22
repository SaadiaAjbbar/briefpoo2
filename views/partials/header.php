<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSystem</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="bg-gray-50 font-sans">

<nav class="bg-white border-b border-gray-200 top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <div class="flex items-center">
                <span class="text-2xl font-bold text-indigo-600">BlogSystem</span>
            </div>

            <div class="flex items-center space-x-4">

                <a href="/" class="text-gray-600 hover:text-indigo-600 font-medium">
                    Home
                </a>

                <?php if (!isset($_SESSION['user'])): ?>

                    <a href="/login" class="text-gray-600 hover:text-indigo-600 font-medium">
                        Login
                    </a>

                    <a href="/register"
                       class="bg-indigo-600 text-white px-5 py-2 rounded-full font-medium hover:bg-indigo-700 transition shadow-sm">
                        Register
                    </a>

                <?php else: ?>

                    <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                        <a href="/admin/categories/create"
                           class="text-gray-600 hover:text-indigo-600 font-medium">
                            Ajouter catégorie
                        </a>

                    <?php elseif ($_SESSION['user']['role'] === 'author'): ?>
                        <a href="/articles/create"
                           class="text-gray-600 hover:text-indigo-600 font-medium">
                            Créer article
                        </a>

                    <?php elseif ($_SESSION['user']['role'] === 'reader'): ?>
                        <a href="/mes-commentaires"
                           class="text-gray-600 hover:text-indigo-600 font-medium">
                            Mes commentaires
                        </a>
                    <?php endif; ?>

                    <a href="/logout"
                       class="bg-indigo-600 text-white px-5 py-2 rounded-full font-medium hover:bg-red-600 transition shadow-sm">
                        Logout
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</nav>
