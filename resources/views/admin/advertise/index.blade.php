<x-app-layout>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Advertise</h4>
                        <a class="btn btn-primary" href="{{ route('admin.advertise.create') }}">add new</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Company Name </th>
                                        <th>Contact</th>
                                        <th>Image</th>
                                        <th>Expire Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($advertises as $i => $advertise)
                                        <tr>
                                            <td>
                                                {{ ++$i }}
                                            </td>
                                            <td>
                                                {{ $advertise->company_name }}
                                            </td>
                                            <td>
                                                {{ $advertise->contact }}
                                            </td>
                                            <td>
                                                <img src="{{ asset($advertise->image) }}" width="120"
                                                    alt="{{ $advertise->company_name }}">
                                            </td>
                                            <td>
                                                {{ $advertise->expire_date }}
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.advertise.destroy', $advertise->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('admin.advertise.edit', $advertise->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
