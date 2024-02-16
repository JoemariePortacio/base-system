<div class="h-full m-5 ">
    <div class="h-fit m-5">
        <div class="pt-12 w-full h-full flex flex-col space-y-10 justify-center">
            <div class="p-4 text-center font-bold text-3xl">
                <h3>Farm Informations</h3>
            </div>
            <div>
            <div class="sm:hidden">
                <label for="Tab" class="sr-only">Tab</label>

                <select id="Tab" class="w-full rounded-md border-gray-200">
                <option>Farm</option>
                <option>Location</option>
                </select>
            </div>

            <div class="hidden sm:block">
                <div class="border-b border-gray-200">
                <nav class="-mb-px flex gap-6" aria-label="Tabs">
                    <a
                    href="#"
                    class="inline-flex shrink-0 items-center gap-2 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
                    >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z"
                        />
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                    </svg>

                    Farm
                    </a>

                    <a
                    href="#"
                    class="inline-flex shrink-0 items-center gap-2 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
                    >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"
                        />
                    </svg>

                    Location
                    </a>
                </nav>
                </div>
            </div>
            <!--
    Heads up! 👋

    This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

            <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date of Birth</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Role</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Salary</th>
                    <th class="px-4 py-2"></th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                    <td class="whitespace-nowrap px-4 py-2">
                    <a
                        href="#"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                    >
                        View
                    </a>
                    </td>
                </tr>

                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jane Doe</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">04/11/1980</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Designer</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$100,000</td>
                    <td class="whitespace-nowrap px-4 py-2">
                    <a
                        href="#"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                    >
                        View
                    </a>
                    </td>
                </tr>

                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Gary Barlow</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                    <td class="whitespace-nowrap px-4 py-2">
                    <a
                        href="#"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                    >
                        View
                    </a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>

            </div>
        </div>
    </div>
</div>