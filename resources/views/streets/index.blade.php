<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <h4>Kósheler dizimi</h4>
                        <a href="{{ route('streets.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                            Qosıw</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>№</th>
                                        <th>Kóshe atı</th>
                                        <th>Xojalıq sanı</th>
                                        <th>Xalıq sanı</th>
                                        <th>Óshiriw/Ózgertiw</th>
                                    </tr>
                                    @foreach ($streets as $street)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$street->street_name}}</td>
                                            <td>{{$street->house_count}}</td>
                                            <td>
                                                {{$street->population}}
                                            </td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    <form action="{{route('streets.destroy',['street'=>$street->id])}}" method="POST"> 
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{route('streets.edit',['street'=>$street->id])}}"><i class="far fa-edit btn btn-primary"></i></a>
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
                            {{$streets->links()}}
                            {{-- <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
