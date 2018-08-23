<div class="container call-me">
    {{--{{--}}
    {{--$cars = DB::table('cars')->get()--}}
    {{--{{dd($cars)}}--}}
{{--    {{gettype($cars)}}--}}
    <h2 class="call-me__header">Запись в автосервис онлайн</h2>
    <form action="{{ route('callme') }}" method="POST" class="call-me__form">
        @csrf
        <div class="d-flex flex-row form__line--1">
            <div class="form-group d-flex flex-column">
                <label for="brand" class="col-form-label text-left">Марка <span class="red-require">*</span></label>
                <select id="brand" class="form-control {{ $errors->has('brand') ? ' is-invalid' : '' }}" name="name">
                    @foreach($cars as $car)
                    <option>{{$car->brand}}</option>
                      @endforeach
                </select>
                {{--<input  type="text" class="{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="name" value="{{ old('brand') }}"--}}
                {{--required autofocus>--}}
                @if ($errors->has('brand'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('brand') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex flex-column">
                <label for="model" class="col-form-label text-left">Модель <span class="red-require">*</span></label>
                <input id="model" type="text" class="{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model"
                       value="{{ old('model') }}" required>
                @if ($errors->has('model'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('model') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex flex-column">
                <label for="year" class="col-form-label text-left">Год выпуска <span class="red-require">*</span></label>

                <input id="year" type="number" class="{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year"
                       value="{{ old('year') }}" required>
                @if ($errors->has('year'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex flex-column">
                <label for="engine" class="col-form-label text-left">Двигатель <span class="red-require">*</span></label>

                <input id="engine" type="text" class="{{ $errors->has('engine') ? ' is-invalid' : '' }}" name="engine"
                       value="{{ old('engine') }}" required>
                @if ($errors->has('engine'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('engine') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="d-flex flex-row form__line--2">
            <div class="form-group d-flex flex-column">
                <label for="work" class="col-form-label text-left">Вид работ <span class="red-require">*</span></label>
                <input id="work" type="text" class="{{ $errors->has('work') ? ' is-invalid' : '' }}" name="work"
                       value="{{ old('work') }}" required>
                @if ($errors->has('work'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('engine') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex flex-column">
                <label for="mileage" class="col-form-label text-left">Пробег <span class="red-require">*</span></label>

                <input id="mileage" type="text" class="{{ $errors->has('mileage') ? ' is-invalid' : '' }}" name="mileage"
                       value="{{ old('mileage') }}" required>
                @if ($errors->has('mileage'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('mileage') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex flex-column">
                <label for="spear" class="col-form-label text-left">Запчасти <span class="red-require">*</span></label>

                <input id="spear" type="text" class="{{ $errors->has('spear') ? ' is-invalid' : '' }}" name="spear"
                       value="{{ old('spear') }}" required>
                @if ($errors->has('spear'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('spear') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex flex-column">
                <label for="phone" class="col-form-label">Телефон <span class="red-require">*</span></label>

                <input id="phone" type="text" class="{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                       value="{{ old('phone') }}" required>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="d-flex flex-row justify-content-between mt-3 form__line--3">
            <p class="ml-3"><span class="red-require">*</span> - обязательные поля</p>
            <div class="form-group d-flex flex-column">
                <input type="submit" class="btn btn-primary" name="phone" value="Отправить" required>
            </div>
        </div>

    </form>
</div>