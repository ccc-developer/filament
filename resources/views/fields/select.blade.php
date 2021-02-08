<x-filament::field-group
    :errorKey="$field->errorKey"
    :for="$field->id"
    :help-message="__($field->helpMessage)"
    :hint="__($field->hint)"
    :label="__($field->label)"
    :required="$field->required"
>
    <x-filament::select
        :autofocus="$field->autofocus"
        :disabled="$field->disabled"
        :empty-option-label="__($field->emptyOptionLabel)"
        :empty-options-message="__($field->emptyOptionsMessage)"
        :error-key="$field->errorKey"
        :extra-attributes="$field->extraAttributes"
        :id="$field->id"
        :name="$field->name"
        :name-attribute="$field->nameAttribute"
        :options="$field->options"
        :placeholder="__($field->placeholder)"
        :required="$field->required"
    />
</x-filament::field-group>
