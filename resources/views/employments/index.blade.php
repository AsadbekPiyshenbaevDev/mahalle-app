<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Xalıq bántligi</h4>
                        <a href="{{ route('empoyments.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                            Qosıw</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>FAÁ</th>
                                        <th>Jınısı</th>
                                        <th>JSHSHIR</th>
                                        <th>Kóshesi</th>
                                        <th>Bántlik</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employments as $employment)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $employment->client->fio }}</td>
                                            <td>{{ $employment->client->gender }}</td>
                                            <td>{{ $employment->client->jshshir }}</td>
                                            <td>{{ $employment->client->street }}</td>
                                            <td>{{ $employment->employmenttype->name }}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form
                                                        action="{{ route('empoyments.destroy', ['empoyment' => $employment->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('empoyments.edit', ['empoyment' => $employment->id]) }}"><i
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
