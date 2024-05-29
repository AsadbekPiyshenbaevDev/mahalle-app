<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-6">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('diseases.update',['disease'=>$disease->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Puqara</label>
                                    <select name="client_id" id="client_id"
                                        class="form-control @error('client_id') is-invalid @enderror">
                                        <option selected>Saylań</option>
                                        @foreach ($clients as $client)
                                            <option {{($disease->client_id==$client->id) ? "selected":""}}  value="{{ $client->id }}">{{ $client->fio }}</option>
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
                                        @foreach ($streets as $street)
                                            <option {{($disease->client->street==$street->id) ? "selected":""}}  value="{{ $client->id }}">{{ $client->street_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="population">Gruppası</label>
                                    <select name="diseasetype_id"  class="form-control ">
                                        <option selected>Saylań</option>
                                        @foreach ($diseasetypes as $diseasetype)
                                            <option {{($disease->diseasetype_id==$diseasetype->id) ? "selected":""}}   value="{{ $diseasetype->id }}">{{ $diseasetype->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <a href="{{ route('diseases.index') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
