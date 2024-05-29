<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Dápterdegi puqaralar dizimi</h4>
                        <a href="{{ route('notebooks.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
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
                                        <th>Rayonı</th>
                                        <th>Kóshesi</th>
                                        <th>Dápter túri</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notebooks as $notebook)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $notebook->client->fio }}</td>
                                            <td>{{ $notebook->client->jshshir }}</td>
                                            <td>{{ $notebook->client->birthday }}</td>
                                            <td>{{ $notebook->client->city }}</td>
                                            <td>{{ $notebook->street->street_name }}</td>
                                            <td>{{ $notebook->notebooktype->name }}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form
                                                        action="{{ route('notebooks.destroy', ['notebook' => $notebook->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('notebooks.edit', ['notebook' => $notebook->id]) }}"><i
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
