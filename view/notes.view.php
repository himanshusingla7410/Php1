<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/header.php');
?>

<body class="h-full">

<div class="min-h-full">
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?php foreach ( $notes as $n) : ?>

        <li> 
          <a href="/note?id=<?= $n['id'] ?>" class="text-blue-500 hover:underline">
              <?= $n['notes'] ?> 
          </a>
        </li>

      <?php endforeach ?>
    </div>
  </main>


</div>

    
</body>
</html>
