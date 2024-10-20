<?php
require base_path('view/partials/head.php');
require base_path('view/partials/nav.php');
require base_path('view/partials/header.php');
?>

<body class="h-full">

<div class="min-h-full">
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <p> <?= htmlspecialchars($note['note']) ?> </p>

      <a href="/notes" class="text-blue-500 hover:underline" >
        <div class= "mt-6">
          <p>
            go back..
          </p>
        </div>
      </a>
      <div class='mt-6'>
      <a href="/note/edit?id=<?= $note['id'] ?>" class= 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>Edit</a>
      </div>
      <form  class="mt-6" method ='POST'>
        <input type='hidden' name='_method' value ='DELETE'>
        <input type ="hidden" name='id' value='<?= $note['id'] ?>'>
        <button class= 'text-red-500 text-s'>Delete</button> 

      </form>
    </div>
  </main>


</div>

    
</body>
</html>
