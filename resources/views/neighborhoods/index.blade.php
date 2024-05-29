<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Jetilik dizimi</h4>
                        <a href="{{ route('neighborhoods.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                            Qosıw</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>№</th>
                                        <th>FAÁ</th>
                                        <th>JSHSHIR</th>
                                        <th>Tuwılǵan sánesi</th>
                                        <th>Rayonı</th>
                                        <th>Lawazımı</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($neighborhoods as $neighborhood)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$neighborhood->fio}}</td>
                                            <td>{{$neighborhood->jshshir}}</td>
                                            <td>{{$neighborhood->birthday}}</td>
                                            <td>{{$neighborhood->city->name}}</td>
                                            <td>{{$neighborhood->position->name}}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form action="{{route('neighborhoods.destroy',['neighborhood'=>$neighborhood->id])}}" method="POST"> 
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{route('neighborhoods.edit',['neighborhood'=>$neighborhood->id])}}"><i class="far fa-edit btn btn-primary"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <nav class="d-inline-block">
                            {{-- {{$neighborhoods->links()}} --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
