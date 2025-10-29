<tr>
    <td class="text-left">২</td>
    <td class="text-left">V<sub>m</sub> রিডিং</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vm reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="vm reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="vm reading start"
            field2="vm reading end"
            :$task
        />
    </td>
</tr>
