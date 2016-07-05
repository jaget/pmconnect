<!DOCTYPE html>
<html>
<head>
    <title>Recipes manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

</head>
<body>
<nav>
    <a class="item" href="{{ route('recipes.index') }} ">Recipes</a>
    <a class="item" href="{{ route('recipesBundles.index') }} ">Recipe bundles</a>
    <a class="item" href="{{ route('recipesIngredients.index') }} ">Recipe ingredients</a>
    <a class="item" href="{{ route('recipesPantries.index') }} ">Recipe pantries</a>
</nav>
<main>
    @yield('content')
</main>
</body>
</html>