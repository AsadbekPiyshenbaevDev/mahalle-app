<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Taza xojalıq qosıw</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('houses.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="passport_number">Passport nomeri</label>
                                    <input type="text" id="passport_number" name="passport_number"
                                        class="form-control @error('passport_number') is-invalid @enderror"
                                        value="{{ old('passport_number') }}" placeholder="KA0000000">
                                    @error('passport_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="jshshir">JShShIR</label>
                                    <input type="number" id="jshshir"
                                        name="jshshir"class="form-control @error('jshshir') is-invalid @enderror"
                                        value="{{ old('jshshir') }}" placeholder="00000000000000">
                                    @error('jshshir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fio">FAÁ</label>
                                    <input type="text" id="fio" name="fio"
                                        class="form-control @error('fio') is-invalid @enderror"
                                        value="{{ old('fio') }}">
                                    @error('fio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birthday">Tuwılǵan sánesi</label>
                                    <input type="date" id="birthday" name="birthday"
                                        class="form-control @error('birthday') is-invalid @enderror"
                                        value="{{ old('birthday') }}">
                                    @error('birthday')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="house_count">Jınısı</label>
                                    <select name="gender_id" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($genders as $gender)
                                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nationality">Milleti</label>
                                    <select name="nationality_id" id="nationality_id" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($nationalities as $nationality)
                                            <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Kóshesi</label>
                                    <select name="street_id" id="street_id" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($streets as $street)
                                            <option value="{{ $street->id }}">{{ $street->street_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="house_number">Úy nomeri</label>
                                    <input type="number" id="house_number"
                                        name="house_number"class="form-control @error('house_number') is-invalid @enderror"
                                        value="{{ old('house_number') }}">
                                    @error('house_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Telefon nomer</label>
                                    <input type="text" id="phone" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cadaster">Kadastr nomeri</label>
                                    <input type="number" id="cadaster"
                                        name="cadaster"class="form-control @error('cadaster') is-invalid @enderror"
                                        value="{{ old('cadaster') }}" placeholder="00:00:00:00:00:0000">
                                    @error('cadaster')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Rayonı</label>
                                    <select name="city_id" id="street_id" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
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
