@if($addSealForm)
    <x-form.form-modal
        formCondition="addSealForm"
        :submitCondition="true"
        :submitFun="$errors->has('sealNotExit')? 'addSealOnField' : 'addSeal'"
        formId="addSealForm"
        submitIcon="plus"
        :submitTag="$errors->has('sealNotExit')? 'Add Seal On Field' : 'Add Seal'"
    >
        <div class="mb-2 stitle text-grad">{{ $sealType ?? 'Type not selected' }}</div>
        <x-form.inputwire
            name="prefix"
            placeholder="Prefix"
            icon="tag"
            hints="letter only, like M"
        />
        <x-form.inputwire
            name="sealNumber"
            placeholder="Seal Number"
            icon="start"
            hints="number only"
        />
    </x-form.form-modal>
@endif
