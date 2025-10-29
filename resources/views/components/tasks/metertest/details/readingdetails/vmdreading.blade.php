<tr>
    <td class="text-left">৪</td>
    <td class="text-left">V<sub>m</sub>D রিডিং</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vmd reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vmd reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="vmd reading start"
            field2="vmd reading end"
            :$task
        />
    </td>
</tr>
