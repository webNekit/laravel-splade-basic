@seoTitle(__('Новый товар'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новый товар') }}
            </h2>
            <a href="{{ route('products.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку услуг') }}</a>
        </div>
   </x-slot>
       <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
           <x-splade-form action="{{ route('products.store') }}">
               <x-splade-select label="Категория товара" name="category_id" :options="$categories"/>
               <x-splade-input name="title" label="{{ __('Название услуги') }}" placeholder="{{ __('Есть пробитие!') }}"/>
               <x-splade-textarea name="content" label="{{ __('Описание услуги') }}" placeholder="{{ __('Пробитие защищенной зоны вокруг дупла') }}" />
               <x-splade-file name="image" label="{{ __('Изображение услуги') }}" />
               <x-splade-input name="price" label="{{ __('Цена за услугу') }}" placeholder="{{ __('Квас!') }}"/>
               <x-splade-select name="isActive"  label="{{ __('Статус услуги') }}">
                   <option value="0">{{ __('Не активен') }}</option>
                   <option value="1">{{ __('Активен') }}</option>
               </x-splade-select>
               <x-splade-select name="isNew"  label="{{ __('Новый товар') }}">
                   <option value="0">{{ __('Нет') }}</option>
                   <option value="1">{{ __('Да') }}</option>
               </x-splade-select>
               <x-splade-select name="isPopular"  label="{{ __('Популярный товар') }}">
                   <option value="0">{{ __('Нет') }}</option>
                   <option value="1">{{ __('Да') }}</option>
               </x-splade-select>
               <x-splade-submit label="Сохранить" />
           </x-splade-form>
       </div>
</x-app-layout>
