<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-6">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('inspectors.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="population">Puqara</label>
                                    <select name="client_id" id="client_id" class="form-control @error('client_id') is-invalid @enderror">
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
                            </div>

                            <div class="card-footer text-right">
                                <a href="{{ route('inspectors.index') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
