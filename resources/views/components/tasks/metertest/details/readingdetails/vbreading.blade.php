<tr>
    <td class="text-left">৫</td>
    <td class="text-left">V<sub>b</sub> রিডিং</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vb reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vb reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="vb reading start"
            field2="vb reading end"
            :$task
        />
    </td>
</tr>
