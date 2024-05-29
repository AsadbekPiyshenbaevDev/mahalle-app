<x-layout>
    <div class="col-12" style="height:75vh;">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Taza kóshe qosıw</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('streets.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="street_name">Kóshe atı</label>
                                <input type="text" id="street_name" placeholder="Kóshe atı" name="street_name"
                                    class="form-control @error('street_name') is-invalid @enderror"
                                    value="{{ old('street_name') }}">
                                @error('street_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="house_count">Xojalıqlar sanı</label>
                                    <input type="number" id="house_count" placeholder="Xojalıq sanı" name="house_count"
                                        class="form-control @error('house_count') is-invalid @enderror"
                                        value="{{ old('house_count') }}">
                                    @error('house_count')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="population">Xalıq sanı</label>
                                    <input type="number" id="population" placeholder="Xalıq sanı"
                                        name="population"class="form-control @error('population') is-invalid @enderror"
                                        value="{{ old('population') }}">
                                    @error('population')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('back') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
