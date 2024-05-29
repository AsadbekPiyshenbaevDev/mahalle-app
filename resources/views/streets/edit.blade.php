<x-layout>
    <div class="col-12" style="height:75vh;">
        <div class="row" style="display: flex;justify-content: center;">
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$street->street_name}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('streets.update',['street'=>$street->id]) }}" method="post">
                           @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="street_name">Kóshe atı</label>
                                <input type="text" id="street_name" placeholder="Kóshe atı" name="street_name"
                                    class="form-control "
                                    value="{{$street->street_name}}">
                               
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="house_count">Xojalıqlar sanı</label>
                                    <input type="number" id="house_count" placeholder="Xojalıq sanı" name="house_count"
                                        class="form-control "
                                        value="{{ $street->house_count}}">
                                 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="population">Xalıq sanı</label>
                                    <input type="number" id="population" placeholder="Xalıq sanı"
                                        name="population"class="form-control "
                                        value="{{ $street->population}}">
                                   
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('back') }}" class="btn">Izge qaytıw</a>
                                <button class="btn btn-primary">Saqlaw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
