<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">

                    <div class="card-header" style="display: flex;justify-content: space-between;">

                        <h4>Xojalıqlar dizimi</h4>
                        <a href="{{ route('houses.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                            Qosıw</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                  <tr>
                                    <th>FAÁ</th>
                                    <th>Kóshesi</th>
                                    <th>Úy nomeri</th>
                                    <th>Telefon nomeri</th>
                                    <th>Óshiriw/Ózgertiw/Kóriw</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($houses as $house)
                                    <tr>
                                        <td>{{$house->fio}}</td>
                                        <td>{{$house->street->street_name}}</td>
                                        <td>{{$house->house_number}}</td>
                                        <td>{{$house->phone}}</td>
                                        <td>
                                            <div style="display: flex;align-items: center;">
                                                <form action="{{route('houses.destroy',['house'=>$house->id])}}" method="POST"> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                                <a href="{{route('houses.edit',['house'=>$house->id])}}"><i class="far fa-edit btn btn-primary"></i></a>
                                                <a href="{{route('houses.show',['house'=>$house->id])}}"><i class="fas fa-eye btn btn-success"></i></a>
                                            </div>
                                        </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                    {{-- <div class="card-footer text-center">
                        <nav class="d-inline-block">
                            {{$houses->links()}}
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>
