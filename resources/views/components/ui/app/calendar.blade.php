@if (isset($years) && $years != null)
    <div class="relative z-50">
        <div class="frowe w-full">
            <div
                x-data="{ isOpen : false }"
                class="group relative print:hidden"
            >
                <div
                    @click="isOpen=!isOpen"
                    @class([
                        'cursor-pointer',
                        'bg-gray-200 dark:bg-gray-500 hover:bg-gray-300',
                        'rounded-xl'
                    ])
                    title="View Calendar"
                >
                    <x-ui.icon
                        icon="calendar"
                        padding="p-0"
                        dark=""
                        width="w-10"
                    />
                </div>
                <div
                    x-cloak
                    x-show="isOpen"
                    @click.outside="isOpen=false"
                    class="menudiv right-0 top-14 w-52 bg-gray-200 dark:bg-gray-800 border shadow"
                >
                    <div class="p-2 fcol w-full gap-2">
                        <div class="w-full frows flex-wrap gap-2 border-b">
                            @foreach ($years as $year)
                                <div
                                    @class([
                                        'cursor-pointer hover:text-green-300',
                                        'text-green-500' => $year == $syear
                                    ])
                                    id="year-{{ $year }}"
                                    wire:click="viewMonths('{{ $year }}')"
                                >
                                    {{ $year }}
                                </div>
                            @endforeach
                        </div>
                        @if (isset($months) && $months != null)
                            <div class="w-full frows flex-wrap gap-2 border-b">
                                @foreach ($months as $month)
                                    <div
                                        @class(['cursor-pointer uppercase hover:text-green-300', 'text-green-500' => $month == $smonth])
                                        id="month-{{ $month }}"
                                        wire:click="viewDays('{{ $month }}')"
                                    >
                                        {{ monthname($month) }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if (isset($days) && $days != null)
                            <div class="w-full frows flex-wrap gap-2">
                                @foreach ($days as $day)
                                    @php
                                        $dayItems = false;
                                        if (isset($items)){
                                            $itemsOnThisYear = $items->filter(function ($item) use($syear) {
                                                return $item->created_at->year == $syear;
                                            });
                                            $itemsOnThisMonth = $itemsOnThisYear->filter(function ($item) use($smonth) {
                                                return $item->created_at->month == $smonth;
                                            });
                                            $itemsOnThisDay = $itemsOnThisMonth->filter(function ($item) use($day) {
                                                return $item->created_at->day == $day;
                                            });
                                            if ($itemsOnThisDay->count() > 0){
                                                $dayItems = true;
                                            }
                                        }
                                    @endphp
                                    <div
                                        @class([
                                            'cursor-pointer text-gray-400 hover:text-green-300',
                                            'text-gray-500' => $dayItems,
                                            'text-green-500' => $day == $sday
                                        ])
                                        id="day-{{ $day }}"
                                        wire:click="viewRecords('{{ $day }}')"
                                    >
                                        {{ $day }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
