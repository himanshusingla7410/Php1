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

      <form  class="mt-6" method ='POST'>
        <input type ="hidden" name='id' value='<?= $note['id'] ?>'>
        <button class= 'text-red-500 text-s'>Delete</button> 

      </form>
    </div>
  </main>


</div>

    
</body>
</html>
