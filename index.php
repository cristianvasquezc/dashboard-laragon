<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="es" class="bg-slate-900">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CVC | Proyectos</title>
  <link rel="shortcut icon" href="./admin/assets/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./admin/css/daisyui@4.7.2.css">
  <script src="./admin/js/tailwind-3.3.3.js"></script>
</head>

<body class="text-white bg-slate-900">
  <header class="flex items-center justify-center w-full border-b bg-slate-900 border-slate-800">
    <div class="navbar max-w-6xl">
      <div class="navbar-start w-full">
        <div class="flex-1">
          <a class="text-2xl font-bold text-green-500">Cristian Vásquez</a>
        </div>
        <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-slate-900 rounded-box w-52">
            <?php
            $menuItems = array(
              //"Home" => "/",
              "Apache Friends" => "/dashboard/",
              "FAQs" => "/dashboard/faq.html",
              "HOW-TO Guides" => "/dashboard/howto.html",
              "PHPInfo" => "/admin/phpinfo.php",
              "phpMyAdmin" => "/phpmyadmin"
            );
            ?>
            <?php foreach ($menuItems as $label => $link) : ?>
              <li class="text-xs lg:text-sm font-medium text-white">
                <a href="<?php echo $link; ?>" class="py-4 rounded-md cursor-pointer md:relative md:no-underline before:content-[''] before:absolute before:bg-green-500 before:w-0 before:h-1 before:bottom-0 before:left-0 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full" target="_blank"><?php echo $label; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="navbar-center hidden md:flex">
        <ul class="menu menu-horizontal px-1">
          <?php foreach ($menuItems as $label => $link) : ?>
            <li class="text-xs lg:text-sm font-medium text-white">
              <a href="<?php echo $link; ?>" class="py-4 rounded-md cursor-pointer md:relative md:no-underline before:content-[''] before:absolute before:bg-green-500 before:w-0 before:h-1 before:bottom-0 before:left-0 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full" target="_blank"><?php echo $label; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </header>
  <section class="flex flex-col items-center justify-center gap-5 p-10 px-5 text-white md:px-10">
    <div class="container max-w-6xl">
      <div class="pb-1 mb-5 border-b border-slate-800">
        <h1 class="text-4xl font-semibold">Mis Proyectos</h1>
        <span class="text-sm text-gray-400">Folder Root: <?php print($_SERVER['DOCUMENT_ROOT']); ?></span>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-7 gap-6 p-5">
        <?php
        $carpetas = obtenerCarpetas("./");

        if (empty($carpetas)) {
          echo '<p>No hay carpetas</p>';
        } else {
          foreach ($carpetas as $carpeta) {
            include './admin/src/item.php';
          }
        }
        ?>
      </div>
    </div>
  </section>

  <?php
  function obtenerCarpetas($directorio)
  {
    $carpetas = [];
    $proyectos = scandir($directorio);

    foreach ($proyectos as $proyecto) {
      if (is_dir("$directorio/$proyecto") && !in_array($proyecto, ['src', 'admin', '0', '.', '..']) && substr($proyecto, 0, 1) !== '.' && substr($proyecto, 0, 1) !== '0') {
        $carpetas[] = $proyecto;
      }
    }

    return $carpetas;
  }
  ?>
  <footer class="text-center py-4 text-xs md:text-base border-t border-slate-800">
    <p>Copyright © 2024 - All right reserved by <a href="https://mislinks.netlify.app/" class="link text-green-500 hover:text-green-600" target="_blank">Cristian Vásquez</a></p>
  </footer>

</body>

</html>