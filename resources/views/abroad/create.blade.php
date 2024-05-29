<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('abroads.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Puqara</label>
                                    <select name="client_id" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->fio }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="type">Tuwılǵan jeri</label>
                                    <select name="street_id" id="type" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($streets as $street)
                                            <option value="{{ $street->id }}">{{ $street->street_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Ketiw sebebi</label>
                                    <select name="type_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                   
                                   
                                    {{-- <input type="text" id="passport_number" name="passport_number"
                                        class="form-control @error('passport_number') is-invalid @enderror"
                                        value="{{ old('passport_number') }}" placeholder="KA0000000">
                                    @error('passport_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('abroads.index') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
