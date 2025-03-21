<x-app-layout>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Company</h4>
                        @if (!$company)
                            <a class="btn btn-primary" href="{{ route('admin.company.create') }}">add new</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Logo </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
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
                                                <img height="60" src="{{ asset($company->logo) }}" alt="">
                                            </td>
                                            <td>
                                                {{ $company->name }}
                                            </td>
                                            <td>
                                                {{ $company->email }}
                                            </td>
                                            <td>
                                                {{ $company->contact }}
                                            </td>
                                            <td>
                                                {{ $company->address }}
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.company.destroy', $company->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('admin.company.edit', $company->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
