<tr>
    <td class="text-left">৬</td>
    <td class="text-left">V<sub>b</sub>T রিডিং</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vbt reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vbt reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="vbt reading start"
            field2="vbt reading end"
            :$task
        />
    </td>
</tr>
