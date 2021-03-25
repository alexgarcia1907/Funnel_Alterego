
<h6 class="titulo titulopaso2"></h6>
                
            <textarea class="textarea" name="explicarmas" id="explicarmas" cols="30" rows="7" placeholder="Explícanos un poco mas..."></textarea>

            <div id="js-webderenting">
                <p>Te podemos ofrecer con <b>webderentig.com</b> pagar tu web en 48 mensualidades. ¿Te interesa?</p>

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Si" name="mensualidades[0]" id="Si">
                    <label class="form-check-label" for="Si">Si</label>
                    <input class="form-check-input" type="checkbox" value="No" name="mensualidades[1]" id="No">
                    <label class="form-check-label" for="No">No</label>
                </div>
            </div>

                <p class="d-none js-delivery">Disponemos de diferentes opciones, y una puede ser en alquiler con <b>pickafoodie.com</b>, donde por 45€ al mes puedes tener tu plataforma de venta de comida en el restaurante y a domicilio.</p>

                <p class="d-none js-opensh">Disponemos de diferentes soluciones para tu tienda online. Si quieres tu tienda dede 9€ al mes, puedes ir directamente a crearla en <b>openshopen.com</b></p>
            <div class="js-motorreservas d-none">
                <p>Si no dispones de motor de reservas ¿Quieres que te lo facilitemos?</p>
                <input type="checkbox" value="Si" name="motorreserva[0]" id="">Si
                <input type="checkbox" value="No" name="motorreserva[1]" id="">No
            </div>
                @include('pasos.dejaremail') 

            <button type="submit" class="btn js-btnpaso1 mb-5 mt-4"><span>Enviar</span><i class="fa fa-envelope"></i></button>