<x-app-layout>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Company Edit</h4>
                        <a class="btn btn-primary" href="{{ route('admin.company.index') }}">go back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.company.update', $company->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $company->name }}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $company->email }}">
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="contact">Contact Number</label>
                                    <input type="tel" name="contact" id="contact" class="form-control"
                                        value="{{ $company->contact }}">
                                    @error('contact')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="{{ $company->address }}">
                                    @error('address')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        value="{{ $company->facebook }}">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" name="youtube" id="youtube" class="form-control"
                                        value="{{ $company->youtube }}">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                    @error('logo')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <button type="submit" class="btn btn-success">Save Record</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
