<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Jetilik aǵzasın qosıw</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('neighborhoods.update',['neighborhood'=>$neighborhood->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="passport_number">Passport nomeri</label>
                                    <input type="text" id="passport_number" name="passport_number"
                                        class="form-control @error('passport_number') is-invalid @enderror"
                                        value="{{ $neighborhood->passport_number}}" placeholder="KA0000000">
                                    @error('passport_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="jshshir">JShShIR</label>
                                    <input type="number" id="jshshir"
                                        name="jshshir"class="form-control @error('jshshir') is-invalid @enderror"
                                        value="{{ $neighborhood->jshshir }}" placeholder="00000000000000">
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
                                        value="{{$neighborhood->fio}}">
                                    @error('fio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birthday">Tuwılǵan sánesi</label>
                                    <input type="date" id="birthday" name="birthday"
                                        class="form-control @error('birthday') is-invalid @enderror"
                                        value="{{ $neighborhood->birthday }}">
                                    @error('birthday')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Tuwılǵan jeri</label>
                                    <select name="city_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Telefon nomer</label>
                                    <input type="text" id="phone" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{$neighborhood->phone}}">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Lawazımı</label>
                                    <select name="position_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('neighborhoods.index') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
