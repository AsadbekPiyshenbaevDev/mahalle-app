<x-layout>
    <div class="col-12">
        <div class="row" style="display: flex;justify-content: center; height: 75vh;">
            <div class="col-12 col-sm-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Puqara maǵlıwmatları</h4>
                    </div>
                    <div class="card-body">
                        <div class="row" style="gap: 10px;justify-content: center;">
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">FAÁ </strong>
                                <h5>{{ $family->fio }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">JSHSHIR</strong>
                                <h5> {{ $family->jshshir }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Passport nomer</strong>
                                <h5>{{ $family->passport_number }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Rayonı</strong>
                                <h5> {{ $family->city->name }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Kóshesi</strong>
                                <h5> {{ $family->house->street->street_name }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Xojalıq</strong>
                                <h5> {{ $family->house->fio }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Jınısı</strong>
                                <h5> {{ $family->gender->name }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Tuwılǵan sánesi</strong>
                                <h5> {{ $family->passport_number }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Puqaralıǵı</strong>
                                <h5> {{ $family->country->name }}</h5>
                            </div>
                            <div class="col-12 col-sm-5 col-lg-5" style="border-bottom: 1px solid rgb(194, 184, 184);">
                                <strong style="color: rgb(194, 184, 184);">Milleti</strong>
                                <h5> {{ $family->nationality->name }}</h5>
                            </div>
                        </div>
                        <div class="text-right pt-4" style="padding-right: 80px;">
                            <a href="{{ route('families.index') }}"
                                class="btn btn-outline-primary">Izge qaytıw</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
