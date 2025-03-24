<x-app-layout>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Advertise Create</h4>
                        <a class="btn btn-primary" href="{{ route('admin.advertise.index') }}">go back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.advertise.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="location">Select Advertise Location</label>
                                    <select name="location" id="location" class="form-control">
                                        <option value="header">Header (1000x1000) </option>
                                        <option value="home">Home Page (1000x1000)</option>
                                        <option value="category">Category Page (400x400)</option>
                                        <option value="article">Article Page (400x400)</option>
                                    </select>
                                    @error('location')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" class="form-control"
                                        value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="contact">Company Contact</label>
                                    <input type="text" name="contact" id="contact" class="form-control"
                                        value="{{ old('contact') }}">
                                    @error('contact')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="expire_date">Expire Date</label>
                                    <input type="date" min="{{ now()->format('Y-m-d') }}" name="expire_date"
                                        id="expire_date" class="form-control" value="{{ old('expire_date') }}">
                                    @error('expire_date')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="redirect_url">Redirect URL</label>
                                    <input type="text" name="redirect_url" id="redirect_url" class="form-control"
                                        value="{{ old('redirect_url') }}">
                                    @error('redirect_url')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    @error('image')
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
