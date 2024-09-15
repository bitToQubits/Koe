<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/aos.min.css">
  <style>
    .error_msg{
        color: red;
        font-size: 0.75rem;
    }
  </style>
  <title>Koe</title>
  <link rel="icon" href="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" type="image/x-icon">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <section class="mt-16 mb-10">
        <div class="flex justify-center mb-5" data-aos="fade-up">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1E52DC" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>
        </div>
        <h1 class="text-3xl text-center font-bold" data-aos="fade-up">Contáctanos</h1>
        <p class="text-center text-gray-900" data-aos="fade-up">Envíanos un mensaje y nos pondremos en contacto contigo.</p>
        <form class="grid lg:grid-cols-2 grid-cols-1 text-white mx-11 mt-8 gap-5" id="formContacto" name="formContacto">
            <div class="relative" data-aos="fade-up">
                <label for="name">Tu nombre</label>
                <input type="text" required name="name" id="name" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nombre">
            </div>
            <div class="relative" data-aos="fade-up">
                <label for="email">Tu correo</label>
                <input type="email" required name="email" id="email" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Correo">
            </div>
            <div class="col-span-2" data-aos="fade-up">
                <label for="nombre_empresa">Nombre de su empresa.</label>
                <input type="text" required name="nombre_empresa" id="nombre_empresa" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nombre de su empresa">
            </div>
            <div class="col-span-2" data-aos="fade-up">
                <label for="mensaje">Mensaje</label>
                <textarea required name="mensaje" id="mensaje" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Mensaje"></textarea>
            </div>
            <div class="col-span-2" data-aos="fade-up">
                <button type="button" onclick="guardar_form()" id="enviarForm" class="block w-full mt-3 rounded-md bg-indigo-600 text-white py-2.5 text-center">Enviar</button>
            </div>
        </form>
    </section>
    <?php
        include 'footer.php';
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script>
        AOS.init({disable: 'mobile'});

        const mensaje_error = `<span class="error_msg">Favor rellenar este campo</span>`;
        
        document.querySelectorAll('[required]').forEach(function (campo) {
            campo.addEventListener('change', manejarCamposInvalidos);
        });

        function validar_form(){
            const required_inputs = document.querySelectorAll('[required]');
            let form_valido = true;
            for(input of required_inputs){
                let objetivo_insercion = null;
                let input_file = true;
                let input_file_rellenado = false;

                if(input.type == "file"){
                    objetivo_insercion = document.querySelector("#"+input.id + "_desc");
                    if(document.querySelector('[for="'+input.id+'"] .texto-iborrainputfile').textContent.trim() != "Subir"){
                        input_file_rellenado = true;
                    }

                }else{
                    objetivo_insercion = input;
                }
                if(input.value.trim() == "" && !input_file_rellenado){
                    form_valido = false;
    
                    if(objetivo_insercion.nextSibling.nodeName == "SPAN" && objetivo_insercion.nextSibling.classList.contains('error_msg')){
                        continue;
                    }
    
                    objetivo_insercion.insertAdjacentHTML("afterend", mensaje_error);
                }else{
                    if(objetivo_insercion.nextSibling.nodeName !== "SPAN"){
                        continue;
                    }
    
                    if(objetivo_insercion.nextSibling.classList.contains('error_msg')){
                        objetivo_insercion.nextSibling.remove();
                    }
                }
    
            }
    
            return form_valido;
        }

        async function guardar_form(){

            if(!validar_form()){
                return;
            }

            document.querySelector('#enviarForm').disabled = true;

            // document.querySelector('body').classList.add("loading");

            document.querySelector('#enviarForm').disabled = false;

            let data = new FormData(document.querySelector('#formContacto'));

            let response = await fetch("backend.php", {
                method: 'POST',
                body: data
            });

            let result = await response.json();

            if(result.status == "success"){
                swal("Mensaje enviado", "Nos pondremos en contacto contigo", "success");
                document.querySelector('#formContacto').reset();
            }else{
                swal("Error", "Ocurrió un error al enviar el mensaje", "error");
            }

            // document.querySelector('body').classList.remove("loading");

        }

        function manejarCamposInvalidos(evento){
            let input = evento.currentTarget;
            let elemento_cercano_al_mensaje_error = null;

            if(input.type == "file"){
                elemento_cercano_al_mensaje_error = document.querySelector("#"+input.id + "_desc");
            }else{
                elemento_cercano_al_mensaje_error = input;
            }

            let existe_mensaje_error = elemento_cercano_al_mensaje_error.nextSibling.nodeName == "SPAN" 
            && elemento_cercano_al_mensaje_error.nextSibling.classList.contains('error_msg');

            let btn = null;

            if(input.type == "file"){
                btn = document.querySelector('[data-delete="'+input.id.replace(/\D/g, '')+'"]')
            }

            if(input.value.trim() == ""){
                if(!existe_mensaje_error){
                    elemento_cercano_al_mensaje_error.insertAdjacentHTML('afterend', mensaje_error);
                }
                
                if(input.type == "file"){
                    btn.classList.add('hide');
                }
            }else{
                if(existe_mensaje_error){
                    elemento_cercano_al_mensaje_error.nextSibling.remove();
                }

                if(input.type == "file"){
                    btn.classList.remove('hide');
                }
            }
        }
    </script>
</body>