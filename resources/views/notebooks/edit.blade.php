<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('notebooks.update', ['notebook' => $notebook->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Puqara</label>
                                    <select name="client_id" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($clients as $client)
                                            <option {{ $notebook->client_id == $client->id ? 'selected' : '' }}
                                                value="{{ $client->id }}">{{ $client->fio }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="type">Tuwılǵan jeri</label>
                                    <select name="street_id" id="type" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($streets as $street)
                                            <option {{ $notebook->street_id == $street->id ? 'selected' : '' }}
                                                value="{{ $street->id }}">{{ $street->street_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="population">Túri</label>
                                    <select name="notebooktype_id" id="street" class="form-control">
                                        <option selected>Saylań</option>
                                        @foreach ($types as $type)
                                            <option {{ $notebook->notebooktype_id == $type->id ? 'selected' : '' }}
                                                value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('notebooks.index') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
