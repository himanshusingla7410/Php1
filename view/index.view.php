<?php
require base_path('view/partials/head.php');
require base_path('view/partials/nav.php');
require base_path('view/partials/header.php');
?>

<body class="h-full">

<div class="min-h-full">
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Hello, <?= $_SESSION['user']['email'] ?? 'Guest'?> 
      
      <p>Welcome to Home page</p>
    </div>
  </main>


</div>

    
</body>
</html>
