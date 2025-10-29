<tr>
    <td class="text-left">৩</td>
    <td class="text-left">V<sub>m</sub>T রিডিং</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vmt reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vmt reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="vmt reading start"
            field2="vmt reading end"
            :$task
        />
    </td>
</tr>
