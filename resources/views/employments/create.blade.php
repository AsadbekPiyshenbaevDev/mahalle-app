<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('empoyments.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Puqara</label>
                                    <select name="client_id" id="client_id"
                                        class="form-control @error('client_id') is-invalid @enderror">
                                        <option selected>Saylań</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->fio }}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="population">Kóshesi</label>
                                    <select name="sreet_id" id="client_id" class="form-control ">
                                        <option selected>Saylań</option>
                                        @foreach ($streets as $client)
                                            <option value="{{ $client->id }}">{{ $client->street_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="population">Bántlik túri</label>
                                    <select name="employment_id" id="client_id" class="form-control ">
                                        <option selected>Saylań</option>
                                        @foreach ($employments as $employment)
                                            <option value="{{ $employment->id }}">{{ $employment->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('empoyments.index') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
