@seoTitle(__('Категории'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Услуги') }}
            </h2>
            <a href="{{ route('categories.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая услуга') }}</a>
        </div>
   </x-slot>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <x-splade-table :for="$categories">
                @cell('action', $categories)
                    <div class="flex gap-2">
                        <Link href="{{ route('categories.destroy', $categories->id) }}" class="" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{ __('Удалить') }}</Link>
                        <Link  href="{{ route('categories.edit', $categories->id) }}">Редактировать</Link>
                    </div>
                @endcell
            </x-splade-table>
        </div>
</x-app-layout>
