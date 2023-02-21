<x-admin-layout>

    @php
        $details = [
            ['name'=> 'category','lbl'=> 'Category Name', 'value' =>3,'options'=>$data, 'required'=>true],
            ['name'=> 'name','lbl'=> 'Subcategory Name', 'required'=>true],
            ['name'=> 'icon','lbl'=> 'Icon', 'required'=>true],
            ['name'=> 'is_active','lbl'=> 'Active Status', 'type'=>'switch'],
        ];
    @endphp
    <x-admin.form.form1 method="post" heading="Add Sub Category" :details="$details" :action="route('admin.subCategory.store')" />

</x-admin-layout>
