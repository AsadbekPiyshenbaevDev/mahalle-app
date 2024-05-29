<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center; height: 75vh;">
            <div class="col-12 col-sm-10 col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab3" role="tablist"
                            style="display: flex;justify-content: center;border: 1px solid #6777ef;border-radius: .25rem;">
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3"
                                    role="tab" aria-controls="home" aria-selected="false">Tiykarǵı maǵlıwmatlar</a>
                            </li>
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link " id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                    aria-controls="profile" aria-selected="true">Shańaraq aǵzaları</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane active show     fade" id="home3" role="tabpanel"
                                aria-labelledby="home-tab3">
                                <div class="row" style="gap: 10px;justify-content: center;">
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">Passport nomer</strong>
                                        <h5>{{ $house->passport_number }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">JSHSHIR</strong>
                                        <h5> {{ $house->jshshir }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">FAÁ</strong>
                                        <h5>{{ $house->fio }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">Tuwılǵan sánesi</strong>
                                        <h5> {{ $house->birthday }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">Kóshesi</strong>
                                        <h5> {{ $house->street->street_name }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">Úy nomeri</strong>
                                        <h5> {{ $house->house_number }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">Kadastr nomeri</strong>
                                        <h5> {{ $house->cadaster }}</h5>
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid #000;">
                                        <strong style="color: rgb(194, 184, 184);">Tuwılǵan sánesi</strong>
                                        <h5> {{ $house->passport_number }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                <div class="card" style="box-shadow: none;">
                                    <div class="card-body p-0">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Shańaraq aǵzası</th>
                                                    <th scope="col">FAÁ</th>
                                                    <th scope="col">Tuwılǵan sánesi</th>
                                                    <th scope="col">Telefon nomeri</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{ $house->relative }}</td>
                                                    <td>{{ $house->fio }}</td>
                                                    <td>{{ $house->birthday }}</td>
                                                    <td>{{ $house->phone }}</td>
                                                    <td>
                                                        <div style="display: flex;align-items: center;">
                                                            <form
                                                                action="{{ route('houses.destroy', ['house' => $house->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                            <a href="{{ route('houses.edit', ['house' => $house->id]) }}"><i
                                                                    class="far fa-edit btn btn-primary"></i></a>
                                                            <a href="{{ route('houses.show', ['house' => $house->id]) }}"><i
                                                                    class="fas fa-eye btn btn-success"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @foreach ($house->families as $fam)
                                                    <tr>
                                                        <td>{{ $fam->relative->name }}</td>
                                                        <td>{{ $fam->fio }}</td>
                                                        <td>{{ $fam->birthday }}</td>
                                                        <td>{{ $fam->phone }}</td>
                                                        <td>
                                                            <div style="display: flex;align-items: center;">
                                                                <form
                                                                    action="{{ route('families.destroy', ['family' => $fam->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                                <a
                                                                    href="{{ route('families.edit', ['family' => $fam->id]) }}"><i
                                                                        class="far fa-edit btn btn-primary"></i></a>
                                                                <a
                                                                    href="{{ route('houseshow', ['id' => $fam->id]) }}"><i
                                                                        class="fas fa-eye btn btn-success"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{route('houses.index')}}" class="btn btn-outline-primary">Izge qaytıw</a>
                                    <a href="{{ route('famcreate', ['id' => $house->id]) }}"
                                        class="btn btn-primary">Shańaraq aǵzasın qosıw</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
