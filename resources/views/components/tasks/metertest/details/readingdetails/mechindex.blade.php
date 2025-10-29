<tr>
    <td class="text-left">১</td>
    <td class="text-left">মেকানিক্যাল ইনডেক্স পাঠ</td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="mech reading start" tag="+ reading start"/>
        </div>
    </td>
    <td class="text-right">
        <div class="frowe">
            <x-tasks.values :$task field="mech reading end" tag="+ reading stop"/>
        </div>
    </td>
    <td class="text-right">
        <x-tasks.metertest.details.readingddiff
            field1="mech reading start"
            field2="mech reading end"
            :$task
        />
    </td>
</tr>
