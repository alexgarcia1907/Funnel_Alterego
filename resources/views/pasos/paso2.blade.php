
<h6 class="titulo titulopaso2"></h6>
                
            <textarea class="textarea" name="explicarmas" id="explicarmas" cols="30" rows="7" placeholder="{{ __('app.explicarmas-placeholder') }}"></textarea>
            <div id="js-webderenting">
                <p>{!! __('app.txt-webderenting') !!}</p>

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Si" name="mensualidades[0]" id="Si">
                    <label class="form-check-label" for="Si">Si</label>
                    <input class="form-check-input" type="checkbox" value="No" name="mensualidades[1]" id="No">
                    <label class="form-check-label" for="No">No</label>
                </div>
            </div>

                <p class="d-none js-delivery">{!! __('app.txt-delivery') !!}</p>

                <p class="d-none js-opensh">{!! __('app.txt-opensh') !!}</p>
            <div class="js-motorreservas d-none">
                <p>{{ __('app.txt-motorreservas') }}</p>
                <input type="checkbox" value="Si" name="motorreserva[0]" id="">Si
                <input type="checkbox" value="No" name="motorreserva[1]" id="">No
            </div>
                @include('pasos.dejaremail') 

            <button type="submit" class="btn js-btnpaso1 mb-5 mt-4"><span>{{ __('app.text-btn-enviar') }}</span><i class="fa fa-envelope"></i></button>