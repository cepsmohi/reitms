<tr>
    <td class="text-left">৭</td>
    <td class="text-left">V<sub>b</sub>D রিডিং</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vbd reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vbd reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="vbd reading start"
            field2="vbd reading end"
            :$task
        />
    </td>
</tr>
