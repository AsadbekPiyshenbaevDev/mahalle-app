<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Jalǵız nuraniyler dizimi</h4>
                        <a href="{{ route('greats.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($greats as $great)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $great->client->fio }}</td>
                                            <td>{{ $great->client->jshshir }}</td>
                                            <td>{{ $great->client->birthday }}</td>
                                            <td>{{ $great->client->city }}</td>
                                            <td>{{ $great->client->street }}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form
                                                        action="{{ route('greats.destroy', ['great' => $great->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
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
