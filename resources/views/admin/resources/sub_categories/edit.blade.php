<x-admin-layout>

    @php
        $details = [
            ['name'=> 'category', 'lbl'=>'Category', 'value'=> $data->category_id, 'options'=> $categories],
            ['name'=> 'name','lbl'=> 'category Name', 'value'=> $data->name, 'required'=> true,],
            ['name'=> 'icon','lbl'=> 'Icon', 'value'=> $data->icon],
            ['name'=> 'is_active','lbl'=> 'Active Status', 'value'=> $data->is_active, 'type'=> 'switch'],
        ];
    @endphp
    <x-admin.form.form1 method="post" heading="Edit Sub Category" :details="$details" :action="route('admin.subCategory.update', $data->id)">
        @method('patch')
        <x-slot name="thead">

        </x-slot>
    </x-admin.form.form1>

</x-admin-layout>
