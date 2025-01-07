<x-app-layout>
    <x-slot name="header">
        <x-h2>
            {{__('Email List') }} > {{__('Create new  List')}}
        </x-h2>
    </x-slot>

    <x-card>

        <x-form :action="route('email-list.store')" post enctype="multipart/form-data">
            <div class=" space-y-4">
                <div>
                    <x-input-label class=" mb-4" for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full p-2" type="title" name="title" :value="old('title')" autofocus />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div>
                    <x-input-label class=" mb-2" for="file" :value="__('File')" />
                    <x-text-input id="file" class="block mt-1 w-full p-2" type="file" name="file" :value="old('file')" autofocus accept=".csv" />
                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                </div>

                <x-secondary-button type="reset">

                    {{__('Cancel')}}

                </x-secondary-button>
                <x-primary-button type="submit">

                    {{__('Save')}}

                </x-primary-button>
            </div>
        </x-form>




    </x-card>

</x-app-layout>