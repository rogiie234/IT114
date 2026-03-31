<x-app-layout>
    <x-slot name="header">{{__('Manage Customer')}}</x-slot>
    <x-slot name="subHeader">{{__('You can manage your customer and register new customer here.')}}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <table class="datatable-init table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="20">#</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Complete Address</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="cursor: pointer">
                                    <td>1.</td>
                                    <td>Rogelyn J. Nepa</td>
                                    <td>09269673150</td>
                                    <td>jimenaneparogelyn@gmail.com</td>
                                    <td>Tagoloan, Misamis Oriental, Philippines</td>
                                    <td>
                                        <button class="btn btn-xs btn-block btn-light bg-white text-dark">
                                            <em class="icon ni ni-edit"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer">
                                    <td>2.</td>
                                    <td>Rogelyn J. Nepa</td>
                                    <td>09269673150</td>
                                    <td>jimenaneparogelyn@gmail.com</td>
                                    <td>Tagoloan, Misamis Oriental, Philippines</td>
                                    <td>
                                        <button class="btn btn-xs btn-block btn-light bg-white text-dark">
                                            <em class="icon ni ni-edit"></em>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>