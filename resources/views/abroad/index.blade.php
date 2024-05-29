<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Uzaq múddetke ketken puqaralar dizimi</h4>
                        <a href="{{ route('abroads.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
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
                                        <th>Ketiw sebebi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abroads as $abroad)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $abroad->client->fio }}</td>
                                            <td>{{ $abroad->client->jshshir }}</td>
                                            <td>{{ $abroad->client->birthday }}</td>
                                            <td>{{ $abroad->street->street_name }}</td>
                                            <td>{{ $abroad->type->name }}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form
                                                        action="{{ route('abroads.destroy', ['abroad' => $abroad->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('abroads.edit', ['abroad' => $abroad->id]) }}"><i
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
