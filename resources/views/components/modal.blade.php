<div ng-hide="modalClose" class="bg-slate-600 bg-opacity-65 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-screen max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full transition-all duration-300 ease-in-out">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-md">
            <!-- Modal header -->
            <div class="flex flex-col items-center justify-center p-4 md:p-5">
                <div class="text-9xl text-gray-700 ">
                    @if($type == 'success')
                        <i class="fa-solid fa-check"></i>
                    @else
                        <i class="fa-solid fa-xmark"></i>
                    @endisset
                </div>
                <h3 class="text-xl font-medium text-gray-900 ">
                    {{$title}}
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 text-center">
                <p class="text-base leading-relaxed text-gray-700">
                    {{$message}}
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-center p-4 md:p-5">
                <button type="button" ng-click="modalClose = true" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
            </div>
        </div>
    </div>
</div>
