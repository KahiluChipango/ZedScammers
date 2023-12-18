<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zed Scammers - Under Construction</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100 flex flex-col min-h-screen">

<!-- Header -->
<header class="bg-blue-500 text-white py-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo container -->
        <div class="flex items-center">
            <img src="{{ asset('storage/Pics/Pezapo Scamers.png') }}" alt="Zed Scammers Logo"
                 class="max-w-full h-12 mr-2">
            <h1 class="text-2xl font-bold sm:text-3xl">Zed Scammers</h1>
        </div>
    </div>
</header>

<!-- Main Content Area (Under Construction Message) -->
<main class="container mx-auto mt-8 text-center flex-grow">
    <h2 class="text-3xl font-bold text-gray-800">Under Construction</h2>
    <p class="text-lg text-gray-600">I've set up this platform to empower you. The website is currently in
        development, so stay tuned for updates!</p>
    <button onclick="openFormModal()"
            class="mt-4 bg-blue-500 text-white rounded-full py-2 px-6 hover:bg-teal-600 focus:outline-none">Report
        Scam</button>
    <p class="mt-4"><a href="https://www.facebook.com/profile.php?id=61552005604710&mibextid=hIlR13"
                       target="_blank"
                       class="text-teal-500 underline hover:text-teal-600">Follow us on Facebook for more
            updates</a></p>
</main>

<!-- Footer -->
<footer class="bg-blue-300 py-4">
    <div class="container mx-auto flex flex-col items-center text-gray-600">
        <!-- Copyright Notice (Hidden on Small Screens) -->
        <p class="hidden sm:block mb-2">&copy; 2023 Zed Scammers. All rights reserved.</p>

        <!-- Small Facebook Icon with Link -->
        <a href="https://web.facebook.com/zedscam" target="_blank"
           class="text-teal-500 underline hover:text-teal-600">
            <svg fill="currentColor" viewBox="0 0 24 24" class="oc se inline-block h-6 w-6" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                      clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</footer>

<!-- Form Section -->
<div id="form-modal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-8 rounded shadow-md">
        <span class="text-2xl font-bold mb-4">Report Scam</span>
        <form>
            <!-- Your form elements go here -->
            <div class="mb-4">
                <label for="example-input" class="block text-sm font-medium text-gray-700">Example Input</label>
                <input type="text" id="example-input" name="example-input" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded p-2 hover:bg-blue-600">Submit</button>
            <button type="button" onclick="closeFormModal()" class="ml-2 text-gray-600 underline hover:text-gray-800">Close</button>
        </form>
    </div>
</div>

<script>
    // JavaScript to open the form modal
    function openFormModal() {
        document.getElementById('form-modal').style.display = 'flex';
        document.addEventListener('click', closeFormModalOutside);
    }

    // JavaScript to close the form modal
    function closeFormModal() {
        document.getElementById('form-modal').style.display = 'none';
        document.removeEventListener('click', closeFormModalOutside);
    }

    // JavaScript to close the form modal when clicked outside
    function closeFormModalOutside(event) {
        var formModal = document.getElementById('form-modal');
        if (event.target === formModal) {
            formModal.style.display = 'none';
            document.removeEventListener('click', closeFormModalOutside);
        }
    }
</script>

</body>

</html>
