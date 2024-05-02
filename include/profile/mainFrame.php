<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Профиль</title>
</head>

<body>

    <?php
        include ('../header.php');
    ?>

    <div class="flex flex-row justify-center items-center mx-auto mt-32">
        <!-- <div class="flex flex-col">
            <label
                class="flex flex-col w-52 rounded-full h-52 mx-auto border-4 border-[#b9c0b3] border-dashed hover:bg-[#e6f9d3] hover:border-[#F1FFE3] transition duration-200">
                <div class="flex flex-col my-auto items-center justify-center pt-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                        Прикрепите файл</p>
                </div>
                <input type="file" class="opacity-0" />
            </label>

            <button class="uppercase items-center flex justify-center py-3 px-6 mt-6 bg-[#F1FFE3] rounded-full shadow-lg
        hover:shadow-2xl hover:font-medium hover:border-solid hover:border-[#F1FFE3] transition duration-200">
                <img src="/src/img/icons/profile/img.svg" class="mr-2">
                Загрузить фото
            </button>

            <button class="uppercase items-center flex justify-center py-2 px-8 mt-3 bg-[#F6F6F6] border-solid border-[#E0ECD3] border-[3px] rounded-full 
        shadow-lg hover:shadow-2xl hover:font-medium hover:border-solid transition duration-200">
                <img src="/src/img/icons/profile/delete.svg" class="mr-2">
                Удалить фото
            </button>
        </div>

        <div class="flex flex-row">
            <div class="flex flex-col mx-[30px]">
                <form action="">
                    <div class="flex flex-col gap-6 w-72">
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="text" id="second_name" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                        text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                        focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="second_name" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                        truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                        after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                        peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                        peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                        peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Фамилия и имя:
                            </label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="text" id="patronymic" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                    text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                    focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="patronymic" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                    truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                    after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                    peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                    peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Отчество:
                            </label>
                        </div>
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="password" id="pass" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                    text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                    focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="pass" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                    truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                    after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                    peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                    peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Пароль:
                            </label>
                        </div>
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="date" id="date" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                    text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                    focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="date" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                    truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                    after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                    peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                    peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Дата рождения:
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex flex-col">
                <form action="">
                    <div class="flex flex-col gap-6 w-72">
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="number" id="number" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                        text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                        focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="number" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                        truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                        after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                        peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                        peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                        peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                СНИЛС:
                            </label>
                        </div>
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="number" id="polis" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                    text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                    focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="polis" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                    truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                    after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                    peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                    peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Номер полиса:
                            </label>
                        </div>
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="email" id="email" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                    text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                    focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="email" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                    truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                    after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                    peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                    peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Email:
                            </label>
                        </div>
                        <div class="relative h-11 w-full min-w-[200px] mt-6">
                            <input type="phone" id="phone" class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal 
                    text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 
                    focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                            <label for="phone" class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible 
                    truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block 
                    after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 
                    peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight 
                    peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent 
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Телефон:
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-[325px] h-11 mx-auto mt-11">
        <button class="uppercase items-center flex justify-center py-2 px-8 mt-3 bg-[#F1FFE3] rounded-full 
    shadow-lg hover:shadow-2xl hover:font-medium transition duration-200 border">
            <img src="/src/img/icons/profile/apply.svg" class="mr-2">
            Сохранить изменения
        </button>
    </div> -->

    <?php 
        include('../reg/index.php')
    ?>

    <?php
        include ('../footer.php');
    ?>


</body>

</html>