<div>
    <div class="form-group row">
        <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

        <div class="col-md-6">
            <select wire:model="selectPais" class="form-control">
                <option value="" selected>Seleccionar Pais</option>
                @foreach($pais as $country)
                    <option value="{{ $country->id }}">{{ $country->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectPais))
        <div class="form-group row">
            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado/Provincia') }}</label>

            <div class="col-md-6">
                <select wire:model="selectEstado" class="form-control">
                    <option value="" selected>Seleccionar Estado/Provincia</option>
                    @foreach($estado as $state)
                        <option value="{{ $state->id }}">{{ $state->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectEstado))
        <div class="form-group row">
            <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

            <div class="col-md-6">
                <select wire:model="selectCiudad" class="form-control" name="ciudad_id">
                    <option value="" selected>Seleccionar Ciudad</option>
                    @foreach($ciudad as $city)
                        <option value="{{ $city->id }}">{{ $city->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
