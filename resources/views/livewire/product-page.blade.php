<section>
    <div class="max-w-screen-xl px-4 text-stone-600 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                
                @if ($this->image)
                <a href="#" wire:click.prevent="$emit('modalOpened', '{{ $this->image->getUrl() }}')">
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="object-cover rounded-xl" src="{{ $this->image->getUrl('large') }}" alt="{{ $this->product->translateAttribute('name') }}" />
                    </div>
                </a>
                @endif

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                    @foreach ($this->images as $image)
                    <div class="aspect-w-1 aspect-h-1" wire:key="image_{{ $image->id }}">
                        <a href="#" wire:click.prevent="openModal('{{ $image->getUrl() }}')">
                            <img loading="lazy" class="object-cover rounded-xl" src="{{ $image->getUrl('small') }}" alt="{{ $this->product->translateAttribute('name') }}" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <p class="text-xl font-bold">
                        {{ $this->product->translateAttribute('name') }}
                    </p>

                    <x-product-price class="ml-4 font-medium" :variant="$this->variant" />
                </div>

                <article class="mt-4 text-slate-700">
                    {!! $this->product->translateAttribute('description') !!}
                </article>

                <form class="mt-4">
                    <div class="space-y-4">
                        @foreach ($this->productOptions as $option)
                        <fieldset>
                            <legend class="text-xs font-medium text-gray-700">
                                {{ $option['option']->translate('name') }}
                            </legend>

                            <div class="flex flex-wrap gap-2 mt-2 text-xs tracking-wide uppercase" x-data="{
                                         selectedOption: @entangle('selectedOptionValues'),
                                         selectedValues: [],
                                     }" x-init="selectedValues = Object.values(selectedOption);
                                     $watch('selectedOption', value =>
                                         selectedValues = Object.values(selectedOption)
                                     )">
                                @foreach ($option['values'] as $value)
                                <button class="px-6 py-4 font-medium border rounded-lg focus:outline-none focus:ring" type="button" wire:click="
                                                $set('selectedOptionValues.{{ $option['option']->id }}', {{ $value->id }})
                                            " :class="{
                                                    'bg-stone-600 border-stone-600 text-white hover:bg-stone-700': selectedValues
                                                        .includes({{ $value->id }}),
                                                    'hover:bg-gray-100': !selectedValues.includes({{ $value->id }})
                                                }">
                                    {{ $value->translate('name') }}
                                </button>
                                @endforeach
                            </div>
                        </fieldset>
                        @endforeach
                    </div>

                    <div class="max-w-xs mt-8">
                        <livewire:components.add-to-cart :purchasable="$this->variant" :wire:key="$this->variant->id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<livewire:modal />