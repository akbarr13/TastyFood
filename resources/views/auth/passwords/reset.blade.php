<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body>

    <section>
        <main id="content" role="main" class="w-full h-screen max-w-md p-6 mx-auto">
            <div class="bg-white border shadow-lg mt-7 rounded-xl">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <div class="flex items-end justify-center mb-8 text-2xl font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="w-6 h-6 text-indigo-600 fill-current">
                                <path
                                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.4267 20 20 16.4267 20 12C20 7.57333 16.4267 4 12 4C7.57333 4 4 7.57333 4 12C4 16.4267 7.57333 20 12 20ZM12 18C8.68 18 6 15.32 6 12C6 8.68 8.68 6 12 6C15.32 6 18 8.68 18 12C18 15.32 15.32 18 12 18ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z">
                                </path>
                            </svg>
                            focus<span class="text-indigo-600">.co</span>
                        </div>
                        <h1 class="block text-lg font-bold text-gray-800">Reset Password</h1>
                    </div>

                    <div class="mt-5">
                        <form>
                            <div class="grid gap-y-4">
                                <div>
                                    <label for="new_password" class="block mb-2 ml-1 text-xs font-semibold ">New
                                        password</label>
                                    <div class="relative">
                                        <input type="password" id="new_password" name="new_password"
                                            class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                            required aria-describedby="new-password-error"
                                            placeholder="Enter a new password">
                                    </div>
                                    <p class="hidden mt-2 text-xs text-red-600" id="new-password-error">Please include a
                                        password that
                                        complies with the rules to ensure security</p>
                                </div>
                                <div>
                                    <label for="confirmn_new_password"
                                        class="block mb-2 ml-1 text-xs font-semibold ">Confirm new password</label>
                                    <div class="relative">
                                        <input type="password" id="confirmn_new_password" name="confirmn_new_password"
                                            class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                            required aria-describedby="confirmn_new-password-error"
                                            placeholder="Enter a new password">
                                    </div>
                                    <p class="hidden mt-2 text-xs text-red-600" id="confirmn_new-password-error">Please
                                        include a password that
                                        complies with the rules to ensure security</p>
                                </div>
                                <button type="submit"
                                    class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Reset
                                    my password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>