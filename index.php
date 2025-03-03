<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-white py-10">
 <?php include('./components/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-10">
        <section class="flex gap-x-3">
            <div class="w-2/3">
                <div class="flex gap-4">
                    <span class=" text-3xl text-cyan-600 font-bold font-mono">Welcome to my portfolio!</span>
                    <svg class="h-6 w-6 text-sky-500" <svg  viewBox="0 0 24 24"  width="24"  height="24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8h1a4 4 0 0 1 0 8h-1" />  <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />  <line x1="6" y1="1" x2="6" y2="4" />  <line x1="10" y1="1" x2="10" y2="4" />  <line x1="14" y1="1" x2="14" y2="4" /></svg>
                </div>
            
            <h1 class="text-xl font-normal text-justify">
                I'm a junior full-stack developer with about two years of experience in development. 
            <span>
                I've always been curious about the unknown, and I believe people can understand it through lines of code.
            </span>
            <span class="inline-block w-0.5 h-5 bg-sky-500 animate-pulse text-center items-center justify-center" style="animation-duration: 1.5s;"></span>
            <ul class="flex gap-x-3 mt-3">
                    <li>
                        <a href="https://github.com/brendaAndersen">
                        <svg class="h-6 w-6 hover:text-gray-300 text-gray-500 hover:animate-bounce"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" /></svg>    
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/brenda-andersen-de-lima">
                        <svg class="h-6 w-6 hover:text-sky-300 text-sky-500 hover:animate-bounce"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />  <rect x="2" y="9" width="4" height="12" />  <circle cx="4" cy="4" r="2" /></svg>
                        </a>
                    </li>
                </ul>
            </div>
            <?php include('./components/photo.php'); ?>

        </section>

        <section class="gap-y-6 py-6 space-y-3 py-6">
            <h2 class="text-xl font-bold text-sky-500">./projects
            </h2>
            <?php include('./components/projects.php'); ?>
        </section>
    </main>

   <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
        © Copyright <?= date('Y') ?> Coded by me ♡
        </div>
   </footer>
</body>
</html>