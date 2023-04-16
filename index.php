<?php
require_once "route.php";
require_once "./requires/database.php";
$moduleName =
  strpos(@$_REQUEST["url"], "/") ? str_split(@$_REQUEST["url"], strpos(@$_REQUEST["url"], "/"))[0] : @$_REQUEST['url'];

$url = [
  "home" => "./views/home.php",
  "create" => "./views/create.php",
  "update" => "./views/update.php",
  "delete" => "./views/delete.php",
  "contact" => "./views/contact.php",
  "about" => "./views/about.php"
];

$routes = new Route($url);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="khrisnaina06">
  <link rel="icon" href="https://avatars.githubusercontent.com/u/93519687?v=4" />

  <!-- css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Project Praktikum 5 | Muhammad khrisna</title>
</head>

<body class="dark:bg-slate-900 dark:text-white">
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="<?= $moduleName == 'update' ? '../home' : ' home' ?>" class="flex items-center cursor-pointer">
        <img src="https://avatars.githubusercontent.com/u/93519687?v=4" class="h-8 mr-3 rounded-full" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Muhammad Khrisna</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="<?= $moduleName == 'update' ? '../home' : ' home' ?>" class="<?= $moduleName == 'home' || $moduleName == '' ? 'block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' ?>" aria-current="page">Home</a>
          </li>
          <li>
            <a href="<?= $moduleName == 'update' ? '../contact' : ' contact' ?>" class="<?= $moduleName == 'contact' || $moduleName == '' ? 'block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' ?>">Contact</a>
          </li>
          <li>
            <a href="<?= $moduleName == 'update' ? '../about' : ' about' ?>" class="<?= $moduleName == 'about' || $moduleName == '' ? 'block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' ?>">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-5 max-w-[1000px] m-auto">
    <?php $routes->load($moduleName); ?>
  </div>
</body>	
<style>
		footer {
		  position: fixed;
		  bottom: 0;
		  width: 100%;
		  text-align: center;
		  background-color: #f2f2f2;
		  padding: 10px;
		  transition: all 0.3s ease-in-out;
		}

		@media screen and (max-width: 767px) {
		  footer {
		    position: static;
		    margin-top: 20px;
		  }
		}

		@media screen and (min-width: 768px) {
		  footer {
		    position: fixed;
		    bottom: 0;
		  }
		}
	</style>
<footer>
    <p>&copy; 2023, Muhammad khrisna faisal zuhri, Universitas Pelita Bangsa</p>
</footer>
</html>