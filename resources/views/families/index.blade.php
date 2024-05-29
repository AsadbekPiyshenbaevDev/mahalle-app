<x-layout>
    <div class="col-12">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="card">

                    <div class="card-header" style="display: flex;justify-content: space-between;">

                        <h4>Xalıq dizimi</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>FAÁ</th>
                                        <th>JSHSHIR</th>
                                        <th>Passport nomeri</th>
                                        <th>Tuwılǵan sánesi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($houses as $house)
                                        <tr>
                                            <td>{{ $house->fio }}</td>
                                            <td>{{ $house->jshshir }}</td>
                                            <td>{{ $house->passport_number }}</td>
                                            <td>{{ $house->birthday }}</td>
                                            <td>
                                                <div style="display: flex;align-items: center;">
                                                    
                                                    <a href="{{ route('houses.show', ['house' => $house->id]) }}"><i
                                                            class="fas fa-eye btn btn-success"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach ($families as $family)
                                        <tr>
                                            <td>{{ $family->fio }}</td>
                                            <td>{{ $family->jshshir }}</td>
                                            <td>{{ $family->passport_number }}</td>
                                            <td>{{ $family->birthday }}</td>
                                            <td>
                                                <a href="{{ route('families.show', ['family' => $family->id]) }}"><i
                                                        class="fas fa-eye btn btn-success"></i></a>
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
