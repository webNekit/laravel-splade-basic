@seoTitle(__('Новая категория'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая категория') }}
            </h2>
            <a href="{{ route('categories.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку услуг') }}</a>
        </div>
   </x-slot>
       <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
           <x-splade-form action="{{ route('categories.store') }}">
               <x-splade-input name="title" label="{{ __('Название услуги') }}" placeholder="{{ __('Есть пробитие!') }}"/>
               <x-splade-textarea name="text" label="{{ __('Описание услуги') }}" placeholder="{{ __('Пробитие защищенной зоны вокруг дупла') }}" />
               <x-splade-file name="image" label="{{ __('Изображение услуги') }}" />
               <x-splade-select name="isActive"  label="{{ __('Статус услуги') }}">
                   <option value="0">{{ __('Не активен') }}</option>
                   <option value="1">{{ __('Активен') }}</option>
               </x-splade-select>
               <x-splade-select name="isPopular"  label="{{ __('Популярная категория') }}">
                   <option value="0">{{ __('нет') }}</option>
                   <option value="1">{{ __('да') }}</option>
               </x-splade-select>
               <x-splade-select name="isNew"  label="{{ __('Новая категория') }}">
                   <option value="0">{{ __('нет') }}</option>
                   <option value="1">{{ __('да') }}</option>
               </x-splade-select>
               <x-splade-submit label="Сохранить" />
           </x-splade-form>
       </div>
</x-app-layout>
