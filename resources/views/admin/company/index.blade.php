<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Company</h5>
                {{-- @if(!$company)
                    <a href="{{ route('company.create') }}" class="btn btn-primary">Add</a>
                @endif --}}
                <a href="{{ route('company.create') }}" class="btn btn-primary">Add</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    SN
                                </th>
                                <th>Company Logo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($company)
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img src="{{ asset($company->logo) }}" width="120" alt="">
                                    </td>
                                    <td>
                                        {{ $company->name }}
                                    </td>
                                    <td>
                                        {{ $company->email }}
                                    </td>
                                    <td>
                                        {{ $company->phone }}
                                    </td>
                                    <td>
                                        <form action="{{ route('company.destroy', $company->id) }}" method="post">
                                        </form>
                                        @csrf
                                        @method('delete')
                                        <a  href="{{route('company.edit',$company->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('company.destroy', $company->id) }}"
                                            class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                                    </td>

                                </tr>
                            @endif



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
