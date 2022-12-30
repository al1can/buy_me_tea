<x-app-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        <div>
            <div class="flex justify-center"><img class="rounded-full w-36" src="storage/{{ $page->image }}"></div>
            <div class="flex justify-center text-3xl font-bold">{{ $page->user->name }}</div>
            <div class="flex justify-center">{{ $page->work }}</div>
            <button x-on:click="console.log('asdas')">
                console
            </button>
            <div class="">
                <div class="grid grid-cols-3">
                    <div class="relative col-span-2 border-2 border-solid border-gray-300 rounded-xl p-3 m-5">
                        <div>{{ $page->about }}</div>
                        <a href="https://{{ $page->social }}" class="absolute inset-x-3 bottom-3"><i class="fa-solid fa-link"></i></a>
                    </div>
                    <div class="border-2 border-solid border-gray-300 rounded-xl p-3 m-5">
                        <div>Buy {{ $page->user->name }} a tea</div>
                        <div class="border-2 border-solid border-orange-200 rounded-xl bg-orange-100">
                            <div class="flex items-center">
                                <div class="text-3xl">☕</div>
                                <div>X</div>
                                <x-text-input id="radio-1" value="radio-1" type="radio" name="quantity" />
                                <x-text-input id="radio-2" value="radio-1" type="radio" name="quantity" />
                                <x-text-input id="radio-3" value="radio-1" type="radio" name="quantity" />
                                <x-text-input type="number" min="1" max="10"/>
                            </div>
                            <div>
                                <x-input-label for="message" :value="__('message')" />
                                <x-text-input id="message" type="text" name="message" placeholder="Say something nice.. (optional)"></x-text-input>
                            </div>
                            <div>
                                <x-primary-button class="bg-orange-500">
                                    {{__('Support')}}
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>