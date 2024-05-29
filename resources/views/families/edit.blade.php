<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">
                   
                    <div class="card-body">
                        <form action="{{ route('families.update',['family'=>$family->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="passport_number">Passport nomeri</label>
                                    <input type="text" id="passport_number" name="passport_number"
                                        class="form-control @error('passport_number') is-invalid @enderror"
                                       placeholder="KA0000000" value="{{$family->passport_number}}">
                                    @error('passport_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="jshshir">JShShIR</label>
                                    <input type="number" id="jshshir"
                                        name="jshshir"class="form-control @error('jshshir') is-invalid @enderror"
                                        placeholder="00000000000000" value="{{$family->jshshir}}">
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
                                         value="{{$family->fio}}">
                                    @error('fio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birthday">Tuwılǵan sánesi</label>
                                    <input type="date" id="birthday" name="birthday"
                                        class="form-control @error('birthday') is-invalid @enderror"
                                         value="{{$family->birthday}}">
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
                                    <select name="nationality_id" id="nationality" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($nationalities as $nationality)
                                            <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Shańaraq aǵzası</label>
                                    <select name="relative_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($relatives as $relative)
                                            <option value="{{ $relative->id }}">{{ $relative->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Telefon nomer</label>
                                    <input type="text" id="phone" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                       value="{{$family->phone}}">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="population">Puqaralıǵı</label>
                                    <select name="country_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="population">Tuwılǵan jeri</label>
                                    <select name="city_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="house_id" value="{{ $family->house_id }}">
                            <div class="card-footer text-right">
                                <a href="{{ route('backfamily',['family'=>$family->house_id])}}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
