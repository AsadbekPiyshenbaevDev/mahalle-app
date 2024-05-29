<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Nágranlıǵı bar puqaralar dizimi</h4>
                        <a href="{{ route('diseases.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                            Qosıw</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>FAÁ</th>
                                        <th>JSHSHIR</th>
                                        <th>Tuwılǵan sánesi</th>
                                        <th>Kóshesi</th>
                                        <th>Rayon</th>
                                        <th>Gruppa</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diseases as $disease)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $disease->client->fio }}</td>
                                            <td>{{ $disease->client->jshshir }}</td>
                                            <td>{{ $disease->client->birthday }}</td>
                                            <td>{{ $disease->client->street }}</td>
                                            <td>{{ $disease->client->city }}</td>
                                            <td>{{ $disease->diseasetype->name }}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form
                                                        action="{{ route('diseases.destroy', ['disease' => $disease->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('diseases.edit', ['disease' => $disease->id]) }}"><i
                                                        class="far fa-edit btn btn-primary"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</x-layout>
