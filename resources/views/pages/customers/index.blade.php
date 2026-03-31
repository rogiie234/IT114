<x-app-layout>
    <x-slot name="header">{{__('Manage Customer')}}</x-slot>
    <x-slot name="subHeader">{{__('You can manage your customer and register new customer here.')}}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal"
                                data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;
                                Register New Customer
                            </button>
                        </span>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title">
                        Register New Customer
                    </h1>
                    <hr class="mt-2 mb-2">
                    {{-- --}}
                    Forms "--"
                </div>
            </div>
        </div>
    </div>
</x-app-layout>