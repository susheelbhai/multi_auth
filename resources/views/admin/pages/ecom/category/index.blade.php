<x-admin.app-layout>
    <x-slot name='head'> 
        <title> Category </title>
    </x-slot>

    
    <div>
        <x-admin.heading.heading-with-breadcrumb name="Category" lbl1='E Commerse' lbl2="Category">
        </x-admin.heading.heading-with-breadcrumb>


        <div class="row">
            <div class="col log-12 col-lg-8">
                <div id="brands" data-list='{"valueNames":["id","name","slug"],"page":10,"pagination":true}'>
                    <div class="row align-items-center justify-content-between g-3 mb-3">
                        <x-admin.table.search-box />
                        <x-admin.table.add-export add_url='' export_url='' />
                    </div>
                    <div class=" px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
                        <div class="table-responsive scrollbar ms-n1 ps-1">
                            <table class="table table-sm fs--1 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort align-middle" scope="col" data-sort="id"
                                            style="width:15%; min-width:120px;">ID</th>
                                        <th class="sort align-middle" scope="col" data-sort="name"
                                            style="width:15%; min-width:120px;">Name</th>
                                        <th class="sort align-middle" scope="col" data-sort="slug"
                                            style="width:10%;">Slug
                                        </th>
                                        <th class="sort align-middle" scope="col" data-sort="customer"
                                            style="width:21%;  min-width:120px;">Logo</th>
                                        <th class="sort align-middle text-end" scope="col" data-sort=""
                                            style="width:10%;">Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-latest-review-body">

                                    @foreach ($data as $i)
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">

                                            <td class="id align-middle white-space-nowrap"> {{ $i->id }} </td>
                                            <td class="name align-middle white-space-nowrap"> {{ $i->name }} </td>
                                            <td class="slug align-middle white-space-nowrap"> {{ $i->slug }} </td>
                                            <td class="align-middle white-space-nowrap">
                                                <div class=""><img class="img_td"
                                                        src="{{ asset('images/brand/' . $i->logo) }}" alt="" />
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap">
                                                <div class=""> edit </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <x-admin.table.pagination1 />
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4">

                <x-admin.card.card1 header="Add New">
                    <x-admin.form.form-post :action="route('admin.brand.store')" submit="Submit">
                        <x-admin.form.input-lbl-float name="name" type="text" placeholder="" lbl="Name" />
                        <x-admin.form.input-lbl-float name="slug" type="text" placeholder="" lbl="Slug" />
                        <x-admin.form.input-lbl-float name="logo" type="file" placeholder="" lbl="Logo" />
                    </x-admin.form.form-post>
                </x-admin.card.card1>


            </div>
        </div>

    </div>
</x-admin.app-layout>
