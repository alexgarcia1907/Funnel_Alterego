<h6 class="titulo">{{ __('app.title') }}</h6>
                <div class="form-check check1 mt-4">
                    <label for="js-check1"><input class="check" id="js-check1" type="checkbox" name="servicio[0]" value="Web corporativa">{{ __('app.corporativa') }}</label>
                </div>
                <div class="form-check check2 mt-3">
                    <label for="js-check2"><input class="check" id="js-check2" type="checkbox" name="servicio[1]" value="Web catálogo">{{ __('app.catalogo') }}</label>
                </div>

                <div class="form-check check3 mt-3">
                    <label for="js-check3"><input class="check" id="js-check3" type="checkbox" name="servicio[2]" value="Tienda online">{{ __('app.tienda') }}</label>
                </div>
                <div class="form-check check4 mt-3">
                    <label for="js-check4"><input class="check" id="js-check4" type="checkbox" name="servicio[3]" value="Web con motor de reservas">{{ __('app.motor-reservas') }}</label>
                </div>
                <div class="form-check check5 mt-3">
                    <label for="js-check5"><input class="check" id="js-check5" type="checkbox" name="servicio[4]" value="Web restaurante + delivery">{{ __('app.web-restaurant') }}</label>
                </div>
                <div class="form-check check6 mt-3">
                    <label for="js-check6"><input class="check" id="js-check6" type="checkbox" name="servicio[5]" value="Alojamiento web y/o dominios">{{ __('app.alojamiento-web') }}</label>
                </div>
                <div class="form-check check7 mt-3">
                    <label for="js-check7"><input class="check" id="js-check7" type="checkbox" name="servicio[6]" value="Otros">{{ __('app.otros') }}</label>
                </div>
                <div class="mt-3">
                    <h6 class="inputform">{{ __('app.nombre') }}</h6>
                    <input class="input" type="text" name="nombre" id="nombre" placeholder="{{ __('app.nombre-placeholder') }}">
                </div>

                <button type="button" class="btn js-btnpaso1 mb-5 mt-4"><span>{{ __('app.text-btn-seguent') }}</span><i class="arrow fa fa-long-arrow-alt-right"></i></button>
