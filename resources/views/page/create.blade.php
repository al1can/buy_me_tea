<x-guest-layout>
    <div class="relative flex items-top justify-center dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="p-6 text-gray-900">
            <div class="text-2xl items-center">Start Your Page Today</div>
            <form method="POST" action="{{ route('page.store') }}" enctype="multipart/form-data">
                @csrf
                
                <!-- Page Image -->
                <div>
                    <x-input-label for="image" :value="__('Page Image')" />
                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>
            
                <!-- Work -->
                <div class="mt-4">
                    <x-input-label for="work" :value="__('Describe what you do')" />
        
                    <x-text-input id="work" class="block mt-1 w-full"
                                    type="text"
                                    name="work"
                                    autocomplete="current-work" />
            
                    <x-input-error :messages="$errors->get('work')" class="mt-2" />
                </div>

                <!-- About -->
                <div class="mt-4">
                    <x-input-label for="about" :value="__('about')" />
        
                    <x-text-input id="about" class="block mt-1 w-full"
                                    type="text"
                                    name="about"
                                    required autocomplete="current-about" />
        
                    <x-input-error :messages="$errors->get('about')" class="mt-2" />
                </div>

                <!-- Social -->
                <div class="mt-4">
                    <x-input-label for="social" :value="__('social')" />
        
                    <x-text-input id="social" class="block mt-1 w-full"
                                    type="text"
                                    name="social"
                                    autocomplete="current-social" />
        
                    <x-input-error :messages="$errors->get('social')" class="mt-2" />
                </div>

                <!-- Link -->
                <div class="mt-4">
                    <x-input-label for="link" :value="__('link')" />
        
                    <x-text-input id="link" class="block mt-1 w-full"
                                    type="text"
                                    name="link"
                                    required autocomplete="current-link" />
        
                    <x-input-error :messages="$errors->get('link')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Start Your Page') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>